<?php
	$db = @new mysqli("localhost","root",""); 
	if ( $db->connect_errno) die(" Baglantı Hatası : ". $db -> connect_error); 
	$sql = $db -> prepare ("CREATE DATABASE IF NOT EXISTS users");
	if($sql === false ) die ("1.Sorgu Hatası : ". $db-> error);
	$sql->execute();
	$db -> query ("USE users");
	$sorgu = "CREATE TABLE IF NOT EXISTS `users`.`login` (
		 `id` INT(200) NOT NULL AUTO_INCREMENT ,
		 `email` VARCHAR(200) NOT NULL ,
	 	 `pass` VARCHAR(200) NOT NULL , 
	 	 PRIMARY KEY (`id`)) ENGINE = InnoDB DEFAULT CHARSET=UTF8;" ;

	$sql = $db->prepare($sorgu);
	if( $sql === false) die("2.Sorgu Hatası : ". $db -> error); 
	$sql->execute(); 

	if(!empty($_POST['email']) and !empty($_POST['pass'])){ 

		$sorgu = "INSERT INTO login(email,pass) VALUES(?,?)";
		$sql = $db -> prepare($sorgu) ;
		$sql->bind_param("ss", $_POST['email'], $_POST['pass']);
		if( $sql === false ) die("ekleme sorgusu hatalı :" . $db -> error);
		$sql -> execute();
		setcookie("email" ,strip_tags($_POST['email']));
		setcookie("pass" ,strip_tags($_POST['pass']));
		header("location: app.php");

	}else { 
		echo ' 
			<form method="post">
				<input type="email" name="email" placeholder="Your Email : "> <br>
				<input type="password" name="pass" placeholder="Your Password : " > <br>
				<input type="submit" value="LOGIN"> <br>
			</form> <br>
			' ;
			}
?> 