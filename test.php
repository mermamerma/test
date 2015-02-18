<?php 

function get_usuario($input) {
	$flag = strpos($input,'@');		
	if ($flag){
		$pos = strpos($input,'@');
		$input = substr($input,0,$pos);
		return $input;
	}
	else
		return $input;
}


$primer_nombre = 'JESUS' ;
$primer_apellido = 'RODRIGUEZ' ;
$cedula = 14684937 ;
$correo = 'jesus.rodriguez937@mppre.gob.ve' ;
#$correo = 'AGUST27@HOTMAIL.COM' ;
#$correo = '';
$v = strpos($correo, '@mppre.gob.ve');
var_dump($v) ; exit;

if ($correo == '') 
	$usuario = $primer_nombre.'.'.$primer_apellido.substr($cedula,-3,3) ;
elseif (strpos($correo, '@mppre.gob.ve'))
	$usuario = get_usuario($correo) ;
else
	$usuario = 'Sin correo :S';

echo $usuario ;

?>