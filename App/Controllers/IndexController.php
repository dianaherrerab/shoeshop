<?php

// Función que carga la vista principal de la pagina
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llamada al constructor del padre
		parent::__construct();
		// Importa modelo de usuarios
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de las marcas
		$this->BrandModel = $this->model("Brand");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de las tallas de los productos
		$this->ProductSizeModel = $this->model("ProductSize");
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->redirect('Index/Listing');
	}

	// función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// obtenemos los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		
		// mostramos la vista al usuario
		echo $this->view( 'welcome', $lista );
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
			foreach( $data['list'] as $producto )
			{
				// Buscar las imagenes de un producto
				$imagen = $this->ProductModel->find_portada( $producto['productId'] );
				// capturar la portada
				$producto['imagen'] = $imagen['name'];
				// buscar las tallas del produto
				$sizes = $this->ProductSizeModel->find_size($producto['productId']);
				// variable para guarda tallas
				$tallas = '<option selected>Talla</option>';
				// concatenar las opciones de tallas
				foreach ($sizes as $size){
					$tallas .= '<option value="'.$size['sizeId'].'">'.$size['sizeId'].'</option>';			
				}
				// vamos concatenando cada dato
				$list .= '
					<div class="col-12 col-sm-6 col-lg-4 py-4">
						<div class="card text-center bordes-cards py-3">
							<img class="card-imagen" src="'.IMG.'/bd-products/'.$producto['imagen'].'">
							<div class="card-body px-1">
								<h4 class="color-morado font-weight-bold">'.$producto['name'].'</h4>
								<h4 class="color-naranja font-weight-bold">'.$producto['price'].' COP</h4>
								<div class="container-fluid">
									<form >
										<div class="row justify-content-around">
											<select id="size" class="browser-default custom-select m-auto form-control2 col-5">
												'.$tallas.'
											</select>
											<a data-toggle="modal" data-target="#exampleModal" class=" white-text btn-vermas p-0 col-5 d-flex align-items-center justify-content-center">
												<i class="fas fa-1x fa-shopping-cart color-naranja white-text"></i>
											</a>
										</div>
									</form>	
								</div>
								<div class="col-12 mt-4">
									<a data-toggle="modal" data-target="#exampleModal" class="white-text btn-vermas">Ver más</a>
								</div>
							</div>
						</div>
					</div>
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

}