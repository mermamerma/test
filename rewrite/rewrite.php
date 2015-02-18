<h2 align=center><?
if(isset($_GET['link']))
{
	if($_GET['link']==1)
		{echo"Enlace sin usar mod_rewrite";}
	elseif($_GET['link']==2)
		{echo"Felicitaciones!! Tu has usado mod_rewrite de Apache y funciona correctamente";}
	else
		{echo"Verifica el modulo mod_rewrite de tu Apache";}
}
?></h2>
<hr>
<head>
<title>Probar mod_rewrite en Apache Linux</title>
</head>
<body>
<h1>Probar mod_rewrite en Apache Linux</h1>
<p><a href="rewrite.php?link=1">Enlace uno </a> = rewrite.php?link=1</p>
<p><a href="link2.html">Enlace 2</a> = link2.html</p>
<ul>
	<li>Prueba el enlace uno</li>
	<li>Luego prueba el enlace dos</li>
	<li>Si con el enlace dos te sale que la página no fue encontrada
	entonces no tienes activado los .htaccess del apache o no funciona el
	mod_rewrite</li>
</ul>
</body>
</html>
