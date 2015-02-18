<?php 
$conn = mysql_connect('10.11.11.9',"sit","51tr@ck3R"); 
$db = mysql_select_db('sit',$conn);
if ($conn and $db)
	echo 'me conecto';
else
	echo 'fallo la conexion';
?>
