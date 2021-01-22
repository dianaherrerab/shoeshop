<?php

// función que carga la vista principal de la pagina
class ShoppingCarController extends Controller
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
		$this->view('client/shoppingCar');
	}

	// funcion para mostrar la remision de una compra
	public function buy(){
		$this->view('client/buy');
	}
}