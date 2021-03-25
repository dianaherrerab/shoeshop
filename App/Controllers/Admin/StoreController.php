<?php

// requerimos el trait de slug
require_once APP."/Traits/SlugTrait.php";
// importamos el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/UserDataController.php';
// importamos el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/UserController.php';

require_once APP.'/Controllers/AuthController.php';

// importamos el controlador de ubicaciones de usuario
//require_once APP.'/Controllers/Console/Wearable/LocationController.php';

// función que carga la vista principal de la pagina
class StoreController extends Controller
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
        // Importar modelo de usuario
		$this->StoreModel = $this->model("Store");
		// instanciamos el controlador de datos usuarios de la consola
		$this->UserDataController = new UserDataController();
		// instanciamos el controlador de datos usuarios de la consola
		$this->UserController = new UserController();
		// instanciamos el controlador de datos usuarios de la consola
		$this->AuthController = new AuthController();
		// instanciamos el controlador de ubicaciones de usuario
		//$this->LocationController = new LocationController();
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('admin/index');
	}

	// función para almacenar un registro
	public function store()
	{
		// validamos que el tipo de envio sea por $_POST
		$this->__post();
		// realizamos validaciones de inicio
		$errors = $this->validate( $_POST, [
			'name|nombre' => 'required',
			'username|usuario' => 'required|unique:users',
			'nameE|contraseña' => 'required',
		]);
		// validamos si existen errores
		if( $errors )
		{
			// Mostramos el mensaje de error al usuario
			echo $this->errors();
			// evitamos que siga la función
			return;
		}
        // generamos la contraseña del usuario de largo 6 y sin caracteres especiales
		$password = $this->auth->generar_password_complejo( 6, 'without' );
		// obtenemos el pin del usuario a registrar con rol de estudiante (5) y su contraseña
		$userId = $this->UserController->store( 2, $_POST['name'], $_POST['username'], $password );
		// generamos los datos del usuario
		$user_data = [
			'name' => $_POST['name'],
		];
		// validamos si existe un error
		if( !is_array( $user_data ) )
		{
			// eliminamos todos los datos registrados
			$this->delete_all( $userId );
			// Mostramos el mensaje de error al usuario
			echo $user_data;
		}
		// asignamos el pin a los datos del usuario
		$user_data['userId'] = $userId;
		$user_data['created_at'] = date('Y-m-d h:i:s');
        $user_data['slug'] = SlugTrait::generate( $_POST['name'] );
		// realizamos la petición de registro de los datos de user data
		$response = $this->StoreModel->store( $user_data );
		// validamos si tenemos un error en la ejecución de la consulta
		// enviamos peticion al modelo para que inicie la sesion
		$login =  $this->auth->login( $_POST['username'], $password );
		// explotamos el resultado
		$login = explode("|", $login);
		// validamos si se logueo o no
		if( $login[0] != 'logueado' )
		{
			// agregamos a las variables de error la respuesta del servidor
			array_push($this->errors, $login[0]);
			// agregamos los errores obtenidos desde la peticion hecha al model
			echo $this->errors();
			return;
		}
		// retornamos a la vista de acceso cuando se satisfatorio el logueo
		echo "true|".$login[1];
		
	}

	// funcion para mostrar el perfil del cliente
	public function profile()
	{
		// buscamos los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );
		// obtenemos los datos del usuario en la tabal user_data
		$user_data = $this->UserDataController->find_by_user_id( $user['id'] );
		// Obtenemos su historial de compras
		$sales = $this->SaleModel->findByUserId($user['id']);
		// Organiza los datos a pasar a la vista
		$params = [
			'user' => $user,
			'user_data' => $user_data,
			'sales' => $sales,
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
			'firstName|<b>Primer Nombre</b>' => 'required',
			'secondName|<b>Segundo Nombre</b>' => 'required',
			'lastName|<b>Primer Apellido</b>' => 'required',
			'typeDocumentId|<b>Tipo de documento</b>' => 'required',
			'documentNumber|<b>Número de documento</b>' => 'required',
			'cellphone|<b>Teléfono/Celular</b>' => 'required',
			'address|<b>Dirección</b>' => 'required',
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
		$_POST['userDataId'] = $this->UserDataController->find_by_user_id( $this->auth->user->__get('id') )['userDataId'];
		
		// invertimos la posición del array para que el id quede al inicio
		$user_data = array_reverse( $_POST );
		// hacemos la petición de registro
		$user_data_response = $this->UserDataController->update( $user_data );
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
			$response = $this->UserModel->update( $_POST );
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
				echo "true1";
		}
	}

}