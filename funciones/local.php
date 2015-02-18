<?php

function funcion_1(){
	$variable_1 = 'Eesta es una variable local';
	echo $variable_1.'<br>';
	$variable_1 = 'Cambio a variable_1';
}

funcion_1();
echo $variable_1;

# Para imprimir los link
$file = basename(__FILE__);
echo '<br/>';
echo"<a  href='fuente.php?file=$file'>Ver Código fuente</a>";
?>
