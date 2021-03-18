<?php

class SaleDetailController extends Controller 
{
	public function __construct()
	{
		$this->SaleDetailModel = $this->model("SaleDetail"); 
	}
	public function index(){
		
	}

	public function store( $products, $id_sale )
	{
		foreach ($products as $product) {
            $request = [
                'saleId' => $id_sale,
                'productId' => $product['id'],
                'price' => $product['subtotal']*$product['cantidad']
            ];
			$this->SaleDetailModel->store( $request );
		}
	}
}