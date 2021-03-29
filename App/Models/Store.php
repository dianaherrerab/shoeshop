<?php

// Modelo generado por medio de Blue Ghost
class Store extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "stores";
		// storeId
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = ["name", "slug", "nit", "image", "description", "cellphone", "address",  "userId", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// variable que contiene la clave primaria
		$this->primary_key = "storeId";
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

	// funcion para encontrar la tienda por el id del producto
	public function findByProduct( $productId ){
		return parent::costumer(" SELECT * FROM ".$this->table." as s INNER JOIN product as p ON s.productId=p.productId WHERE p.storeId = '".$productId."' ");
	}

	// funcion para encontrar la tienda por el id del producto
	public function findByUserId( $userId ){
		return parent::customer(" SELECT * FROM ".$this->table." WHERE userId = '".$userId."' ", true);
	}

}