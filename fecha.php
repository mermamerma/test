
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$dia = date("d");
$mes = date("m");
$año = date("Y");
$hora = date('h:i:s a');
$meses = array('01' => 'enero','02' => 'febrero','03' => 'marzo','04' => 'abril','05' => 'mayo','06' => 'junio','07' => 'julio','08' => 'agosto','09' => 'septiembre','10' => 'octubre','11' => 'noviembre','12' => 'diciembre');
$out = '';

if($meses[$mes])
{
 $out = $dia ." de ".$meses[$mes]." del ".$año .' a las '.$hora ;
}
	return $out;
?>
