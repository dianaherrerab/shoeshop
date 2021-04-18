<?php

// Modelo generado por medio de Blue Ghost
class ProductSize extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "productssize";
		// productSizesId 
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = [ "quantity", "sizeId", "productId", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// clave primaria
		$this->primary_key = 'productSizesId';
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

	// función para buscar un producto por el slug
	public function find_size( $productId )
	{
		return parent::customer( " SELECT t1.*, t2.number FROM ". $this->table ." t1 INNER JOIN sizes t2 ON t1.sizeId = t2.sizeId WHERE t1.productId = '".$productId."' ");
		
	}
	// función para buscar un producto por el slug
	public function find_quantity( $productSizesId )
	{
		return parent::customer( " SELECT * FROM ". $this->table ." WHERE productSizesId = '".$productSizesId."' ", true);
		
	}
	// función para buscar un producto por el slug
	public function find_quantity_by_size_and_product_id( $productId, $sizeId )
	{
		return parent::customer( " SELECT * FROM ". $this->table ." WHERE productId = '".$productId."' and sizeId = '".$sizeId."' ", true);
		
	}

}