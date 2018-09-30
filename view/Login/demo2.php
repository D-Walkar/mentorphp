<?php
	session_start();
	$location = "oracooli";
	include_once('../../connection.php');
	$connection = new connection();
	$conn = $connection->db_connect("localhost","oracooli","root","");
	
	$email = $_POST['email_login'];
	$password = $_POST['Password'];

	$code=substr(md5(mt_rand()),0,15);
	$stmt = $conn->query("select * from user_registration where email = '".$email."' and password='".$password."'");
	if($stmt->rowCount() == 1){
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$_SESSION['user_data'] = array("id" => $data->id,"username" => $data->username,"email" => $data->email);
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] ."/".$location."/view/Dashboard/dashboard.php");
	}else{
		session_unset();
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] ."/".$location);
	}

?>