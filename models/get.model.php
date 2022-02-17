<?php

require_once "connection.php";

class GetModel {

   /**============================================
   * ? Petición GET sin FILTRO
   ==============================================*/

   static public function getData($table,$select) {

      // hacemos la consulta SQL
      $sql = "SELECT $select FROM $table";

      // preparamos la query
      $stmt = Connection::connect()->prepare($sql);
      $stmt -> execute();
      return $stmt -> fetchAll(PDO::FETCH_CLASS);
   }


   /**============================================
   * ? Petición GET con FILTRO
   ==============================================*/

   static public function getDataFilter($table, $select, $linkTo, $equalTo) {

      // hacemos la consulta SQL con filtro
      $sql = "SELECT $select FROM $table WHERE $linkTo = :$linkTo";

      // preparamos la query
      $stmt = Connection::connect()->prepare($sql);
      $stmt -> bindParam(":".$linkTo, $equalTo, PDO::PARAM_STR);
      $stmt -> execute();
      return $stmt -> fetchAll(PDO::FETCH_CLASS);
   }

}