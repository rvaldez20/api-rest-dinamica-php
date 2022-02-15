<?php

require_once "controllers/get.controller.php";

// obtenemos la tabla a la que se le esta haciendo la peticion
$table = $routes_array[1];


// le pasamos al controlador el nombre de la tabla
$response = new GetController();
$response -> getData($table);

// echo '<pre>'; print_r($response); echo '</pre>';
// return;



