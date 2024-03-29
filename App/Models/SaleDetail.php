<?php

// Modelo generado por medio de Blue Ghost
class SaleDetail extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "saledetails";
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = ["price", "saleId", "productId", "size", "quantity", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// clave primaria
		$this->primary_key = 'saleDetailsId';
	}

	// función para buscar todos los datos
	public function all( $input = "saleDetailsId", $order = "asc" )
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

	// función para buscar un usuario por el saleId
	public function find_by_saleId( $saleId )
	{
		return parent::customer( " SELECT * FROM ". $this->table ." WHERE saleId = '".$saleId."' " );
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

	// función para buscar un usuario por el saleId
	public function find_all( $saleId )
	{
		return parent::customer( " SELECT s.*, p.name FROM ". $this->table ." as s INNER JOIN products as p on s.productId=p.productId WHERE s.saleId = '".$saleId."'  ");
	}

	// función para buscar un usuario por el saleId
	public function all_name( )
	{
		return parent::customer( " SELECT s.productId, p.name, count(*) as cantidad FROM ". $this->table ." as s INNER JOIN products as p on s.productId=p.productId group by s.productId   ");
	}


}