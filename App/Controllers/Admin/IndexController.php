<?php

// Clase para gestionar la información del cliente desde el dashboard
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Instancia modelo de los productos
		$this->ProductModel = $this->model('Product');
		// instanciamos el modelo del controlador
		$this->SaleModel = $this->model('Sale');
		// Importa modelo de los detalles de la venta
		$this->SaleDetailModel = $this->model("SaleDetail"); 
	}

	// Función para mostrar la vista principal
	public function index()
	{	
		// mostramos la vista
		$this->view( 'admin/index');
	}

	// Función para mostrar la vista principal
	public function cargar_productos_categorias()
	{	
		$products = $this->ProductModel->bycategories();
		$arreglo = array();
		foreach ($products as $product) {
			array_push($arreglo, $product);
		}
		header('Content-type: application/json; charset=utf-8');
		// mostramos la vista al usuario
		echo json_encode( $arreglo );
	}

	// Función para mostrar la vista principal
	public function cargar_ventas()
	{	
		$sales = $this->SaleModel->all();
		$arreglo = array();
		$cantidad_enero = 0;
		$cantidad_febrero = 0;
		$cantidad_marzo = 0;
		$cantidad_abril = 0;
		$cantidad_mayo= 0;
		$cantidad_junio= 0;
		$cantidad_julio= 0;
		$cantidad_agosto= 0;
		$cantidad_septiembre= 0;
		$cantidad_octubre= 0;
		$cantidad_noviembre= 0;
		$cantidad_diciembre= 0;
		foreach ($sales as $sale) {
			$mes_venta = ConvertTrait::month( $sale['date'] );
			switch ($mes_venta) {
				case 'Enero':
					$cantidad_enero++;
					break;
				case 'Febrero':
					$cantidad_febrero++;
					break;
				case 'Marzo':
					$cantidad_marzo++;
					break;
				case 'Abril':
					$cantidad_abril++;
					break;
				case 'Mayo':
					$cantidad_mayo++;
					break;
				case 'Junio':
					$cantidad_junio++;
					break;
				case 'Julio':
					$cantidad_julio++;
					break;
				case 'Agosto':
					$cantidad_agosto++;
					break;
				case 'Septiembre':
					$cantidad_septiembre++;
					break;
				case 'Octubre':
					$cantidad_octubre++;
					break;
				case 'Noviembre':
					$cantidad_noviembre++;
					break;
				case 'Diciembre':
					$cantidad_diciembre++;
					break;
				default:
					
					break;
			}
			$arreglo=[
				['mes'=>'Enero', 'cantidad'=>$cantidad_enero],
				['mes'=>'Febrero', 'cantidad'=>$cantidad_febrero],
				['mes'=>'Marzo', 'cantidad'=>$cantidad_marzo],
				['mes'=>'Abril', 'cantidad'=>$cantidad_abril],
				['mes'=>'Mayo', 'cantidad'=>$cantidad_mayo],
				['mes'=>'Junio', 'cantidad'=>$cantidad_junio],
				['mes'=>'Julio', 'cantidad'=>$cantidad_julio],
				['mes'=>'Agosto', 'cantidad'=>$cantidad_agosto],
				['mes'=>'Septiembre', 'cantidad'=>$cantidad_septiembre],
				['mes'=>'Octubre', 'cantidad'=>$cantidad_octubre],
				['mes'=>'Noviembre', 'cantidad'=>$cantidad_noviembre],
				['mes'=>'Diciembre', 'cantidad'=>$cantidad_diciembre],
				
		];
		}
		header('Content-type: application/json; charset=utf-8');
		// mostramos la vista al usuario
		echo json_encode( $arreglo);
	}

	// Función para mostrar la vista principal
	public function cargar_productos_mas_vendidos()
	{	
		$products = $this->SaleDetailModel->all_name();
		$arreglo = array();
		foreach ($products as $product) {
			array_push($arreglo, $product);
		}
		header('Content-type: application/json; charset=utf-8');
		// mostramos la vista al usuario
		echo json_encode( $arreglo);
	}

	// Función para mostrar la vista principal
	public function cargar_estados_ventas()
	{	
		$sales = $this->SaleModel->all_status();
		$arreglo = array();
		foreach ($sales as $sale) {
			array_push($arreglo, $sale);
		}
		header('Content-type: application/json; charset=utf-8');
		// mostramos la vista al usuario
		echo json_encode( $arreglo);
	}

}