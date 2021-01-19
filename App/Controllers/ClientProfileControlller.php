<?php

// función que carga la vista principal de la pagina
class ClientProfileController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('client/profile');
	}

}