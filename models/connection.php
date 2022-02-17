<?php

class Connection {
   /**============================================
	 * ? Información de la base de datos
	==============================================*/	

	static public function infoDatabase() {

		$infoDB = array(
			"database" => "dbejemplo3",
			"user" => "root",
			"pass" => ""
		);
		
		return $infoDB;
	}

	/**============================================
	 * ? Conexión de la base de datos
	==============================================*/	
	static public function connect() {

		try {
			$link = new PDO(
				"mysql:host=localhost;dbname=".Connection::infoDatabase()["database"],
				Connection::infoDatabase()["user"],
				Connection::infoDatabase()["pass"]
			);

			$link->exec("set names utf8");

		} catch(PDOException $e) {
			die("Error:".$e->getMessage());
		}

		return $link;

	}
}