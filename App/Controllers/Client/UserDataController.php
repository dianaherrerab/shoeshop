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
		$this->view('Client/');
	}

	// función para almacenar los datos
	public function store( $request )
	{
		// retornamos los datos encontrados
		$response = $this->userDataModel->store( $request );
		// validamos si tenemos un error
		if( !$response['status'] )
			// retornamos el error
			return $response;
		else
			// retornamos los datos
			return $response['data'];
	}

	// función para almacenar los datos
	public function update( $request )
	{
		// retornamos los datos encontrados
		$response = $this->userDataModel->update( $request );
		// validamos si tenemos un error
		if( !$response['status'] )
			// retornamos el error
			return $response;
		else
			// retornamos los datos
			return $response['data'];
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