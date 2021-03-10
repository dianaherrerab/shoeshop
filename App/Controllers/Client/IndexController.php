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
		// Importar modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importar modelo de la tienda
		$this->StoreModel = $this->model("Store");
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('client/index');
	}

	// funcion para mostrar el perfil del cliente
	public function profile()
	{
		// Mostrar la vista
		$this->view('client/profile');
	}

}