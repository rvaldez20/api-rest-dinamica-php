<?php

/**============================================
 * ! Mostrat Errores
 ==============================================*/

ini_set('display_errors', 0); // 1-errores en navegador 0-No visualizarlos
ini_set("log_errors", 1); // se creara un nuevo archivo d elog para errores
ini_set("error_log", "C:/xampp/htdocs/apirest-dinamica/php_error_log"); // ruta del archivo errores

/**============================================
 * ? Requerimientos
 ==============================================*/

 // [PRUEBAS]requerimos la conexion a la db
 //  require_once "models/connection.php";
 //  echo '<pre>'; print_r(Connection::infoDatabase()["database"]); echo '</pre>';
 //  echo '<pre>'; print_r(Connection::connect()); echo '</pre>'; 
 //  return;

// reuqerimos la clase RoutesController
require_once  "controllers/routes.controller.php";

// instanciamos la clase y ejecutar el metodo index
$index = new RoutesController();
$index -> index();