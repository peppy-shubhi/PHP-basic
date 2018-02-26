<?php
	$aryCountries= array("India"=>"New Delhi", "Nepal"=> "Kathmandu", "Sri lanka"=> "Colombo");
	if(isset($_REQUEST['lstCountries']))
	{
		$index=$_REQUEST['lstCountries'];
	}
	else
	{
		$index= "";
	}
	if(isset($_REQUEST['btnSubmit']))
	{
		echo "Capital: ".$aryCountries[$index];
	}
?>

<html>
	<form>
		<select name="lstCountries">
			<?php
				foreach($aryCountries as $key=>$value)
				{
					if($index==$key)
						echo "<option selected>$key</option>";
					else
						echo "<option>$key</option>";
				}
			?>
		<input type="submit" name="btnSubmit" value="Show Capital">
	</form>
<html>