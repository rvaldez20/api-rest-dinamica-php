<?php

require_once "controllers/get.controller.php";

// obtenemos la tabla a la que se le esta haciendo la peticion
$table = explode("?", $routes_array[1])[0];
// echo '<pre>'; print_r($table); echo '</pre>';
// return;

// verificamos si viene parametros que seria los campos
$select = $_GET["select"] ?? "*";

// le pasamos al controlador el nombre de la tabla
$response = new GetController();

// validamos si tenemos un filtro
if( isset($_GET["linkTo"]) && isset($_GET["equalTo"])) {
   // Solicitud GET con filtro
   $response -> getDataFilter($table, $select, $_GET["linkTo"], $_GET["equalTo"]);
} else {
   // Solicitud GET sin filtro
   $response -> getData($table, $select);
   // echo '<pre>'; print_r($response); echo '</pre>';
   // return;
}








