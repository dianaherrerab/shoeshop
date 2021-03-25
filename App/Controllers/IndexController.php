<?php

// Función que carga la vista principal de la pagina
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llamada al constructor del padre
		parent::__construct();
		// Importa modelo de usuarios
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de las marcas
		$this->BrandModel = $this->model("Brand");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de las tallas de los productos
		$this->ProductSizeModel = $this->model("ProductSize");
	}

	// Función para mostrar la vista
	public function index()
	{	
		// Obtiene todos los productos de una tienda 
		$products = $this->ProductModel->getProducts( 1 );
		// Obtiene todas las categorias de la tienda
		$categories = $this->CategoryModel->getCategories();
		// Obtiene todas las marcas 
		$brands = $this->BrandModel->all(); 
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'products' => $products,
			'categories' => $categories,
			'brands' => $brands
		];
		// Muestra la vista
		$this->view('welcome', $params);
	}


}