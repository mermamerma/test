<?php
 
//Directorio donde se va almacenar la img o archivo.
#$upload_dir = "/var/www";
$upload_dir = "/var/www/test/foto";
if (isset($_POST['fileframe'])){
   $result = 'ERROR';
 
if (isset($_FILES['file'])){
if ($_FILES['file']['error'] == UPLOAD_ERR_OK){
 
//Obteniendo el nombre del archivo
$filename = $_FILES['file']['name'];
 
//Moviendo el archivo al directorio indicado arriba
move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir.'/'.$filename);
 
//Cambiando el status del result
$result = 'OK';
}
}
 
echo '<html><head><title>-</title></head><body>';
echo "<script language='JavaScript' type='text/javascript'> \n";
echo 'var Doc = window.parent.document;';
 
if ($result == 'OK'){
   //Asignando los valores a los distintos input
   echo 'Doc.getElementById("upload_status").value = "El Archivo ha sido cargado...";';
   echo 'Doc.getElementById("filenamei").value = "'.$filename.'";';
   echo 'Doc.getElementById("img").src="'.$filename.'";';
}
else{
   echo 'Doc.getElementById("upload_status").value = "ERROR al Subir Archivo";';
}
 
echo "\n".'</script></body></html>';
 
exit();
}


?>
