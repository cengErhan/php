<?php 
	if (isset($_POST['id']) and !empty($_POST['id'])) {
		setcookie($_POST['id'], "", strtotime("-30 days"));	
	}
	header("location: total_basket.php");
?>