<?php

	$aryPlaces= array("India"=> array(
										"Delhi",
										"UP"=> array(
														"Lucknow",
														"Noida"=> array("North Noida",
																		"South Noida"
																		),
														"Kanpur"
													)
									)
					);
					
	//Display the elements
	
	echo $aryPlaces["India"][0].'<br><hr>'; //Delhi
	echo $aryPlaces["India"]["UP"][1].'<br><hr>'; //Kanpur
	echo $aryPlaces["India"]["UP"]["Noida"][0].'<br><hr>'; //North Noida
	print_r($aryPlaces); //prints the entire array

?>