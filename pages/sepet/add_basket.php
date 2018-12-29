<?php
	if ($_POST['id'] and !empty($_POST['id']))
	{
		setcookie($_POST['id'], $_POST['id'], strtotime("+30 days"));
		header("location: total_basket.php"); 
	} else {
		header( "location: all_pro.php");
	}
?>