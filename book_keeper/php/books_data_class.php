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
	public const TABLE_BOOKS = 'books';
    //------------------------------------------------------------->
	public function __construct($id=null, $titulo = null,$autor = null,$lector = null,$borrowed_date = null) {

		$this->id=$id;
		$this->titulo=$titulo;
		$this->autor=$autor;
		$this->lector=$lector;
		$this->borrowed_date=$borrowed_date;


	}

public static function GET_ALL_BOOKS($conexion) {
		$consulta = $conexion->prepare ('SELECT * FROM `books`');
		$consulta->execute ();
		$registro = $consulta->fetchAll ();
		return $registro;
	}
//--------------------------------->
//End class
}
