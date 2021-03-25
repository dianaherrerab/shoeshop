<?php

// Importa el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/UserDataController.php';
// Importa el controlador de las tallas de los productos
require_once APP.'/Controllers/Client/ProductSizeController.php';

// Clase para gestionar la información del carrito de compras
class ShoppingCarController extends Controller
{
	// Función constructor del controlador
	public function __construct()
	{
		// Llama al constructor del padre
		parent::__construct();
		// Comprueba si existe una sesión
		$this->auth->guest();
		// Valida si existe un carrito
		$this->validar_carrito();
		// Importa modelo de usuario
		$this->UserModel = $this->model("User");
		// Importa modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importa modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importa modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// Instancia el controlador de datos del usuario
		$this->UserDataController = new UserDataController();
		// Instancia el controlador de la cantidad de productos por talla
		$this->ProductSizeController = new ProductSizeController();
	}

	// Funcion para crear y mostrar el carrito de compras
	public function index()
	{
		// Array para almacenar los productos del carrito
		$products = [];
		$total = 0;
		// Recorre los productos del carrito
		foreach ( $_SESSION['cart']['products'] as $product ) 
		{
			// Obtiene los datos del producto
			$product_found = mysqli_fetch_assoc( $this->ProductModel->findImagenAndSize( $product['productId'] ));
			// Obtiene el subtotal de la venta 
			$subtotal = ( $product['cantidad'] * $product_found['price'] );
			$total += $subtotal;
			// Organiza el arreglo que contiene los datos del producto a agregar
			$product_to_add = [
				'id' => $product['productId'],
				'nombre' => $product_found['name'],
				'cantidad' => $product['cantidad'],
				'talla' => $product['size'],
				'precio' => $product_found['price'],
				'imagen' => $product_found['imagen'],
				'color' => $product_found['color'],
				'cantidad-disponible' => $product_found['quantity'],
				'subtotal' => $subtotal,
			];
			// Agrega el array de los datos del producto al array de productos del carrito
			array_push( $products , $product_to_add );
		}
		print_r($products);
		// Dirige a la vista del carrito de compras con los datos correspondiente
		$this->view('client/shoppingCar', ['products' => $products, 'total' => $total]);
	}

	// Función para validar el carrito
	public function validar_carrito()
	{
		// Valida si existe un carrito
		if( !isset( $_SESSION['cart'] ) )
		{
			//Si no existe, se crea uno
			$_SESSION['cart'] = [
				'id' => 1,
				'products' => []
			];	
		}
	}

	// Funcion para agregar productos al carrito
	public function agregar_productos()
	{		
		// Agrega el array de los datos del producto al array de productos del carrito
		array_push( $_SESSION['cart']['products'] , $_POST );
		// Retorna exitoso
		echo "true";
	}

	// Funcion para eliminar un producto del carrito
	public function eliminar_productos()
	{
		// Guarda el id del producto
		$id = $_POST['id'];
		// Declara la posicion como nula
		$i = NULL;
		// Recorre los productos
		foreach ( $_SESSION['cart']['products'] as $position => $product ) 
		{
			// Valida si el producto existe
			if( $product['id'] == $id )
				// Obtiene la posición
				$i = $position;
		}
		// Valida que la posición no sea nula
		if( !is_null( $i ) )
		{
			// Elimina el producto
			unset( $_SESSION['cart']['products'][$i] );
			echo "true";
		}
		else
			echo "Producto no encontrado.";
	}

    // Funcion para mostrar la remision de una compra
	public function datosCompra()
	{
		// Busca los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );
		// Obtiene los datos del usuario
		$user_data = $this->UserDataController->find_by_user_id( $user['id'] );
		// Crea un array vacio
		$products = [];
		$total = 0;
		// Recorre los productos del carrito
		foreach ( $_SESSION['cart']['products'] as $product ) 
		{
			// obtenemos los datos del producto
			$product_found =$this->ProductModel->find( $product['productId'] );
			$subtotal = ( $product['cantidad'] * $product_found['price'] );
			$total += $subtotal;
			$product_to_add = [
				'id' => $product['productId'],
				'nombre' => $product_found['name'],
				'cantidad' => $product['cantidad'],
				'precio' => $product_found['price'],
				'color' => $product_found['color'],
				'subtotal' => $subtotal,
			];
			// Agrega el array de los datos del producto al array de productos del carrito
			array_push( $products , $product_to_add );
		}
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'user' => $user,
			'user_data' => $user_data,
			'products' => $products,
			'total' => $total
		];
		$this->view('client/buy', $params);
	}

}