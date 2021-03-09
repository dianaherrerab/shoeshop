<?php

// Modelo generado por medio de Blue Ghost
class Product extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "products";
		// productId
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = [ "id", "name", "slug", "material", "price", "description", "color", "brand", "categoryId", "genderId", "statusProductId", "storeId", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
	}

	// función para buscar todos los datos
	public function all( $input = "id", $order = "asc" )
	{
		return parent::all( $input, $order );
	}

	// función para guardar una tupla
	public function store( $request )
	{
		return parent::store( $request );
	}

	// función para actualizar una tupla
	public function update( $request )
	{
		return parent::update( $request );
	}

	// función para búscar una tupla
	public function find( $primary_key )
	{
		return parent::find( $primary_key );
	}

	// función para eliminar una tupla
	public function delete( $primary_key )
	{
		return parent::delete( $primary_key );
	}

	// función para listar las tuplas
	public function listing( $pagina = 1, $input_whr = "id", $value_whr = null )
	{
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr );
	}

	// Función para obtener todos los productos
	public function getProducts( $id_store ){
		return parent::customer("SELECT p.*, i.name as imagen, ps.sizeId as size, ps.quantity FROM " .$this->table ." as p INNER JOIN images as i on i.productId = p.productId INNER JOIN productssize as ps on ps.productId = p.productId WHERE p.storeId = '".$id_store."' AND p.statusProductId = 1");
	}
}