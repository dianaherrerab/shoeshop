<?php

// función que carga la vista principal de la pagina
class SaleController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// instanciamos el modelo del controlador
		$this->SaleModel = $this->model('Sale');
		
	}

	// función para mostrar la vista
	// public function index()
	// {	
	// 	// mostramos la vista
	// 	$this->view('admin/sale');
	// }

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->redirect('Admin/Sale/Listing');
	}

	// función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = "date", $value_whr = null )
	{
		// obtenemos los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		
		// mostramos la vista al usuario
		echo $this->view( 'admin/sale', $lista );
	}

	// función para consultar por medio de ajax para estar cargando los datos sin recargar la página
	public function pagination( $pagina = 1, $input_whr = "date", $value_whr = null )
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
		$data = $this->SaleModel->listing( $pagina, $input_whr, $value_whr );
		
		// variable que contendra el listado
		$list = "";
		// validamos que existan datos
		if( $data['cant'] > 0 ) 
		{
			// recorremos los datos existentes
			foreach( $data['list'] as $sale )
			{
				// vamos concatenando cada dato
				$list .= '
					<tr class="color-gris">
						<td>'.$sale['saleId'].'</td>
						<td>'.ConvertTrait::date( $sale['date'] ).'</td>
						<td>'.$sale['userId'].'</td>
						<td>'.$sale['storeId'].'</td>
						<td>'.$sale['totalPrice'].'</td>
						<td>'.$sale['userId'].'</td>
						<td>'.$sale['statusSaleId'].'</td>
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

}