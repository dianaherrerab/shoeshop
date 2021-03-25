<?php

class UserController extends Controller
{
	// función de inicialización
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// importamos el modelo de usuarios
		$this->userModel = $this->model('User');
	}

	public function index()
	{	
		echo "importado papa";
	}

	// función para almacenar un usuario nuevo
	public function store( $role_id, $name, $username, $password )
	{
		// protegemos las variables para evitar el sql injection
		// $name = parent::__real_escape_string( $name );
		// $username = parent::__real_escape_string( $username );
		// arreglo que contendra las variables a validar
		$validations = ['role_id' => $role_id ];
		// realizamos validaciones de inicio
		$errors = $this->validate( $validations, [
			'role_id|rol de usuario' => 'required|number',
		]);
		// validamos si existen errores
		if( $errors )
		{
			// Mostramos el mensaje de error al usuario
			return $this->errors();
		}
		$created_at = date('Y-m-d h:i:s');
		// Creamos el array con los datos a pasar a la clase modelo
		$request = [
            'name' => $name,
			'username' => $username,
			'slug' => SlugTrait::generate( $username ),
			'role' => $role_id,
			'password' => password_hash( $this->auth->protectVars( $password ) , PASSWORD_BCRYPT ),
			'created_at' => $created_at
		];
		// Realizamos la petición de registro
		$result = $this->userModel->store( $request );
		// Validamos si existe un error
		if( !$result )
		{
			// Agregamos el mensaje a la variable para ser mostrada
			array_push( $this->errors, $result );
			// Mostramos el mensaje de error al usuario
			echo $this->errors();
		}
		else
		{
			return $this->findByCreated_at( $created_at );
		}
	}

	// función para buscar el pin del usuario
	public function findByCreated_at( $created_at )
	{
		// buscamos los datos del usuario
		$user = $this->userModel->findByCreated_at(  $created_at );
		// retornamos el pin del usuario
		return $user['id'];
	}

	// función para buscar el email del usuario por pin
	public function find_user_by_pin( $pin )
	{
		// buscamos los datos del usuario
		$user = mysqli_fetch_assoc( $this->userModel->find_user_by_pin(  $pin ) );
		// retornamos el pin del usuario
		return $user;
	}

	// función para validar si existe un dato en una tabla a partir de su tipo de dato
	public function validate_type_data( $type, $value )
	{
		switch ( $type ) 
		{
			case 'first_name':
				return $this->User_first_nameController->exist( $value );
			break;
			case 'second_name':
				return $this->User_second_nameController->exist( $value );
			break;
			case 'first_lastname':
				return $this->User_first_lastnameController->exist( $value );
			break;
			case 'second_lastname':
				return $this->User_second_lastnameController->exist( $value );
			break;			
			default:
				return $this->User_birthdayController->exist( $value );
			break;
		}
	}

	// función para eliminar los datos del usuario
	public function delete( $user_pin )
	{
		$this->userModel->delete( $user_pin );
	}

}