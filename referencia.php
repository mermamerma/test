 
<?php
echo 'Hola';
$var = 'Hola Mundo' ;


function referencia (&$v) {
  echo $v ;
}

referencia($var);
?>