<HTML>
<HEAD>
<TITLE>Binario a BD</TITLE>
</HEAD>
<BODY>
<?php
if (isset($_GET['proceso'])){
echo $_GET['proceso']."<br>";
}
?>
<FORM enctype="multipart/form-data" method="post" action="insertar.php">
Archivo: <INPUT type="file" name="foto" size="30">
<INPUT type="submit" name="submit" value="Subir archivo">
</FORM>
</BODY>
</HTML>