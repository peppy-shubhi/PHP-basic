<?php

	class Mammal
	{
		public $name;
		protected $age;
		private $species;
	}
	
	class Human extends Mammal
	{
		
	}
	
	$mammal = new Mammal();
	$mammal->name = "Magic";
	//$mammal->age = 5; //fatal error
	//$mammal->species = "whale"; //fatal error
	
	$baby = new Human();
	$baby->name = "Peter";
	//$baby->age = 5; //fatal error
	//$baby->species = "whale"; //fatal error

?>