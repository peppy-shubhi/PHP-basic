<!--

	name= arrayFunctions.php
-->

<?php
	$aryNames= array("amit","sumit","gopal");
	$aryFruits= array("apple","banana","pears");
	$aryDevices= array("Calculator", "Computer");
	
	//Display the arrays
	
	print_r($aryNames);
	echo "<hr>";
	
	print_r($aryFruits);
	echo "<hr>";
	
	print_r($aryDevices);
	echo "<hr>";
	
	//Merge 2 arrays
	
	echo "<br> Merge array is : ";
	print_r(array_merge($aryNames,$aryFruits));
	echo "<hr>";
	
	// Combine 2 arrays
	
	echo "<br> Combined array is : <br>";
	print_r(array_combine($aryNames,$aryFruits));
	echo "<hr>";
	
	//Push an element in array
	array_push($aryDevices, "Mobile phone");
	print_r($aryDevices);
	echo "<hr>";
	
	//pop an element
	array_pop($aryDevices);
	print_r($aryDevices);
	echo "<hr>";
	
	//shift element to the left side, First element is removed
	array_shift($aryFruits);
	print_r($aryFruits);
	echo "<hr>";
	
	//unshift element from the array and adds an element at 1st position to the array
	array_unshift($aryFruits, "Orange");
	print_r($aryFruits);
	echo "<hr>";
	
	//Generate a range
	$aryR = range(1,5);
	foreach($aryR as $value)
	{
		echo $value."<br>";
	}
	echo "<hr>";
	
	//pick an element randomly from the array. It returns the index of the element
	echo array_rand($aryFruits);
	echo "<hr>";
?>