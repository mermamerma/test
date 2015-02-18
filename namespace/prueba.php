<?php

require ('namespaces_1.php');
require ('namespaces_2.php');

EspacioDeNombreUno\prueba(); 
EspacioDeNombreDos\prueba(); 
EspacioDeNombreUno\SubEspacio\prueba();

use EspacioDeNombreUno\SubEspacio as subEsp ;

subEsp\prueba();

?>
