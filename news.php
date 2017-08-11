<?php

require_once ('lib/controler.php');
require_once ('lib/view.php');
require_once ('lib/db_config.php');

global $con;
	$url=$_GET['getvalue'];
	$email=$_GET['email'];
	$query="INSERT INTO `tbl_newsletter`(`email`, `datetime`) VALUES ('".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,date('d-m-Y H:i'))."')";
	$result=$con->query($query);
	$url=$url."?statusNewsletter=true";
	if($result==true)
	{
		echo "<script>window.open('".$url."','_self')</script>";

	}
	else
	{
		echo "Some Problem ";
	}

?> 	