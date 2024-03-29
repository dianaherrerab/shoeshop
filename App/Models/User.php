<?php 

class User extends Model
{	
	// función constructor de la clase
	public function __construct()
	{
		// llamamos el contructor de la clase padre
		parent::__construct();
		// variable para declarar el nombre de la tabla al cual pertenece
		$this->table = "users";
		// llenamos la variable que contiene los datos que se pueden registrar en masa 
		$this->fillable = [ "name", "username", "slug", "password", "role", "blocked", "_token", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [ "password", "_token" ];
		// variable que contiene la clave primaria de la tabla
		$this->primary_key = "id";
	}

	// función para obtener un dato de la lista
	public function __get( $attribute )
	{
		// validamos si el atributo a búscar es la password
		if( $attribute == "password")
			// retornamos vacio
			return "";
		// capturamos la primary key sesionada
		@$primary_key = $_SESSION[ $this->primary_key ];
		// validamos si existe una sesión activa
		if( isset( $primary_key ) && !empty( $primary_key ) && !is_null( $primary_key ) )
		{
			// buscamos los datos del usuario
			$response = parent::customer( " SELECT * FROM " . $this->table . " WHERE " . $this->primary_key . " = '" . $primary_key . "' " );
			// capturamos los datos
			$response = parent::__fetch( $response );
			// retornamos el atributo que buscamos
			return $response[ $attribute ];
		}
		// retornamos vacio
		return "";
	}

	// función para buscar un usuario
	public function all( $input = 'id', $order = 'asc' )
	{
		return parent::all( $input, $order );
	}

	// función para guardar un usuario
	public function store( $request )
	{
		return parent::store( $request );
	}

	// función para buscar por id
	public function update( $request )
	{
		return parent::update( $request );
	}

	// función para buscar por id
	public function find( $primary_key )
	{
		return parent::find( $primary_key );
	}

	// función para buscar por id
	public function delete( $primary_key )
	{
		return parent::delete( $primary_key );
	}

	// función para buscar un usuario por el slug
	public function find_by_slug( $slug )
	{
		return parent::customer( " SELECT * FROM ". $this->table ." WHERE slug = '".$slug."' ", true );
	}

	// función para buscar un usuario por el slug
	public function findByCreated_at( $created_at )
	{
		return parent::customer( " SELECT * FROM ". $this->table ." WHERE created_at = '".$created_at."' ", true );
	}

	// función para buscar un usuario por el slug
	public function findByUserDataId( $user )
	{
		return parent::customer( " SELECT d.*, u.*  FROM ". $this->table ." as u INNER join userdata as d on d.userId=u.id WHERE d.userDataId = '".$user."' ", true );
	}

	// función para listar los registros
	public function listing( $pagina = 1, $input_whr = 'name', $value_whr = null )
	{
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr );
	}

	// función para listar los registros
	public function listing_clients( $pagina = 1, $input_whr = 'name', $value_whr = '' )
	{
		if( $input_whr == "name" )
			$sql = 'SELECT t2.*, t1.name FROM ' . $this->table .' t1 INNER JOIN userdata t2 ON t2.userId = t1.id WHERE t1.role = 3 and t1.name LIKE "%' . $value_whr . '%"';
		else
			$sql = 'SELECT t2.*, t1.name FROM ' . $this->table .' t1 INNER JOIN userdata t2 ON t2.userId = t1.id WHERE t1.role = 3 and t2.documentNumber LIKE "%' . $value_whr . '%"';

		#echo $sql; exit();
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr, LIMIT_PER_PAGE, $sql );
	}
}