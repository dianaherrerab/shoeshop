<?php
// importamos el controlador de datos usuarios de la consola
require_once APP.'/Controllers/Client/SaleDetailController.php';

// función que carga la vista principal de la pagina
class SaleController extends Controller
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
        // Importar modelo de una compra
		$this->SaleModel = $this->model("Sale");
        // instanciamos el controlador de datos usuarios de la consola
		$this->SaleDetailController = new SaleDetailController();
	}

	// función para mostrar la vista
	public function index()
	{	
		// capturamos el id del usuario
		$id_user = $_SESSION['id'];
        // obtenemos los datos del pedido con el total
		$products_and_total = $this->get_products_and_total( $_SESSION['cart']['products'] );
        // Obtenemos el id de la tienda
        $store = 1;
        // hacemos la petición de registro Y obtenemos el id de la compra
		$id_sale = $this->store( $id_user, $store, $products_and_total['total'] );
        // Almacenamos los datos del pedido
        $this->SaleDetailController->store( $products_and_total['products'] , $id_sale['saleId']);
        // limpiamos el carrito
		unset( $_SESSION['cart'] );
		// redireccionamos
		$this->redirect('client');
	}

    private function get_products_and_total()
	{
		// creamos un array vacio
		$products = [];
		$total = 0;
		// recorremos los productos del carrito
		foreach ( $_SESSION['cart']['products'] as $product ) 
		{
			// obtenemos los datos del producto
			$product_found = $this->ProductModel->find( $product['productId'] );
			$subtotal = ( $product['cantidad'] * $product_found['price'] );
			$total += $subtotal;
			$product_to_add = [
				'cantidad' => $product['cantidad'],
				'subtotal' => $subtotal,
				'id' => $product['productId'],
			];
			// agregamos el array de los datos del producto al array de productos del carrito
			array_push( $products , $product_to_add );
		}
		return [ 'products' => $products, 'total' => $total ];
	}

    // funcion para guardar un registro
    public function store( $id_user, $store, $total )
    {
        $date = date('Y-m-d H:i:s');
		$request = [
			'date' => $date,
			'totalPrice' => $total,
			'userId' => $id_user,
			'storeId' => $store,
            'statusSaleId' => 1,
            'created_at' => date('Y-m-d H:i:s')
		];
		$this->SaleModel->store( $request );
		return mysqli_fetch_assoc( $this->SaleModel->find_by_fecha_ped( $request['created_at'] ) );
        
    }
}