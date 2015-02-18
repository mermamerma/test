<?php

class MyClass {
	
	const CONST_VALUE = 'Mi Valor Constante';	
    
}

class  OtherClass extends MyClass {
	public static $my_static = 'Variable Estatica';
	
	public static function doubleColon() {
		echo parent::CONST_VALUE.'</br>' ;
		echo self::$my_static .'</br>' ;
	}
}


#echo MyClass::CONST_VALUE.'</br>';

OtherClass::doubleColon();

?>
