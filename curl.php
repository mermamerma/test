<?php

$fp = curl_init("http://expedientes.mppre.gob.ve/archivos/14684937/14684937-1.pdf");
$ret = curl_setopt($fp, CURLOPT_RETURNTRANSFER, 1);
$ret = curl_setopt($fp, CURLOPT_TIMEOUT, 30);
$ret = curl_exec($fp);
$info = curl_getinfo($fp, CURLINFO_HTTP_CODE);
$type = curl_getinfo($fp, CURLINFO_CONTENT_TYPE);

curl_close($fp);
if($info == 404){
    echo "NO existe el Archivo :-(";
}else{
    echo "SI existe el Archivo y es del tipo: $type";
}  


?>
