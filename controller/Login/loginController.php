<?php 
	include_once('model/Login/loginModel.php');
	class loginController{
		public function index(){
			$loginModel = new loginModel();
			$data = $loginModel->fetchData();
			include 'view/Login/login.php';
		}

		public function signUp(){
			$loginModel = new loginModel();
			$data = $loginModel->checkUser($username,$email);
			include 'view/Login/login.php';
		}
	}

?>