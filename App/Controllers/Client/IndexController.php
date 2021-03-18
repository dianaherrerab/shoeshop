<?php

// función que carga la vista principal de la pagina
class IndexController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// realizamos la peticion al modelo de cerrar sesion
		//$this->auth->guest();
		// Importar modelo de usuario
		$this->UserModel = $this->model("User");
		// Importar modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de las marcas
		$this->BrandModel = $this->model("Brand");
		// Importar modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importar modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Importar modelo de la tienda
		$this->ProductSizeModel = $this->model("ProductSize");
	}

	// función para mostrar la vista
	public function index()
	{	
		// Obtiene todos los datos de una tienda
		$tienda = $this->StoreModel->find( 1 );	
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
		// mostramos la vista
		$this->view('client/index', $params);
	}

}