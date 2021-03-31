<?php

// Clase para gestionar la información de los productos
class ProductController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Instancia modelo de los productos
		$this->ProductModel = $this->model('Product');
		// Instancia modelo de las imagenes del producto
		$this->ImageModel = $this->model('Image');
		// Instancia modelo de las tallas del producto
		$this->ProductSizeModel = $this->model('ProductSize');
		// Instancia el modelo de las tiendas
		$this->StoreModel=$this->model('Store');
	}

	// Función para mostrar el listado de productos
	public function index()
	{	
		// Redirige al método de listado
		$this->redirect('Admin/Product/Listing');
	}

	// Función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// Obtiene los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		// Muestra la vista al usuario con los datos
		echo $this->view( 'admin/product/index', $lista );
	}

	// Función para consultar los datos sin recargar la página por medio de Ajax
	public function pagination( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// Obtiene los datos del modelo
		$jsondata = $this->data( $pagina, $input_whr, $value_whr );
		// Agrega la cabecera de Json para evitar errores
		header('Content-type: application/json; charset=utf-8');
		// Muestra la vista al usuario
		echo json_encode( $jsondata, JSON_FORCE_OBJECT );
	}

	// Función para obtener los datos del listado
	public function data( $pagina, $input_whr, $value_whr )
	{
		// Obtiene los datos del listado
		$data = $this->ProductModel->listing( $pagina, $input_whr, $value_whr );
		// Variable que contiene el listado
		$list = "";
		// Valida que existan datos
		if( $data['cant'] > 0 ) 
		{
			// Recorre los datos existentes
			foreach( $data['list'] as $product )
			{
				// Busca el nombre del estado de cada producto
				$statusProduct = $this->ProductModel->find_status( $product['statusProductId'] );
				// Captura el nombre del estado
				$product['status'] = $statusProduct['name'];
				// Concatena cada dato
				$list .= '
					<tr class="color-gris">
						<td>'.$product['productId'].'</td>
						<td>'.$product['name'].'</td>
						<td>'.$product['price'].'</td>
						<td>'.$product['brand'].'</td>
						<td>'.$product['status'].'</td>
						<td class="text-center">
							<a href="'.URL.'Admin/Product/edit/'.$product['slug'].'"><i class="far  fa-2x fa-edit color-naranja"></i></a>
							
                        </td> 
					</tr>
				';	
			};
		}
		else
		{
			// En caso de no haber datos, se muestra el mensaje correspondiente
			$list .= '
				<tr>
					<td colspan="8" class="grey-text text-center h6 py-4">
						<i class="fa fa-ban mr-2"></i>
						No se han encontrado resultados
					</td>
				</tr>
			';
		}
		// Reemplaza el parametro que tiene los resultados de la lista con el nuevo valor
		$data['list'] = $list;
		// Retorna el array
		return $data;	
	}

	// Función para mostrar la vista de editar
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
		// Muestra la vista con el arreglo de datos
        echo $this->view('admin/product/edit', $params);
	}
	
	// Función para actualizar un registro existente
	public function update()
	{
		// Valida que sea una petición enviada por post
		$this->__post();
		// validación de campos
		$errors = $this->validate( $_POST, [
			'name|nombre' => 'required',
			'categoryId|categoria' => 'required',
			'brand|nombre' => 'required',
			'genderId|categoria' => 'required',
			'material|nombre' => 'required',
			'color|categoria' => 'required',
			'description|nombre' => 'required',
			'price|categoria' => 'required',
		]);
		// Valida si existe un error
		if( $errors )
		{
			// Muestra el mensaje de error al usuario
			echo $this->errors();
			// Evita que siga ejecutando la función
			return;
		}
		// Realiza la petición de actualización
		$result = $this->ProductModel->update( $_POST );
		// Valida si existe un error
		if( !$result )
		{
			// Agrega el mensaje a la variable para ser mostrada
			array_push( $this->errors, $result );
			// Muestra el mensaje de error al usuario
			echo $this->errors();
		}
		else
			// Muestra el mensaje de éxito al usuario
			echo "true";
	}

	public function store()
	{
		// Valida que sea una petición enviada por post
		$this->__post();
		// Realiza la petición de registro
		echo $this->store_global( $_POST );
	}

	public function store_global( $data )
	{
		// Valida los campos
		$errors = $this->validate( $data, [
			'name|nombre' => 'required',
			'categoryId|categoria' => 'required',
			'brand|nombre' => 'required',
			'genderId|categoria' => 'required',
			'material|nombre' => 'required',
			'color|categoria' => 'required',
			'description|nombre' => 'required',
			'price|categoria' => 'required'
		] );
		// Valida si existe un error
		if( $errors )
		{
			// Muestra el mensaje de error al usuario
			return $this->errors();
		}
		// Busca el id del administrador que está sesionado
		$userId = $_SESSION['id'];
		// Busca el Id de la tienda correspondiente
		$store = $this->StoreModel->findByUserId( $userId );
		// Organiza el array con los datos a pasar a la clase modelo
		$data['storeId'] = $store['storeId'];
		$data['created_at'] = date("Y-m-d H:i:s");
		$data['brandId'] = 1;
		$data['statusProductId'] = 1;
		$data['slug'] = SlugTrait::generate( $data['name'] );
		// Realiza la petición de registro de los datos
		$result = $this->ProductModel->store( $data );
		// Valida si existe un error
		if( !$result )
		{
			// Agrega el mensaje a la variable para ser mostrada
			array_push( $this->errors, $result['message']  );
			// Muestra el mensaje de error al usuario
			echo $this->errors();
		}
		else
		{
			// Muestra el mensaje de éxito al usuario
			echo "true";
		}
	}

	// Función para mostrar la vista de crear un registro
	public function create()
	{	
		// Muestra la vista
		$this->view('admin/product/create');
	}

}