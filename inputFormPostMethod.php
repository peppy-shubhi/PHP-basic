<!--
	File Name- inputFormPostMethod.php
	backend php code to process the form
-->

<?php
	if(isset($_POST['txtName']))
	{
		$name=$_POST['txtName'];
	}
	else
	{
		$name="";
	}
	if(isset($_POST['txtMobileNo']))
	{
		$mobileNo=$_POST['txtMobileNo'];
	}
	else
	{
		$mobileNo="";
	}
	if(isset($_POST['btnSubmit']))
	{
		echo "Hello ".$name."<br>";
		echo "your phone no. is ".$mobileNo;
	}
?>