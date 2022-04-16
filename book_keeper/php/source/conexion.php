<?php
class Conexion {

	private $kind_of_db = 'mysql';
	private $host = 'localhost';
	private $name_of_db = 'book_keeper';
	private $user = '';
	private $password = '';


	private static $instance = null;
	private function __construct() {
		try {
			self::$instance = new PDO ( $this->kind_of_db . ':host=' . $this->host . ';dbname=' . $this->name_of_db, $this->user, $this->password );
		} catch ( PDOException $e ) {
			echo "Sorry, we're having a problem and we can't connect to the database.X( Detail:" . $e->getMessage ();
			exit ();
		}
	}
	public static function getinstance() {
		if (! self::$instance) {
			new self ();
		}
		return self::$instance;
	}
	public static function closeDbConection() {
		self::$instance = null;
	}
}
?>
