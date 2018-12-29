<?php
	foreach ( $_COOKIE as $key => $value) {
		echo $_COOKIE[$key]
		. '<form action="del_pro.php" method="post">
				<input type="hidden" name="id" value="'.$_COOKIE[$key].'">
				<input type="submit" value="sil : '. $_COOKIE[$key] .'">
			</form><br>
		' ;	
	 }
?>

