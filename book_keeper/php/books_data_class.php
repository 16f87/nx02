<?php
class BOOKS_DATA_CLASS {

	/*
	 * Variables de ICONOS
	 */
	private $id;
	private $titulo;
    private $autor;
	private $lector;
	private $borrowed_date;
	const TABLE_BOOKS = 'books';
    //------------------------------------------------------------->
	public function __construct() {		
	}

	public static function GET_ALL_BOOKS($conexion) {
		$consulta = $conexion->prepare ('SELECT * FROM'.TABLE_BOOKS);
		$consulta->execute ();
		$registro = $consulta->fetchAll ();
		return $registro;
	}


//--------------------------------->
//End class
}
