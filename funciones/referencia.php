<?php

function funcion_1(&$parametro_1){
	$parametro_1 = 'Si cambia';
}

$variable = 'Esto es una variable';
echo $variable.'<br/>'; 
funcion_1 ($variable);
echo $variable;

# Para imprimir los link
$file = basename(__FILE__);
echo '<br/><br/>';
echo"<a  href='fuente.php?file=$file'>Ver Código fuente</a>";
?>
