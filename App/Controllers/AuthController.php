<?php

class AuthController extends Controller
{
	public function validate_session()
	{
		// validamos si existe una sesión
		if( $this->auth->check() )
			// lo redireccionamos a la vista de redireccion de usuarios
			$this->redirect('Redirect');
	}

	public function index()
	{
		$this->redirect('/');
	}
	// Funcion para redirigir al login
	public function login()
	{
		$this->view('/');
	}
	// Funcion para redirigir al registro
	public function sign_up()
	{
		$this->view('/');
	}
	// Funcion para redirigir a recuperar contraseña
	public function recover()
	{
		$this->view('/');
	}

	// funcion para ejecutar el acceso o el logueo
	public function access()
	{
		// validamos que sea una peticion por post
		$this->__post();
		// validamos que existan los campos
		$errors = $this->validate( $_POST, [
			'username|usuario' => 'required',
			'password|contraseña' => 'required',
		] );

		if( $errors )
		{
			echo $this->errors();
			return;
		}
		
		// enviamos peticion al modelo para que inicie la sesion
		$login = $this->auth->login( $_POST['username'], $_POST['password'] );
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

	// funcion para cerrar sesion
	public function logout()
	{
		// validamos que sea una peticion por post
		$this->__post();
		// realizamos la peticion al modelo de cerrar sesion
		$this->auth->logout();
		// retornamos a la vista de inicio de sesion
		$this->redirect('/');
	}

	// funcion para cerrar sesion
	public function inactividad_logout()
	{
		// realizamos la peticion al modelo de cerrar sesion
		$this->auth->logout();
		// retornamos a la vista de inicio de sesion
		echo "true";
	}

	// funcion para registrar un usuario
	public function register()
	{
		// validamos que existan los campos
		$errors = $this->validate( $_POST, [
			'name|nombre' => 'required',
			'username|usuario' => 'required|unique:users',
			'password|contraseña' => 'required',
		] );

		if( $errors )
		{
			echo $this->errors();
			return;
		}
		// validamos que sea una peticion por post
		$this->__post();
		// realizamos la peticion al modelo de cerrar sesion
		$login = $this->auth->register( $_POST['name'], $_POST['username'], $_POST['password'] );
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
		else{
			// retornamos a la vista de acceso cuando se satisfatorio el logueo
			echo "true|".$login[1];
		}
	}

	// función para validar la recuperación de contraseña
	public function recover_validation()
	{
		// validamos que existan los campos
		$errors = $this->validate( $_POST, [
			'email|correo electrónico' => 'required|email',
		] );

		if( $errors )
		{
			echo $this->errors();
			return;
		}
		// validamos que sea una peticion por post
		$this->__post();
		// realizamos la peticion al modelo de cerrar sesion
		$recover = $this->auth->recover_password( $_POST['email'] );

		// validamos si se logueo o no
		if( $recover != 'enviado' )
		{
			// agregamos a las variables de error la respuesta del servidor
			array_push($this->errors, $recover);
			// agregamos los errores obtenidos desde la peticion hecha al model
			echo $this->errors();
			return;
		}
		else
			// retornamos a la vista de acceso cuando se satisfatorio el logueo
			echo 'true';
	}

}