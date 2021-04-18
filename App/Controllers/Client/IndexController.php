<?php

// Clase para gestionar la informacion de la página principal
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Comprueba si existe una sesión
		$this->auth->guest();
		// Importa modelo de usuario
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de las marcas
		$this->BrandModel = $this->model("Brand");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Importr modelo de las tallas de los productos
		$this->ProductSizeModel = $this->model("ProductSize");
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->redirect('Client/Index/Listing');
	}

	// Función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// Obtiene los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		
		// Muestra la vista al usuario
		echo $this->view( 'client/index', $lista );
	}

	// Función para consultar los datos sin recargar la página por medio de ajax
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
			foreach( $data['list'] as $producto )
			{
				// Busca las imagenes de un producto
				$imagen = $this->ProductModel->find_portada( $producto['productId'] );
				// Captura la portada del producto
				$producto['imagen'] = $imagen['name'];
				// Busca las tallas del produto
				$sizes = $this->ProductSizeModel->find_size($producto['productId']);
				// Variable para guarda las opciones de talla disponible
				$tallas = '<option selected>Talla</option>';
				// Concatena las opciones de tallas
				foreach ($sizes as $size){
					$tallas .= '<option value="'.$size['sizeId'].'">'.$size['sizeId'].'</option>';			
				} 
				// Concatena cada dato de los productos
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
											<a data-url="'.URL.'Client/ShoppingCar/agregar_productos" data-id="'.$producto['productId'].'" data-cantidad="1" class="add_shopping_cart white-text btn-vermas p-0 col-5 d-flex align-items-center justify-content-center">
												<i class="fas fa-1x fa-shopping-cart color-naranja white-text"></i>
											</a>
										</div>
									</form>	
								</div>
								<div class="col-12 mt-4">
									<a href="'.URL.'client/product/uniqueproduct/'.$producto['slug'].'" class="white-text btn-vermas">Ver más</a>
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