<!--
	File Name- inputFormRequestMethod.php
	backend php code to process the form
-->

<?php
	if(isset($_REQUEST['txtName']))
	{
		$name=$_REQUEST['txtName'];
	}
	else
	{
		$name="";
	}
	if(isset($_REQUEST['txtMobileNo']))
	{
		$mobileNo=$_REQUEST['txtMobileNo'];
	}
	else
	{
		$mobileNo="";
	}
	if(isset($_REQUEST['btnSubmit']))
	{
		echo "Hello ".$name."<br>";
		echo "your phone no. is ".$mobileNo;
	}
?>