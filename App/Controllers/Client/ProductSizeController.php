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
		$quantity = $this->ProductSizeModel->find_quantity( $_POST['productSizesId'] );
		// Contiene el listado de cantidades disponibles
		$option = '<option>--Seleccione cantidad</option>';
		// Recorre y estructura las opciones de cantidad
		for ($i=1; $i <= $quantity['quantity']; $i++) { 
			$option .= '<option value="'.$quantity['sizeId'].'">'.$i.'</option>';
		}
		// Imprime el listado
		echo "true|".$option;
	}

}