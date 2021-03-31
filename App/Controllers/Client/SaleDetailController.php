<?php

// Clase para gestionar la información de los detalles de la venta
class SaleDetailController extends Controller 
{
	// Función constructor del controlador
	public function __construct()
	{
		// Importa modelo de los detalles de la venta
		$this->SaleDetailModel = $this->model("SaleDetail"); 
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
				'created_at' => date('Y-m-d H:i:s')
            ];
			// Registra cada detalle de venta
			$this->SaleDetailModel->store( $request );
		}
	}
}