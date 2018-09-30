<?php
	include_once('../../connection.php');
	$connection = new connection();
	$conn = $connection->db_connect("localhost","oracooli","root","");
	$email = $_POST['email_registration'];
	$username = $_POST['username'];
	$password = $_POST['registration_password'];
	$code=substr(md5(mt_rand()),0,15);
	

	$stmt = $conn->query("select * from user_registration where username = '".$username."' and email='".$email."'");
	if(!$stmt->fetch()){
		$sql = "insert into user_registration (username,email,password,code) values(?,?,?,?)";
		$stmt= $conn->prepare($sql);
		$result = $stmt->execute([$username, $email, $password,$code]);
		if($result){
			echo "hello";exit;
		}
	}
	
?>