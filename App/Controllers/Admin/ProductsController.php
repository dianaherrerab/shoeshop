<?php

// función que carga la vista principal de la pagina
class ProductsController extends Controller
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
		$this->view('admin/product/index');
	}

	// función para mostrar la vista de editar
	public function edit()
	{	
		// mostramos la vista
		$this->view('admin/product/edit');
	}
	// función para mostrar la vista de crear
	public function create()
	{	
		// mostramos la vista
		$this->view('admin/product/create');
	}

}