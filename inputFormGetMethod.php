<!--
	File Name- inputFormGetMethod.php
	backend php code to process the form
-->

<?php
	if(isset($_GET['txtName']))
	{
		$name=$_GET['txtName'];
	}
	else
	{
		$name="";
	}
	if(isset($_GET['txtMobileNo']))
	{
		$mobileNo=$_GET['txtMobileNo'];
	}
	else
	{
		$mobileNo="";
	}
	if(isset($_GET['btnSubmit']))
	{
		echo "Hello ".$name."<br>";
		echo "your phone no. is ".$mobileNo;
	}
?>
