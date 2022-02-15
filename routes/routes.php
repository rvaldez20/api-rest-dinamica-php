<?php

// para obtener los parametros de la url
// echo '<pre>'; print_r($_SERVER['REQUEST_URI']); echo '</pre>';

// convierte la cadena de la uri a un array
$routes_array = explode("/", $_SERVER['REQUEST_URI']);

// limpiamos en el array las posiciones vacias
$routes_array = array_filter($routes_array);

// Mostramos en pantalla el array con los parametros de la uri 
// echo '<pre>'; print_r($routes_array); echo '</pre>';

// validamos si no hay parametros en la uri (array vacio) devolveos un status 404
/**============================================
 * ? Cuando NO se hace solicitud a la API
 ==============================================*/
if(count($routes_array) == 0) {
	$json = array(
		"status" => 404,
		"result" => "Not found"
	);
	
	echo json_encode($json, http_response_code($json["status"]));
	return;
}
 
/**============================================
 * ? Cuando SI se hace solicitud a la API
 ==============================================*/
// con $_SERVER['REQUEST_METHOD'] podemos saber que metodo se hizo en la petición
//  echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';

 // Preguntamos si hay un elemento en el array y existe una peteción HHTP
 if(count($routes_array) == 1 && isset($_SERVER['REQUEST_METHOD'])) {

	/**============================================
	 * * Peticion GET
	==============================================*/	
	if ($_SERVER['REQUEST_METHOD'] == "GET") {

		// incluimos la soliictu get
		include "services/get.php";
	}

	/**============================================
	 * * Peticion POST
	==============================================*/	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$json = array(
			"status" => 200,
			"result" => "Solicitud POST"
		);
		
		echo json_encode($json, http_response_code($json["status"]));
	}

	/**============================================
	 * * Peticion PUT
	==============================================*/	
	if ($_SERVER['REQUEST_METHOD'] == "PUT") {

		$json = array(
			"status" => 200,
			"result" => "Solicitud PUT"
		);
		
		echo json_encode($json, http_response_code($json["status"]));
	}

	/**============================================
	 * * Peticion DELETE
	==============================================*/	
	if ($_SERVER['REQUEST_METHOD'] == "DELETE") {

		$json = array(
			"status" => 200,
			"result" => "Solicitud DELETE"
		);
		
		echo json_encode($json, http_response_code($json["status"]));
	}

 }