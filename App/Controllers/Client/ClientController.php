<?php
// importamos el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/UserDataController.php';
// importamos el controlador de ubicaciones de usuario
//require_once APP.'/Controllers/Console/Wearable/LocationController.php';

// función que carga la vista principal de la pagina
class ClientController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// realizamos la peticion al modelo de cerrar sesion
		//$this->auth->guest();
		// Importar modelo de usuario
		$this->UserModel = $this->model("User");
		// Importar modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importar modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importar modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// instanciamos el controlador de datos usuarios de la consola
		$this->User_dataController = new UserDataController();
		// instanciamos el controlador de ubicaciones de usuario
		//$this->LocationController = new LocationController();
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('client/index');
	}

	// funcion para mostrar el perfil del cliente
	public function profile()
	{
		// buscamos los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );
		// obtenemos los datos del usuario en la tabal user_data
		//print_r($user); exit();
		$user_data = $this->User_dataController->find_by_user_id( $user['id'] );
		// obtenemos el nombre de ciudad
		//$user_data['location'] = $this->LocationController->find_location_name_complete( $user_data['city_id'] );
		// print_r($user_data); exit();
		$params = [
			'user' => $user,
			'user_data' => $user_data,
		];
		// Mostrar la vista
		$this->view('client/profile', $params);
	}

	// función para actualizar datos de usuario
	public function update_profile()
	{
		// validamos que sea una peticion por post
		$this->__post();
		// validamos que existan los campos
		$errors = $this->validate( $_POST, [
			'city_id|<b>ciudad</b>' => 'required',
			'cellphone|<b>teléfono/celular</b>' => 'required',
			'identification_type|<b>tipo de documento</b>' => 'required',
			'identification_number|<b>número de documento</b>' => 'required',
			'address|<b>dirección</b>' => 'required',
		] );
		// validamos si hay errores
		if( $errors )
		{
			// mostramos los errores
			echo $this->errors();
			// evitamos que sigan
			return;
		}
		// capturamos la hora de actualización
		$_POST['updated_at'] = date('Y-m-d H:i:s');
		// agregamos el id del userdata
		$_POST['id'] = $this->User_dataController->find_by_user_id( $this->auth->user->__get('id') )['id'];
		// invertimos la posición del array para que el id quede al inicio
		$user_data = array_reverse( $_POST );
		// hacemos la petición de registro
		$user_data_response = $this->User_dataController->update( $user_data );
		// validamos si el resultado encontrado no es un array
		if( isset( $user_data_response['status'] ) && !$user_data_response['status'] )
		{
			// creamos mensaje personalizado
			array_push( $this->errors, $user_data_response['message'] );
			// mostramos los errores
			echo $this->errors();
			// evitamos que sigan
			return;
		}
		else
		{
			// capturamos el id de usuario
			$_POST['id'] = $_POST['user_id'];
			// hacemos la petición de registro
			$response = $this->userModel->update( $_POST );
			// validamos si el resultado encontrado no es un array
			if( isset( $response['status'] ) && !$response['status'] )
			{
				// creamos mensaje personalizado
				array_push( $this->errors, $response['message'] );
				// mostramos los errores
				echo $this->errors();
				// evitamos que sigan
				return;
			}
			else
				// retornamos mensaje de exito
				echo "true";
		}
	}

}