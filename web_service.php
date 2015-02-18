<?php

$objClienteWS = new SoapClient('Ws_Ejemplo.wsdl');
$resultado = $objClienteWS->ejemplo('Hola');
print_r($resultado);


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
