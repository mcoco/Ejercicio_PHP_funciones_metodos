<?php
class vehiculo{
	//propiedades (variables)
	var $combustible;
	var $velocidad;
	var $tamano;
	var $estado;
	
	//Función constructora
	function vehiculo(){
		this->combustible=100;
		this->velocidad=50;
		this->tamano=25;
		this->estado="intacto";
		echo "vehículo creado";
	}

	//Métodos (funciones)
	function gastar(){
		this->combustible=this->combustible-10;
		if(this->combustible<=0)
			{echo "Sin combustible";}
	}
		function repostar(){
			this->combustible=100;
			echo "vehículo repostado";
		}
	
}

//Código principal. Creo un coche intacto:
$coche1 = new vehiculo("intacto");
$coche1->gastar();
$coche1->repostar();

$coche2 = new vehiculo("usado");
$coche2->gastar();

?>