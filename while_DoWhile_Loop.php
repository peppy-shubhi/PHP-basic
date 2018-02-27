<!--
	File name- while_DoWhile_Loop.php
	using while and do while loop
-->

<?php
	
	$i=0;
	while($i<=10){
		echo $i."<br>";
		$i++;
	}
	echo "<br>";
	do{
		echo $i."<br>";
		$i--;
	}while($i>=0);
?>