<?php

// función que carga la vista principal de la pagina
class IndexController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// Importar modelo de usuario
		$this->UserModel = $this->model("User");
		// Importar modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importar modelo de los usuarios
        $this->ProductModel = $this->model("Product");
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('welcome');
	}


}