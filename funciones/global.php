<?php

global $variable_1;
$variable_1 = 'Soy una variable GLOBALL';

function funcion_1(){
	echo $GLOBALS["variable_1"].'<br>';
}
funcion_1();

# Para imprimir los link
$file = basename(__FILE__);
echo '<br/>';
echo"<a  href='fuente.php?file=$file'>Ver Código fuente</a>";

?>