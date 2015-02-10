<?php

class DB {

	private static $instance;
	
	private $MySQLi;
	
	private function __construct() {
	
		$this->MySQLi = @ new mysqli(
			DB_SERVER,
			DB_USER,
			DB_PASSWD,
			DB_NAME
		);
		
		if (mysqli_connect_errno()) {
			//throw new Exception('Database error.');
			die('Database error.');
		}

		$this->MySQLi->set_charset("utf8");
	}
	
	public static function init() {
		if(self::$instance instanceof self) {
			return false;
		}
		
		self::$instance = new self();
	}
	
	public static function getNumRows(){
		return self::$instance->MySQLi->affected_rows;
	}
	
	public static function query($q){
		return self::$instance->MySQLi->query($q);
	}
	
	public static function esc($str){
		return self::$instance->MySQLi->real_escape_string(htmlspecialchars($str));
	}

}
?>