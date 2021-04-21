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
		// Importa modelo de los detalles de la venta
		$this->SaleDetailModel = $this->model("SaleDetail"); 
		// instanciamos el modelo del controlador
		$this->UserDataModel = $this->model('UserData');
		// instanciamos el modelo del controlador
		$this->UserModel = $this->model('User');
		// instanciamos el modelo del controlador
		$this->StatusSaleModel = $this->model('StatusSale');
	}

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
				// variable que contendra el listado de productos
				$products = "";
				// Busca los detalles de cada venta
				$details = $this->SaleDetailModel->find_all( $sale['saleId'] );
				// Asigna el valor
				foreach ($details as $detail) {
					$products .= '
						<div>'.$detail['name'].' Talla:'.$detail['size'].'</div>
					';
				}
				// Busca los datos del usuario
				$dataCliente = $this->UserDataModel->find_by_user_id( $sale['userId'] );
				// Busca el nombre del estado de la venta
				$status = $this->StatusSaleModel->find( $sale['statusSaleId'] );
				$modal="";

				$modal='
				<div class="modal fade" id="ModalSale-'. $sale['saleId'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header bg-naranja">
							<h5 class="modal-title white-text centrar" id="exampleModalLabel">Modificar Estado de venta</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" class="white-text">&times;</span>
							</button>
							</div>
						<form method="POST" action="'.URL.'Admin/Sale/UpdateStatus" class="form-status-sale">
							'.$this->__csrf_field().'
							<input type="hidden" name="saleId" value="'. $sale['saleId'].'">	
							<div class="errors-status"></div>
							<div class="modal-body px-5 pt-5 pb-0">
							<label for="">Estado</label>
							<select class="browser-default form-control" name="statusSaleId" id="statusSaleId">
								<option value="1">En proceso</option>
								<option value="2">Enviado</option>
								<option value="3">Cancelado</option>
								<option value="4">Anulado</option>
							</select>
							</div>
							<div class="modal-footer pt-0 pb-5 px-5 text-center">
							<button id="" class="btn bg-morado boton-ingresar font-weight-bold mb-4">Actualizar estado</button>
							</div>
						</form>  
						</div>
					</div>
				</div>
				';
				// vamos concatenando cada dato
				$list .= '
					<tr class="color-gris">
						<td>'.$sale['saleId'].'</td>
						<td>'.ConvertTrait::date( $sale['date'] ).'</td>
						<td>'.$dataCliente['firstName'].' '.$dataCliente['lastName'].'</td>
						<td>'.$products.'</td>
						<td>'.$sale['totalPrice'].'</td>
						<td>'.$dataCliente['address'].'</td>
						<td>
							<a href="" data-toggle="modal" data-target="#ModalSale-'. $sale['saleId'].'" data-url="'.URL.'Admin/Sale/" data-status="'.$status['statusSaleId'].'" class="form-status-sale btn btn-sm btn-success m-0">
							'.$status['name'].'
							</a>
							'.$modal.'
						</td>
						<td>
							<div class="col-12 col-lg p-0 m-0">
								<a class="btn btn-sm btn-success m-0" target="_new" href="'.URL.'/Admin/Sale/Print/'.$sale['saleId'].'" >
									Imprimir
								</a>
							</div>
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

	// Función para actualizar el estado de una venta
    public function UpdateStatus(){
		// Valida que sea una peticion de tipo POST
		//$this->__post();
		// Valida los campos requeridos
		$errors = $this->validate( $_POST, [
			'statusSaleId|<b>Estado</b>' => 'required',
		] );
		// Valida si hay errores
		if( $errors )
		{
			// Muestra los errores
			echo $this->errors();
			// Detiene la ejecuciónde la función
			return;
		}
		// Captura la fecha y hora de actualización
		$_POST['updated_at'] = date('Y-m-d H:i:s');
		// Agrega al arreglo de datos del usuario
		$sale = $this->SaleModel->find( $_POST['saleId'] );
		// rregla los datos para actualizar
		$request = [
			'saleId' => $_POST['saleId'],
			'date' => $sale['date'],
			'totalPrice' => $sale['totalPrice'],
			'userId' => $sale['userId'],
			'storeId' => $sale['storeId'],
			'statusSaleId' => $_POST['statusSaleId'],
			'created_at' => $sale['created_at'],
			'updated_at' => $_POST['updated_at']
		];
		$response = $this->SaleModel->update( $request );
		// Valida si el resultado encontrado no es un array
		if( !$response )
		{
			// Crea un mensaje personalizado
			// array_push( $this->errors, $response['message'] );
			// Muestra los errores
			echo $this->errors();
			// Detiene la ejecuciónde la función
			return;
		}
		else
			// Retorna mensaje de exito
			echo "true";
		
    }

	public function print( $saleId )
	{
		// incluimos la libreria para los pfds
		require_once APP."/Traits/PdfTrait.php";                          
		// incluimos la plantilla a usar
		require_once APP."/Helpers/PdfTemplates/DefaultTemplate.php";
		// obtenemos los datos de la venta
		$sale = $this->SaleModel->find( $saleId );
		// Obtenemos los datos del usuario
		$user = $this->UserModel->find( $sale['userId'] );
		// Busca los datos del usuario
		$dataCliente = $this->UserDataModel->find_by_user_id( $sale['userId'] );
		// variable que contendra el listado de productos
		$products = "";
		// Busca los detalles de cada venta
		$details = $this->SaleDetailModel->find_all( $sale['saleId'] );
		// Asigna el valor
		foreach ($details as $detail) {
			$products .= '
			<div>'.$detail['name'].' Talla:'.$detail['size']. ' Precio: '.$detail['price']. ' Cantidad: '.$detail['quantity']. '</div>
			';
		}
		// Obtenemos el estado de la venta
		$status = $this->StatusSaleModel->find( $sale['statusSaleId'] );
		// creamos la plantilla
		$template = DefaultTemplate::template( $sale, $user, $dataCliente , $products, $status );
		// mostramos el pdf
		$pdf = PdfTrait::view( $template, "Legal", "P", "10", "10", "10", "10" );

	}

}