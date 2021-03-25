<?php

// Clase para gestionar la informacion de los productos
class ProductController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Importa modelo de usuario
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de los productos
        $this->ImageModel = $this->model("Image");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Importa modelo de las tallas de los productos
		$this->ProductSizeModel = $this->model("ProductSize");
	}

    // Funcion para mostrar la vista de un producto especifico
    public function uniqueproduct( $slug ){
		// Busca un producto según el slug de su nombre
		$product = $this->ProductModel->find_by_slug( $slug );
		// Busca las imagenes del producto
		$images = $this->ImageModel->find_images_by_id( $product['productId'] );
		// Busca las tallas del producto
		$sizes = $this->ProductSizeModel->find_size( $product['productId'] );
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'product' => $product,
			'images' => $images,
			'sizes' => $sizes
		];
		// Dirige a la vista con el arreglo de datos
        echo $this->view('client/uniqueProduct', $params);
    }

}