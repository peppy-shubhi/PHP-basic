<!--

	file name- switch_day_number.php
	printing day no. of the day inputted by user using SWITCH statement
	
-->

<?php

	if(isset($_REQUEST['txtDayName']))
	{
		$dayName= strtolower($_REQUEST['txtDayName']);
	}
	else
	{
		$dayName= "";
	}
	
	if(isset($_REQUEST['btnSubmit']))
	{
		switch($dayName)
		{
			case "sunday":
				echo "today is 1st day";
				break;
			case "monday":
				echo "today is 2nd day";
				break;
			case "tuesday":
				echo "today is 3rd day";
				break;
			case "wednesday":
				echo "today is 4th day";
				break;
			case "thursday":
				echo "today is 5th day";
				break;
			case "friday":
				echo "today is 6th day";
				break;
			case "saturday":
				echo "today is 7th day";
				break;
			default:
				echo "invalid date entered";
		}
	}
?>

<html>
	<form>
		Enter day: <input type="text" name="txtDayName">
		<input type="submit" name="btnSubmit" value= "Show Day Number">
	</form>
<html>
