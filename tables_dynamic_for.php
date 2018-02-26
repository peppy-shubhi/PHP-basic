<!--

	file name - forLoopDynamic.php
	for loop dynamic table
-->

<html>
	<form>
		enter num: <input type="text" name="txtnumber">
		<input type="submit" name="btnsubmit" value="Show Table">
	</form>
</html>

<?php

	if(isset($_REQUEST['txtnumber']))
	{
		$number=$_REQUEST['txtnumber'];
	}
	else
	{
		$number="";
	}
	
	if(isset($_REQUEST['btnsubmit']))
	{
		echo "<p style='color:FF0000; font-size:36px; text-align:center;'>";
		for($i=1;$i<=10;$i++)
		{
			echo ($number*$i).'<br>';
		}
		echo "</p>";
	}
	
?>