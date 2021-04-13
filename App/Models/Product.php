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
		$this->fillable = ["name", "slug", "material", "price", "description", "color", "brand", "brandId" , "categoryId", "genderId", "statusProductId", "storeId", "created_at", "updated_at" ];
		// variable que contiene los campos que no queremos dejar ver
		$this->hidden = [];
		// variable que contiene clave primaria
		$this->primary_key = "productId";
	}

	// función para buscar todos los datos
	public function all( $input = "productId", $order = "asc" )
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
	public function listing( $pagina = 1, $input_whr = "productId", $value_whr = null )
	{
		// ejecutamos la consulta
		return parent::pagination( $pagina, $value_whr, $input_whr, $limit_per_page = LIMIT_PER_PAGE, $sql = 'NULL', $input_ord = 'productId', $order = 'desc' );
	}

	// Función para obtener todos los productos
	public function getProducts( $id_store ){
		return parent::customer("SELECT p.*, i.name as imagen FROM " .$this->table ." as p INNER JOIN images as i on i.productId = p.productId WHERE p.storeId = '".$id_store."' AND p.statusProductId = 1 AND i.portada = 1");
	}

	// función para buscar un producto por el slug
	public function find_by_slug( $slug )
	{
		return parent::customer( " SELECT p.*, c.name as category, g.name as gender FROM ". $this->table ." as p INNER JOIN categories as c on c.categoryId=p.categoryId INNER JOIN genders as g ON g.genderId=p.genderId WHERE p.slug = '".$slug."' " , true );
	}

	// función para buscar un producto por el slug
	public function find_all_by_slug( $slug )
	{
		return parent::customer( " SELECT p.*, i.name as imagen, ps.sizeId as size, ps.quantity, g.name as gender, c.name as category FROM " .$this->table ." as p INNER JOIN images as i on i.productId = p.productId INNER JOIN productssize as ps on ps.productId = p.productId INNER JOIN genders as g on g.genderId=p.genderId INNER JOIN categories as c on c.categoryId=p.categoryId WHERE p.slug = '".$slug."' AND p.statusProductId = 1" );
	}

	// funcion para obtener todos los productos con imagen y tallas por Id
	public function findImagenAndSize( $productId ){
		return parent::customer("SELECT p.*, i.name as imagen, ps.quantity FROM " .$this->table ." as p INNER JOIN images as i on i.productId = p.productId INNER JOIN productssize as ps on ps.productId = p.productId WHERE p.productId = '".$productId."' AND p.statusProductId = 1 AND i.portada=1");
	}

	// función para buscar un producto por el slug
	public function find_status( $productId )
	{
		return parent::customer( " SELECT s.name FROM ". $this->table ." as p INNER JOIN statusproducts as s on s.statusProductId=p.statusProductId WHERE p.productId = '".$productId."' " , true );
	}

	// función para buscar un producto por el slug
	public function find_portada( $productId )
	{
		return parent::customer( " SELECT i.name FROM ". $this->table ." as p INNER JOIN images as i on i.productId=p.productId WHERE p.productId = '".$productId."' AND i.portada = 1", true );
	}

}