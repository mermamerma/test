<?php
#$cedula = 15165085 ;

function exist_remote_file($url) {
	$fp = curl_init($url);
	$ret = curl_setopt($fp, CURLOPT_RETURNTRANSFER, 1);
	$ret = curl_setopt($fp, CURLOPT_TIMEOUT, 30);
	$ret = curl_exec($fp);	
	$info = curl_getinfo($fp, CURLINFO_HTTP_CODE);
	curl_close($fp);
	if($info == '404')
		return false;
	
	else
		return true;
	
}

$cedula = 15165085 ;
$url = 'http://rrhh.mppre.gob.ve/fotos/'.$cedula.'.jpg';

$flag = exist_remote_file($url);
if ($flag)
	echo 'SI existe' ;
else 
	echo 'NO existe';

/*
$cedula = 14684937 ;
$url = 'http://rrhh.mppre.gob.ve/fotos/'.$cedula.'.jpg';
$fp = curl_init($url);
$ret = curl_setopt($fp, CURLOPT_RETURNTRANSFER, 1);
$ret = curl_setopt($fp, CURLOPT_TIMEOUT, 30);
$ret = curl_exec($fp);
$info = curl_getinfo($fp, CURLINFO_HTTP_CODE);
curl_close($fp);
if($info == '404'){
    $foto = "no existe";
	$img_url = "no-photo.jpg" ;
}else{
    $foto = "existe";
	$img_url = 'http://rrhh.mppre.gob.ve/fotos/'.$cedula ;
} 
echo '</br>'.$url ;
echo '</br>'.$fp ;
echo '</br>'.$info ;
echo '</br>'.$foto ;
echo "<img width='48' height='48' src='$img_url' alt=''>" ;
 * 
 */
?>
