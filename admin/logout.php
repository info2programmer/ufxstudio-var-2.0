<?php
session_start();
	session_unset($_SESSION['AdminUser']);
	 header('Location:login.php');
	exit();

?>