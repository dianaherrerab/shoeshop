<?php

// función que carga la vista principal de la pagina
class ProductController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// Importar modelo de los productos
        //$this->ProductModel = $this->model("Product");
		// Importar modelo de usuario
		$this->UserModel = $this->model("User");
		// Importar modelo de usuario
		//$this->UserModel = $this->model("User");
		// Importar modelo de las categorias
		$this->CategoryModel = $this->model("Category");
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
		// mostramos la vista
		$this->view('client/index');
	}

    // funcion para mostrar la vista de un producto especifico
    public function uniqueproduct( $slug ){
		// buscamos los datos del usuario
		$product = $this->ProductModel->find_by_slug( $slug );
		$params = [
			'product' => $product,
		];
		print_r($params);
		/* código para cargar la vista para almacenar un registro */
        echo $this->view('client/uniqueProduct', $params);
    }

}