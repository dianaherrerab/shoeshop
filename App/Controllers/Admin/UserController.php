<?php

// Clase para gestionar la información del cliente
class UserController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Comprueba si existe una sesión
		//$this->auth->guest();
		// Instancia modelo de usuario
		$this->UserModel = $this->model('User');
		// Instancia modelo de una tienda
		$this->StoreModel = $this->model('Store');
		// Instancia modelo de usuario
		$this->UserDataModel = $this->model('UserData');
	}

	// Funcion para mostrar el perfil del cliente
	public function profile()
	{
		// Busca los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );		
		// obtenemos los datos del usuario en la tabal user_data
		$store = $this->StoreModel->findByUserId( $user['id'] );
		// obtenemos el nombre de ciudad
		// $user_data['location'] = $this->LocationController->find_location_name_complete( $user_data['city_id'] );
		// print_r($user_data); exit();
		$params = [
			'user' => $user,
			'store' => $store,
		];	
		// Dirige a la vista con el arreglo de datos
		$this->view('admin/user/profile', $params );
	}

	// Función para actualizar datos de usuario
	public function update_profile()
	{
		// Valida que sea una peticion de tipo POST
		$this->__post();
		// Valida los campos requeridos
		$errors = $this->validate( $_POST, [
			'name|<b>Nombre</b>' => 'required',
			'nit|<b>Nit</b>' => 'required',
			'description|<b>Descripción</b>' => 'required',
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
		$store = $this->StoreModel->findByUserId( $_POST['userId'] );
		$_POST['storeId'] = $store['storeId'];
		// Invierte la posición del array para que el id quede al inicio
		$user_data = array_reverse( $_POST );
		// Hace la petición de actualización
		$store_response = $this->StoreModel->update( $user_data );
		// Valida si el resultado encontrado no es un array
		if( isset( $store_response['status'] ) && !$store_response['status'] )
		{
			// Crea un mensaje personalizado
			array_push( $this->errors, $store_response['message'] );
			// Muestra los errores
			echo $this->errors();
			// Detiene la ejecuciónde la función
			return;
		}
		else
		{
				// Retorna mensaje de exito
				echo "true";
		}
	}

	// función para actualizar los datos de la cuenta
	public function update_account()
	{
		// validamos que sea una peticion por post
		$this->__post();
		// validamos que existan los campos
		$errors = $this->validate( $_POST, [
			'username|<b>Correo vinculado</b>' => 'required',
		] );
		// validamos si hay errores
		if( $errors )
		{
			// mostramos los errores
			echo $this->errors();
			// evitamos que sigan
			return;
		}
		// validamos si existe la contraseña
		if( isset( $_POST['password'] ) && !empty( $_POST['password'] ) && !is_null( $_POST['password'] ) )
			// validamos si las contraseñas son iguales
			if( $_POST['password'] != $_POST['password_repit'] )
			{
				// creamos mensaje personalizado
				array_push( $this->errors, 'Las contraseñas ingresadas no coinciden.' );
				// mostramos los errores
				echo $this->errors();
				// evitamos que sigan
				return;
			}
		else
			// eliminamos el campo para que no se actualice si esta vacia
			unset( $_POST['password'] );
		// generamos el slug
		$_POST['slug'] = SlugTrait::generate( $_POST['username'] );
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
			echo "true";
	}

}