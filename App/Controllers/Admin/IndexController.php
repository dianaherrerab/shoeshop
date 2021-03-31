<?php

// Clase para gestionar la información del cliente desde el dashboard
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
	}

	// Función para mostrar la vista principal
	public function index()
	{	
		// Muestra la vista al usuario
		$this->view('admin/index');
	}

}