<?php

// función que carga la vista principal de la pagina
class ClientController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// instanciamos el modelo del controlador
		$this->UserModel = $this->model('User');
		// instanciamos el modelo del controlador
		$this->UserDataModel = $this->model('UserData');
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->redirect('Admin/Client/Listing');
	}

	// función para mostrar la vista con el listado inicial
	public function listing( $pagina = 1, $input_whr = 'role', $value_whr = 3 )
	{
		// obtenemos los datos del modelo
		$lista = $this->data( $pagina, $input_whr, $value_whr );
		
		// mostramos la vista al usuario
		echo $this->view( 'admin/client', $lista );
	}

	// función para consultar por medio de ajax para estar cargando los datos sin recargar la página
	public function pagination( $pagina = 1, $input_whr = "id", $value_whr = null )
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
		$data = $this->UserModel->listing( $pagina, $input_whr, $value_whr );
		
		// variable que contendra el listado
		$list = "";
		// validamos que existan datos
		if( $data['cant'] > 0 ) 
		{
			// recorremos los datos existentes
			foreach( $data['list'] as $user )
			{
				$userData = $this->UserDataModel->find_by_user_id( $user['id'] );
				// vamos concatenando cada dato
				$list .= '
					<tr class="color-gris">
						<td>'.$user['id'].'</td>
						<td>'.$userData['firstName'].' '.$userData['secondName'].' '.$userData['lastName'].'</td>
						<td>'.$userData['documentNumber'].'</td>
						<td>'.$userData['cellphone'].'</td>
						<td>'.$userData['address'].'</td>
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