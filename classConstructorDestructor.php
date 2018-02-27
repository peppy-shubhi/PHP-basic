<?php

	class Machine
	{
		function __construct()
		{
			echo "Starting up the machine...<br>";
		}
		
		function __destruct()
		{
			echo "shutting down machine...";
		}
	}
	
	$m= new Machine();  // triggers __construct
	
	unset($m); // triggers __destruct()
?>