<?php	
	#session_name("prestacion");
	#session_start();
	
	#$usuarioldap=$_POST['usuario'];
	#$passwordldap=$_POST['password'];

	$usuarioldap='jesus.rodriguez937';
	$passwordldap='malito+-';
	
	//$pg_connect=pg_connect("host=localhost port=5432 dbname=asistencia user=postgres password=postgres");
	#include '../../conexion.php';	

	$resLDAP=ldap_connect("10.10.10.3");
	if ($resLDAP){
		ldap_set_option($resLDAP,LDAP_OPT_PROTOCOL_VERSION,3);
		$ldapbin=@ldap_bind($resLDAP,"uid=$usuarioldap,ou=people,dc=mppre,dc=gob,dc=ve", $passwordldap);
		
		if (!$ldapbin){
			$ldapbin=@ldap_bind($resLDAP,"uid=$usuarioldap,ou=people,dc=mre,dc=gob,dc=ve", $passwordldap);
		}
		
		if (!$ldapbin){
			
				echo "alert(\"El usuario NO existe\")";
			
			
		}else{			
			//$pg_connect=pg_connect("host=localhost port=5432 dbname=asistencia user=postgres password=postgres");
			
					#$_SESSION['usuario']=$usuarioldap;					
					#echo "window.location.href='../../index.php'";
					echo "alert(\"El usuario SI existe\")";
			
		}
		
	}

	
?>
