<?php
function conectar()
{
	mysql_connect("localhost", "root", "root");
	mysql_select_db("test");
}

function desconectar()
{
	mysql_close();
}
?>
