<?php

// Clase para gestionar la informacion de los productos
class ProductSizeController extends Controller
{
	public function __construct()
	{
		// Instancia el modelo de las tallas del producto
		$this->ProductSizeModel = $this->model('ProductSize');
	}

	// Función para buscar la cantidad disponible de cada producto
	public function find_quantity_by_size()
	{
		// Busca la información de la talla de un producto
		$quantity = $this->ProductSizeModel->find_quantity_by_size_and_product_id( $_POST['product_id'], $_POST['sizeId'] );
		// Contiene el listado de cantidades disponibles
		$option = '<option>--Seleccione cantidad</option>';
		// Recorre y estructura las opciones de cantidad
		for ($i=1; $i <= $quantity['quantity']; $i++) { 
			$option .= '<option value="'.$i.'">'.$i.'</option>';
		}
		// Imprime el listado
		echo "true|".$option;
	}

	// Función para buscar la cantidad disponible de cada producto
	public function update_quantity( $products_and_total )
	{
		foreach ($products_and_total['products'] as $product) {
			// Busca la información de la talla de un producto
			$product_found = $this->ProductSizeModel->find_size( $product['id'] );
			foreach ($product_found as $p) {
				if($p['sizeId'] == $product['talla'])
				{
					$p['quantity'] = $p['quantity']-$product['cantidad'];
				}
				// Actualiza la nueva cantidad
				$this->ProductSizeModel->update( $p );
			}
			// Imprime el listado
			echo "true|";
		}
	}

	// hacemos la actualizacón de los productos
	public function update_for_canceled( $product )
	{
		// Busca la información de la talla de un producto
		$productSize = $this->ProductSizeModel->find_quantity_by_size_and_product_id( $product['productId'], $product['size'] );
		$request = [
			'productSizesId' => $productSize['productSizesId'],
			'quantity' => $productSize['quantity'] + $product['quantity'],
			'updated_at' => date('Y-m-d H:i:s')
		];
			// Registra cada detalle de venta
		$this->ProductSizeModel->update( $request );
	}

}