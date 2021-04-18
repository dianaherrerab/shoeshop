<?php

// Importa el controlador de las tallas de los productos
require_once APP.'/Controllers/Client/ProductSizeController.php';
// Clase para gestionar la información de los detalles de la venta
class SaleDetailController extends Controller 
{
	// Función constructor del controlador
	public function __construct()
	{
		// Importa modelo de los detalles de la venta
		$this->SaleDetailModel = $this->model("SaleDetail"); 
        // Instacia el controlador de las tallas del producto
		$this->ProductSizeController = new ProductSizeController();
	}

	// Funcion para almacenar un registro
	public function store( $products, $id_sale )
	{
		// Recorre los productos y crea el arreglo de datos
		foreach ($products as $product) {
            $request = [
                'saleId' => $id_sale,
                'productId' => $product['id'],
				'size' => $product['talla'],
                'price' => $product['subtotal']*$product['cantidad'],
				'quantity' => $product['cantidad'],
				'created_at' => date('Y-m-d H:i:s')
            ];
			// Registra cada detalle de venta
			$this->SaleDetailModel->store( $request );
		}
	}

	// función para actualziar por cancelación
	public function update_quantity_by_saleId( $saleId )
	{
		// obtenemos los productos de la venta
		$details = $this->SaleDetailModel->find_by_saleId( $saleId );
		// recorremos los datos del producto
		foreach ( $details as $product ) 
		{
			// hacemos la petición de actualizar por cancelación
			$this->ProductSizeController->update_for_canceled( $product );
		}
	}
}