<?php

	class Automobile
	{
		public $color;
		public $speed= 55;
		
		public function accelerate() 
		{
			$this->speed = $this->speed + 10;
			echo "Acclereating the vehicle... New speed is".$this->speed."<br>";
		}
		
		public function brake() 
		{
			$this->speed = $this->speed - 10;
			echo "Slowing the vehicle... New speed is".$this->speed."<br>";
		
		}
		
		public function turn() 
		{
			$this->brake();
			echo "Turning the vehicle...<br>";
			$this->accelerate();
		}
		
	}
	
	//Instanctiate the class
	
	$car = new Automobile();
	
	$car->accelerate();
	
	$car->turn();
?>