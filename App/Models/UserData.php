<?php

// Modelo generado por medio de Blue Ghost
class UserData extends Model
{
	// función constructor del modelo
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "userdata";
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = ["firstName", "secondName", "lastName", "secondLastName","documentNumber", "cellphone", "birthDate", "address", "userId", "typeDocumentId", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// variable que contiene la clave primaria de la tabla
		$this->primary_key = "userDataId";
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
	public function listing( $pagina = 1, $input_whr = "firstName", $value_whr = null )
	{
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr, $limit_per_page = LIMIT_PER_PAGE, $sql = 'NULL', $input_ord = 'userDataId');
	}

	// función para buscar los datos por userId
	public function find_by_user_id( $userId )
	{
		return parent::customer( ' SELECT * FROM ' . $this->table . ' WHERE userId = "' . $userId . '" ' , true );
	}

	// función para eliminar un datos de usuario por el userId
	public function delete_by_user_id( $userId )
	{
		return parent::customer(" DELETE FROM " . $this->table . " WHERE userId = '" . $userId . "' ");
	}
}