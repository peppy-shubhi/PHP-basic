<?php

	class Mammal
	{
		public $age;
		
		function __construct()
		{
			echo "you are in class mammal <br>";
			echo "Creating new ".get_class($this)."<br>";
		}
		
		function getM()
		{
			return $this->age;
		}
		
		function setM($a)
		{
			$this->age = $a;
		}
		
		function grow()
		{
			$this->age = $this->age + 3;
		}
	}
	
	class Human extends Mammal
	{
		public $name;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function getH()
		{
			return $this->name;
		}
		
		function setH($n)
		{
			$this->name = $n;
		}
		
		function grow()
		{
			$this->age = $this->age + 1;
		}
	}
	
	$human = new Human();
	$human->name ="peter";
	$human->age = 1;
	
	echo "New human created ".$human->getH().". He is ".$human->getM()." years old...<br>";
	
	$human->grow();
	$human->grow();
	echo "New human created ".$human->getH().". He is ".$human->getM()." years old...<br>";
	
?>
		