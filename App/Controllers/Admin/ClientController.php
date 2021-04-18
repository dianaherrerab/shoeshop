<?php

// Clase para gestionar la información del cliente desde el dashboard
class ClientController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Instancia modelo de usuario
		$this->UserModel = $this->model('User');
		// Instancia modelo de usuario
		$this->UserDataModel = $this->model('UserData');
	}

	// Función para mostrar la vista principal
	public function index()
	{	
		// Redirige al método que carga el listado de clientes
		$this->redirect('Admin/Client/Listing');
	}

	// Función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = 'name', $value_whr = '' )
	{
		// Obtiene de forma organizada los datos del cliente
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		// Muestra la vista al usuario
		echo $this->view( 'admin/client', $lista );
	}

	// Función para consultar los datos sin recargar la página por medio de ajax
	public function pagination( $pagina = 1, $input_whr = "name", $value_whr = null )
	{
		// Obtiene los datos del modelo
		$jsondata = $this->data( $pagina, $input_whr, $value_whr );
		// Agrega la cabecera de Json para evitar errores
		header('Content-type: application/json; charset=utf-8');
		// Codifica los datos en tipo Json
		echo json_encode( $jsondata, JSON_FORCE_OBJECT );
	}

	// Función para obtener los datos del listado
	public function data( $pagina, $input_whr, $value_whr )
	{
		// Obtiene los datos del listado
		$data = $this->UserModel->listing_clients( $pagina, $input_whr, $value_whr );
		// Variable que contiene el listado
		$list = "";
		// Valida que hayan datos obtenidos
		if( $data['cant'] > 0 ) 
		{
			// Recorre los datos existentes
			foreach( $data['list'] as $user )
			{
				// Se concatena cada dato (Formato que se muestra en la vista)
				$list .= '
					<tr class="color-gris">
						<td>'.$user['userId'].'</td>
						<td>'.$user['name'].'</td>
						<td>'.$user['documentNumber'].'</td>
						<td>'.$user['cellphone'].'</td>
						<td>'.$user['address'].'</td>
					</tr>
				';	
			};
		}
		else
		{
			// Código para mostrar cuando no se han encontrado resultados
			$list .= '
				<tr>
					<td colspan="8" class="grey-text text-center h6 py-4">
						<i class="fa fa-ban mr-2"></i>
						No se han encontrado resultados
					</td>
				</tr>
			';
		}
		// Cambia el valor del parametro con el valor que se acaba de crear
		$data['list'] = $list;
		// Retorna el array
		return $data;	
	}

}