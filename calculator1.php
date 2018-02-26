<!--

	claculator.php
	
-->

<?php
	
	$values= 0;
	if(isset($_REQUEST['num1']))
	{
		$a= $_REQUEST['num1'];
	}
	else
	{
		$a= "";
	}
	if(isset($_REQUEST['num2']))
	{
		$b= $_REQUEST['num2'];
	}
	else
	{
		$b= "";
	}
	if(isset($_REQUEST['operation']))
	{
		$c= $_REQUEST['operation'];
	}
	else
	{
		$c= "+";
	}
	if(isset($_REQUEST['btnSubmit']))
	{	
		if($c== '+') $values=$a+$b;
		if($c== '-') $values=$a-$b;
		if($c== '*') $values=$a*$b;
		if($c== '/') $values=$a/$b;
		if($c== '//') $values=$a/$b;
		if($c=='%') $values=$a%$b;
	}
	if(isset($_REQUEST['btnReset']))
	{	$a="";
		$b="";
		$c="+";
		$values="";
	}
?>

<html>
<body style="background-color:cyan">
	<form>
		enter 1st num: <input type= "text" name="num1" value="<?php echo $a; ?>">
		<p> <br></p>
		enter 2nd num: <input type= "text" name="num2" value="<?php echo $b; ?>">
		<p> <br> </p>
		<p style='color:GG0000; font-size:20px; text-align:center;'>
		<select name="operation">
			<?php	
				
					echo "<option selected>$c</option>";
					echo "<option> + </option>";
					echo "<option> - </option>";
					echo "<option> * </option>";
					echo "<option> / </option>";
					echo "<option> // </option>";
					echo "<option> % </option>";
				
				
			?>
		</select>
		</p>
		<p style='color:FF0000; font-size:24px; text-align:center;'>
		ANSWER: = <input type="text" name= "txtTotal" value="<?php echo $values; ?>">
		<input type="submit" name= "btnSubmit" value = "CALCULATE">
		<input type="submit" name= "btnReset" value = "RESET">
		</p>
	</form>
<script>
function myFunction() {
    document.getElementById("abcd").innerHTML = "Arindam D. Modak";
}
</script>
<h1>My Web Page</h1>
<p id="abcd" style='color:green; font-size:15px;' >???????????</p>

<button type="button" onclick="myFunction()">Name</button><br>
</body>
</html>
