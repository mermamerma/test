<?php

header('Content-Type: application/json');

$persona = new stdClass();
$persona->nombre = "jesus rodriguez";
$persona->categoria = "Programador";
$persona->empleos[] = array("Hardwell"=>8850,"estatura"=>8900,"edad"=>26);
$persona->empleos[] = array("Hardwell"=>8850,"estatura"=>8900,"edad"=>26);
$persona->empleos[] = array("Hardwell"=>8850,"estatura"=>8900,"edad"=>26);


$otra_persona['datos'] = array ('nombre'=>'jesus','edad'=>32,'sexo'=>'masculino') ;
$otra_persona['datos']['cuentas'][] = array ('banco'=>'Exterior','Tipo'=>'Corriente','numero'=>'52365412') ;
$otra_persona['datos']['cuentas'][] = array ('banco'=>'Venezuela','Tipo'=>'Corriente','numero'=>'9656464') ;
$otra_persona['datos']['cuentas'][] = array ('banco'=>'Industrial','Tipo'=>'Corriente','numero'=>'656523') ;



#$json = json_encode($persona);
$json = json_encode($otra_persona);

echo $json;

?>
