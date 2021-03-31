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

}