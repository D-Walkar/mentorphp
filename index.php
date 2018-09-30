<?php 
	//header("Location:controller/indexController.php");
	include_once('controller/Login/loginController.php');
	$loginController = new loginController();
	$loginController->index();
?>