<?php

// función que carga la vista principal de la pagina
class ProductsController extends Controller
{
	// función constructor del controlador
	public function __construct()
	{
		// llamamos al constructor del padre
		parent::__construct();
	}

	// función para mostrar la vista
	public function index()
	{	
		// mostramos la vista
		$this->view('client/products');
	}

    // funcion para mostrar la vista de un producto especifico
    public function uniqueproduct(){
        $this->view('client/uniqueProduct');
    }

	
}