<?php

// función que carga la vista principal de la pagina
class UserDataController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// instanciamos el modelo del controlador
		$this->userDataModel = $this->model('UserData');
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('client/index');
	}

	// función para almacenar los datos
	public function store( $request )
	{
		
		// Realizamos la petición de registro
		$result = $this->userDataModel->store( $request );
		// Validamos si existe un error
		if( !$result )
		{
			// Agregamos el mensaje a la variable para ser mostrada
			array_push( $this->errors, $result );
			// Mostramos el mensaje de error al usuario
			echo $this->errors();
		}
		
	}

	// función para almacenar los datos
	public function update( $request )
	{
		// retornamos los datos encontrados
		$result = $this->userDataModel->update( $request );
		// Validamos si existe un error
		if( !$result )
		{
			// Agregamos el mensaje a la variable para ser mostrada
			array_push( $this->errors, $result );
			// Mostramos el mensaje de error al usuario
			echo $this->errors();
		}
		else
			// Mostramos el mensaje de éxito al usuario
			echo "true";
	}

	// función para buscar el id del userdata
	public function find_by_user_id( $userId )
	{
		// obtenemos los datos del usuario
		return $this->userDataModel->find_by_user_id( $userId );
	}

	// función para eliminar los datos del usuario
	public function delete_by_user_id( $userId )
	{
		$this->userDataModel->delete_by_user_id( $userId );
	}


}