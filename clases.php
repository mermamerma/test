<?php
class  Carro {
	var $marca  = '';
	var $modelo = '';
	var $anio  = 0;
	var $color='';
	
	function Carro ($ma, $mo, $an,$cl ) {
		$this->marca = $ma;
		$this->modelo = $mo;
		$this->anio = $an;
		$this->color=$cl;
		echo 'Carro Creado</br>';
		
	}

	function setColor($cl){
		$this->color=$cl;
	}
	
	function arranque(){
		echo "arrancando </br>";	
	}
	
	function getDetalles() {
		$detalle = "Marca: ".$this->marca.'</br>';
		$detalle .= "Modelo: ".$this->modelo.'</br>';
		$detalle .= "Año: ".$this->anio.'</br>';
	    $detalle .= "Color: ".$this->color.'</br>';
		echo $detalle;
	}
	function apagando(){
		echo 'Apagando el Carro';
	}
	
}

$mi_carrito = new Carro('Chevrolet', 'Aveo', 97,'negro');
$mi_carrito->getDetalles();
$mi_carrito->setColor('rojo');
$mi_carrito->getDetalles();
$mi_carrito->arranque();
$mi_carrito->apagando();
echo '<hr>';
$otro_carrito = new Carro('Toyota', 'Machito', 98,'Gris');
$otro_carrito->getDetalles();