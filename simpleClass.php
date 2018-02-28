<?php

	class Automobile
	{
		public $color;
		public $make;
		
		public function accelerate() 
		{
			echo "Acclereating the vehicle...<br>";
		}
		
		public function brake() 
		{
			echo "Slowing the vehicle...<br>";
		}
		
		public function turn() 
		{
			echo "Turning the vehicle...<br>";
		}
		
	}
	
	//Instanctiate the class
	
	$car = new Automobile();
	
	$car->color = "Red";
	$car->make = "Ford";
	
	$car->accelerate();
	$car->turn();
?>