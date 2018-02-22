<!--

	file name- listboxProcess.php
	list box in php with processing (drop down list)
	
-->
<?php
	$constant = 10;
	$total=0;
	
	if(isset($_REQUEST['1stvalues']))
	{
		$value= $_REQUEST['1stvalues'];
	}
	else
	{
		$value= "";
	}
	
	if(isset($_REQUEST['btnSubmit']))
	{
		$total= $constant * $value;
	}
?>

<html>
	<form>
	
		<select name="1stvalues">
			<?php	
				for($i=1;$i<=10;$i++)
				{
					if($value==$i)
						echo "<option selected> $i </option>";
					else
						echo "<option> $i </option>";
				}
			?>
		</select>
		*10 = <input type="text" name= "txtTotal" value="<?php echo $total; ?>">
		
		<input type='submit' name="btnSubmit" value = "Process Data">
	</form>
</html>	