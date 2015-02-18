<?php
	$usuarioldap='jesus.rodriguez937';
	$passwordldap='malito+-';
	
	//$pg_connect=pg_connect("host=localhost port=5432 dbname=asistencia user=postgres password=postgres");
	$resLDAP=ldap_connect("10.10.10.3");
	if ($resLDAP){
		ldap_set_option($resLDAP,LDAP_OPT_PROTOCOL_VERSION,3);
		$ldapbin=@ldap_bind($resLDAP,"uid=$usuarioldap,ou=people,dc=mppre,dc=gob,dc=ve", $passwordldap);
		
		if (!$ldapbin){
			$ldapbin=@ldap_bind($resLDAP,"uid=$usuarioldap,ou=people,dc=mre,dc=gob,dc=ve", $passwordldap);
		}
		
		if (!$ldapbin){
			
				echo "<script>alert('El usuario NO existe');</script>";
			
			
		}else{			
			//$pg_connect=pg_connect("host=localhost port=5432 dbname=asistencia user=postgres password=postgres");
			echo "<script>alert('El usuario SI existe');</script>";			
		}
		
	}

?>