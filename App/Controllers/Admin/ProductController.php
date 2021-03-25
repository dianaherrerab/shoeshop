<?php

// función que carga la vista principal de la pagina
class ProductController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// instanciamos el modelo del controlador
		$this->ProductModel = $this->model('Product');
		// instanciamos el modelo del controlador
		$this->ImageModel = $this->model('Image');
		// instanciamos el modelo del controlador
		$this->ProductSizeModel = $this->model('ProductSize');
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->redirect('Admin/Product/Listing');
	}

	// función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// obtenemos los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		
		// mostramos la vista al usuario
		echo $this->view( 'admin/product/index', $lista );
	}

	// función para consultar por medio de ajax para estar cargando los datos sin recargar la página
	public function pagination( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// obtenemos los datos del modelo
		$jsondata = $this->data( $pagina, $input_whr, $value_whr );
		// agregamos la cabecera de json para evitar errores
		header('Content-type: application/json; charset=utf-8');
		// mostramos la vista al usuario
		echo json_encode( $jsondata, JSON_FORCE_OBJECT );
	}

	// función para obtener los datos del listado
	public function data( $pagina, $input_whr, $value_whr )
	{
		// obtenemos obtenemos los datos del listado
		$data = $this->ProductModel->listing( $pagina, $input_whr, $value_whr );
		
		// variable que contendra el listado
		$list = "";
		// validamos que existan datos
		if( $data['cant'] > 0 ) 
		{
			// recorremos los datos existentes
			foreach( $data['list'] as $product )
			{
				// Buscamos el estado de cada producto
				$statusProduct = $this->ProductModel->find_status( $product['statusProductId'] );
				// Captura el estado
				$product['status'] = $statusProduct['name'];
				// vamos concatenando cada dato
				$list .= '
					<tr class="color-gris">
						<td>'.$product['productId'].'</td>
						<td>'.$product['name'].'</td>
						<td>'.$product['price'].'</td>
						<td>'.$product['brand'].'</td>
						<td>'.$product['status'].'</td>
						<td class="text-center">
							<a href="'.URL.'Admin/Product/edit/'.$product['slug'].'"><i class="far  fa-2x fa-edit color-naranja"></i></a>
							<a href=""><i class="far  fa-2x fa-trash-alt color-naranja"></i></a>
                        </td> 
					</tr>
				';	
			};
		}
		else
		{
			// asignamos el código para mostrar que no se han encontrado resultados
			$list .= '
				<tr>
					<td colspan="8" class="grey-text text-center h6 py-4">
						<i class="fa fa-ban mr-2"></i>
						No se han encontrado resultados
					</td>
				</tr>
			';
		}
		// cambiamos el valor del parametro que tiene los resultados de la lista con el valor que acabamos de crear
		$data['list'] = $list;
		// retornamos el array
		return $data;	
	}

	// función para mostrar la vista de editar
	public function edit( $slug )
	{	
		// Busca un producto según el slug de su nombre
		$product = $this->ProductModel->find_by_slug( $slug );
		// Busca las imagenes del producto
		$images = $this->ImageModel->find_images_by_id( $product['productId'] );
		// Busca las tallas del producto
		$sizes = $this->ProductSizeModel->find_size( $product['productId'] );
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'product' => $product,
			'images' => $images,
			'sizes' => $sizes
		];
		// Dirige a la vista con el arreglo de datos
        echo $this->view('admin/product/edit', $params);
	}
	
	// función para actualizar un registro completamente
	public function update()
	{
		// Validamos que sea una petición enviada por post
	$this->__post();
	// validación de campos
	$errors = $this->validate( $_POST, [
		'name|nombre' => 'required'
	]);
	// Validamos si existe un error
	if( $errors )
	{
		// Mostramos el mensaje de error al usuario
		echo $this->errors();
		// evitamos que siga la función
		return;
	}
	// Realizamos la petición de registro
	$result = $this->ProductModel->update( $_POST );
	// Validamos si existe un error
	if( !$result )
	{
		// Agregamos el mensaje a la variable para ser mostrada
		array_push( $this->errors, $result );
		// Mostramos el mensaje de error al usuario
		echo $this->errors();
	}
	else
		// Mostramos el mensaje de éxito al usuario
		echo "true";
	}

	// función para mostrar la vista de crear
	public function create()
	{	
		// mostramos la vista
		$this->view('admin/product/create');
	}

}