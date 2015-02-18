<?php

function authenticateLDAP($username, $password){	
	$CONFIG['ldap_server'] = 'repldap2.mppre.gob.ve';
	$conLDAP = ldap_connect($CONFIG['ldap_server']);
    if ($conLDAP){
		ldap_set_option($conLDAP,LDAP_OPT_PROTOCOL_VERSION,3);
		$ldapbin=@ldap_bind($conLDAP,"uid=$username,ou=people,dc=mppre,dc=gob,dc=ve", $password);
		
		if (!$ldapbin){
			#$ldapbin=@ldap_bind($conLDAP,"uid=$username,ou=people,dc=mppre,dc=gob,dc=ve", $password);
			$ldapbin=@ldap_bind($conLDAP,"uid=$username,ou=people,dc=mppre,dc=gob,dc=ve", $password);
		}
		
		if (!$ldapbin){
			return FALSE;
		}
	}
	return TRUE;
}

$u = 'jesus.rodriguez937';
$p = 'malito+-';

$token = authenticateLDAP($u,$p)? 'Correcto ': 'Incorrecto ' ;

echo $token  ;

?>