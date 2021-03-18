<?php
// importamos el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/UserDataController.php';

class ShoppingCarController extends Controller
{

	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
		// realizamos la peticion al modelo de cerrar sesion
		$this->auth->guest();
		// Importar modelo de los productos
        //$this->ProductModel = $this->model("Product");
		// validamos si existe un carrito
		$this->validar_carrito();
		// Importar modelo de usuario
		$this->UserModel = $this->model("User");
		// Importar modelo de las categorias
		$this->CategoryModel = $this->model("Category");
		// Importar modelo de los productos
        $this->ProductModel = $this->model("Product");
		// Importar modelo de la tienda
		$this->StoreModel = $this->model("Store");
		// instanciamos el controlador de datos usuarios de la consola
		$this->UserDataController = new UserDataController();
	}

	// Funcion para carrito
	public function index()
	{
		// creamos un array vacio
		$products = [];
		$total = 0;
		
		// recorremos los productos del carrito
		foreach ( $_SESSION['cart']['products'] as $product ) 
		{
			// obtenemos los datos del producto
			$product_found = mysqli_fetch_assoc( $this->ProductModel->findImagenAndSize( $product['productId'] ));
			$subtotal = ( $product['cantidad'] * $product_found['price'] );
			$total += $subtotal;
			$product_to_add = [
				'id' => $product['productId'],
				'nombre' => $product_found['name'],
				'cantidad' => $product['cantidad'],
				'precio' => $product_found['price'],
				'imagen' => $product_found['imagen'],
				'color' => $product_found['color'],
				'subtotal' => $subtotal,
			];
			// agregamos el array de los datos del producto al array de productos del carrito
			array_push( $products , $product_to_add );
		}
		print_r($products);
		// mostramos que contiene el carrito
		$this->view('client/shoppingCar', ['products' => $products, 'total' => $total]);
	}

	// función para validar un carrito
	public function validar_carrito()
	{
		//validamos si existe un carrito
		if( !isset( $_SESSION['cart'] ) )
		{
			//si no existe se crea un carrito
			$_SESSION['cart'] = [
				'id' => 1,
				'products' => []
			];	
		}
	}

	public function agregar_productos()
	{		
		// agregamos el array de los datos del producto al array de productos del carrito
		array_push( $_SESSION['cart']['products'] , $_POST );
		// retornamos que se agrego
		echo "true";
	}

	// funcipon para eliminar un producto del carrito
	public function eliminar_productos()
	{
		// obtenemos el id
		$id = $_POST['id'];
		// declaramos la posicion como nula
		$i = NULL;
		// recorremos los productos
		foreach ( $_SESSION['cart']['products'] as $position => $product ) 
		{
			// validamos si el producto existe
			if( $product['id'] == $id )
				// obtenemos la posición
				$i = $position;
		}
		// validamos que la posición no sea nula
		if( !is_null( $i ) )
		{
			// eliminamos el producto
			unset( $_SESSION['cart']['products'][$i] );
			echo "true";
		}
		else
			echo "Producto no encontrado.";
	}

    // funcion para mostrar la remision de una compra
	public function datosCompra()
	{
		// buscamos los datos del usuario
		$user = $this->UserModel->find( $this->auth->user->__get('id') );
		// obtenemos los datos del usuario en la tabal user_data
		$user_data = $this->UserDataController->find_by_user_id( $user['id'] );
		// Obtiene la tienda a la que pertenecen los productos

		// creamos un array vacio
		$products = [];
		$total = 0;
		// recorremos los productos del carrito
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
			// agregamos el array de los datos del producto al array de productos del carrito
			array_push( $products , $product_to_add );
		}
		// Organiza el arreglo con los datos a pasar a la vista
		$params = [
			'user' => $user,
			'user_data' => $user_data,
			'products' => $products
		];
		$this->view('client/buy', $params);
	}

}