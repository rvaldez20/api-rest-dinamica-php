<?php

require_once "models/get.model.php";

class GetController {

   /**============================================
   * ? Solicitud al modelo para la consulta
   ==============================================*/
   static function getData($table) {

      // el controlador recibe la tabla y se la manda al modelo para hacer la query
      $response = GetModel::getData($table);

      $return = new GetController();
      $return -> fncResponse($response);
   }


   /**============================================
    * ? Respuesta del controlador: solo retrona la respues en formato JSON
   ==============================================*/
   public function fncResponse($response) {

      if(!empty($response)) {
         $json = array(
            'status' => 200,
            'total' => count($response),
            'results' => $response 
         );
      } else {
         $json = array(
            'status' => 404,            
            'results' => 'Not Found'
         );
      }
     
     echo json_encode($json, http_response_code($json["status"]));
   }

}