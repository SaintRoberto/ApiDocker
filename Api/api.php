<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here

response(20, 400, 200,"lectura Correcta");

function response($order_id,$amount,$response_code,$response_desc){
    $response['order_id'] = $order_id;
    $response['amount'] = $amount;
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;
    
    $json_response = json_encode($response);
    echo $json_response;
   }

?>