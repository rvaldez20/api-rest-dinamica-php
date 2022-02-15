<?php

require_once "connection.php";

class GetModel {

   static public function getData($table) {

      // hacemos la consulta SQL
      $sql = "SELECT * FROM $table";

      // preparamos la query
      $stmt = Connection::connect()->prepare($sql);
      $stmt -> execute();
      return $stmt -> fetchAll(PDO::FETCH_CLASS);

   }

}