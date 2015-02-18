<?php

function funcion_1 ($parametro_1){
	$parametro_1 = 'hola';
	echo $parametro_1; 
}

$variable = "esto no cambia";
funcion_1($variable);
echo "<br>"; 
echo $variable; 

# Para imprimir los link
$file = basename(__FILE__);
echo '<br/><br/>';
echo"<a  href='fuente.php?file=$file'>Ver Código fuente</a>";

?>