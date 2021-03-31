<?php

// Importa el controlador de los datos del usuario
require_once APP.'/Controllers/Client/UserDataController.php';
// Importa el controlador del usuario
require_once APP.'/Controllers/Client/UserController.php';
// Importa el controlador de autenticación
require_once APP.'/Controllers/AuthController.php';

// Clase para gestionar la información del cliente
class ClientController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Comprueba si existe una sesión
		//$this->auth->guest();
		// Instancia modelo de usuario
		$this->UserModel = $this->model("User");
		// Instancia modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Instancia modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Instancia modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Instancia modelo de los detalles de la venta
		$this->SaleDetailModel = $this->model("SaleDetail");
		// Instancia modelo de las ventas
		$this->SaleModel = $this->model("Sale");
		// Instancia el controlador de los datos del usuario
		$this->UserDataController = new UserDataController();
		// Instancia el controlador del usuario 
		$this->UserController = new UserController();
		// Instancia el controlador de autenticación del usuario
		$this->AuthController = new AuthController();
	}

	// Función para almacenar un registro
	public function store()
	{
		// Valida que el envio de datos sea de tipo POST
		$this->__post();
		// Realiza validaciones de inicio
		$errors = $this->validate( $_POST, [
			'name|nombre' => 'required',
			'username|usuario' => 'required|unique:users',
			'password|contraseña' => 'required',
		]);
		// Valida si existen errores
		if( $errors )
		{
			// Muestra el mensaje de error al usuario
			echo $this->errors();
			// Detiene la ejecución de la función
			return;
		}
		// Hace la petición de registro del usuario y obtiene sus datos
		// Usuario con rol 3 (Cliente)
		$userId = $this->UserController->store( 3, $_POST['name'], $_POST['username'], $_POST['password'] );
		// Genera el arreglo con los datos del usuario 
		$user_data = [
			'firstName' => $_POST['name'],
		];
		// Valida si existe un error
		if( !is_array( $user_data ) )
		{
			// eliminamos todos los datos registrados
			$this->UserModel->delete( $userId );
			// Mostramos el mensaje de error al usuario
			echo $user_data;
		}
		// Agrega los datos al arreglo de datos del usuario
		$user_data['userId'] = $userId;
		$user_data['created_at'] = date('Y-m-d h:i:s');
		$user_data['typeDocumentId'] = 1;
		// Realiza la petición de registro de los datos del usuario
		$response = $this->UserDataController->store( $user_data );
		// Envia peticion al modelo para que inicie la sesion
		return $this->AuthController->access( $_POST['username'], $_POST['password'] );
		
	}

	// Funcion para mostrar el perfil del cliente
	public function profile()
	{
		// Busca los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );
		// Obtiene los datos del usuario
		$user_data = $this->UserDataController->find_by_user_id( $user['id'] );
		// Obtiene el historial de compras
		$sales = $this->SaleModel->findByUserId($user['id']);
		// Organiza los datos de pasar a la vista
		$params = [
			'user' => $user,
			'user_data' => $user_data,
			'sales' => $sales,
		];
		// Dirige a la vista con el arreglo de datos
		$this->view('client/profile', $params);
	}

	// Función para actualizar datos de usuario
	public function update_profile()
	{
		// Valida que sea una peticion de tipo POST
		$this->__post();
		// Valida los campos requeridos
		$errors = $this->validate( $_POST, [
			'firstName|<b>Primer Nombre</b>' => 'required',
			'secondName|<b>Segundo Nombre</b>' => 'required',
			'lastName|<b>Primer Apellido</b>' => 'required',
			'typeDocumentId|<b>Tipo de documento</b>' => 'required',
			'documentNumber|<b>Número de documento</b>' => 'required',
			'cellphone|<b>Teléfono/Celular</b>' => 'required',
			'address|<b>Dirección</b>' => 'required',
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
		$_POST['userDataId'] = $this->UserDataController->find_by_user_id( $this->auth->user->__get('id') )['userDataId'];
		// Invierte la posición del array para que el id quede al inicio
		$user_data = array_reverse( $_POST );
		// Hace la petición de actualización
		$user_data_response = $this->UserDataController->update( $user_data );
		// Valida si el resultado encontrado no es un array
		if( isset( $user_data_response['status'] ) && !$user_data_response['status'] )
		{
			// Crea un mensaje personalizado
			array_push( $this->errors, $user_data_response['message'] );
			// Muestra los errores
			echo $this->errors();
			// Detiene la ejecuciónde la función
			return;
		}
		else
		{
			// Captura el id de usuario
			$_POST['id'] = $_POST['user_id'];
			// Hace la petición de actualización
			$response = $this->UserModel->update( $_POST );
			// Valida si el resultado encontrado no es un array
			if( isset( $response['status'] ) && !$response['status'] )
			{
				// Crea un mensaje personalizado
				array_push( $this->errors, $response['message'] );
				// Muestra los errores
				echo $this->errors();
				// Detiene la ejecuciónde la función
				return;
			}
			else
				// Retorna mensaje de exito
				echo "true";
		}
	}

}