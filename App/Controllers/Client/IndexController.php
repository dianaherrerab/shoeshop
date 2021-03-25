<?php

// Clase para gestionar la informacion de la página principal
class IndexController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Comprueba si existe una sesión
		//$this->auth->guest();
		// Importa modelo de usuario
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de las marcas
		$this->BrandModel = $this->model("Brand");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Importr modelo de las tallas de los productos
		$this->ProductSizeModel = $this->model("ProductSize");
	}

	// Función para mostrar la vista
	public function index()
	{	
		// Obtiene todos los datos de una tienda
		$tienda = $this->StoreModel->find( 1 );	
		// Obtiene todos los productos de una tienda 
		$products = $this->ProductModel->getProducts( 1 );
		// Obtiene todas las categorias
		$categories = $this->CategoryModel->getCategories();
		// Obtiene todas las marcas 
		$brands = $this->BrandModel->all();
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'products' => $products,
			'categories' => $categories,
			'brands' => $brands
		];
		// Dirige a la vista con el arreglo de datos
		$this->view('client/index', $params);
	}

}