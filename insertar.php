<?php

// you may have to modify login information for your database server:
    $conexion=mysql_connect("localhost","root","root") or die ("no se ha podido conectar a la BD");

    mysql_select_db("damnificados") or die ("no se ha podido seleccionar la BD");

    $sql = "SELECT * FROM refugiados WHERE id = 6";

    $consulta = mysql_query($sql,$conexion);

    $datos = mysql_result($consulta,0,"binario");
    $nombre = mysql_result($consulta,0,"nombre_archivo");
    $peso = mysql_result($consulta,0,"size");
    $tipo = mysql_result($consulta,0,"mime");    
    


    #header("Content-type: $tipo");
    #header("Content-length: $peso"); 
    #header("Content-Disposition: inline; filename=$nombre"); 
 
   echo $datos;



/*
$type 		= $_FILES["foto"]["type"];
$tmp_name 	= $_FILES["foto"]["tmp_name"];
$size 		= $_FILES["foto"]["size"];
$nombre		= basename($_FILES["foto"]["name"]);	

echo $nombre.'<br/>';
echo $size.'<br/>';
*/

?>