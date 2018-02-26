<!--
	array1D.php
	
-->

<?php

	$aryQual=array("BA","MA","MBA","BTECH");
	if(isset($_REQUEST['lstQual']))
	{
		$qual= $_REQUEST['lstQual'];
	}
	else
	{
		$qual= "";
	}
	if(isset($_REQUEST['btnSubmit']))
	{
		echo "Hello! Your Qualification is : ".$qual;
	}
?>

<html>
	<form>
		<select name="lstQual">
			<?php
				foreach($aryQual as $tmpvar)
				{
					echo "<option>$tmpvar</option>";
				}
			?>
			<input type="submit" name="btnSubmit" value="Show Qualification">
	</form>
</html>
					