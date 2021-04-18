<?php

// Modelo generado por medio de Blue Ghost
class Sale extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "sales";
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = ["date", "totalPrice", "userId", "storeId", "statusSaleId", "observations", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// clave primaria
		$this->primary_key = 'saleId';
	}

	// función para buscar todos los datos
	public function all( $input = "saleId", $order = "asc" )
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
	public function listing( $pagina = 1, $input_whr = 'date', $value_whr = null )
	{
		if( $input_whr != 'date' )
			$sql = 'SELECT * FROM ' . $this->table .' t1 INNER JOIN statussale t2 ON t1.statusSaleId = t2.statusSaleId WHERE name LIKE "%' . $value_whr . '%"';
		else
			$sql = 'NULL';
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr, $limit_per_page = LIMIT_PER_PAGE, $sql, $input_ord = 'date', $order = 'desc' );
	}

	// función para buscar un usuario por el slug
	public function findByUserId( $userId )
	{
		return parent::customer( " SELECT s.*, t.name as store, st.name as status FROM ". $this->table ." as s INNER JOIN stores as t on t.storeId=s.storeId INNER JOIN statussale as st on st.statusSaleId=s.statusSaleId WHERE s.userId = '".$userId."' " );
	}

	public function find_by_fecha_ped( $created_at )
	{
		return parent::customer("SELECT * FROM " .$this->table ." WHERE created_at = '".$created_at."'");
	}

	public function all_status( )
	{
		return parent::customer(" SELECT s.*,t.name, count(*) as cantidad FROM " .$this->table ." as s INNER JOIN statussale as t on t.statusSaleId=s.statusSaleId group by s.statusSaleId ");
	}
}