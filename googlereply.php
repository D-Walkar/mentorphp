<?php 
require_once('settings.php');
require_once('google-login-api.php');
require_once('model/Login/loginModel.php');
$location = "oracooli";
session_start();
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

		// Access Tokem
		$access_token = $data['access_token'];
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($access_token);

		//echo '<pre>';print_r($user_info); echo '</pre>';

		$email = $user_info['emails'][0]['value'];

		$login = new loginModel();
		$login_data = $login->checkLogin($email);
		if($login_data){
			$_SESSION['user_data'] = array("id" => $login_data->id,"username" => $login_data->username,"email" => $login_data->email);
			header("Location: " . "http://" . $_SERVER['HTTP_HOST'] ."/".$location."/view/Dashboard/dashboard.php");
		}else{
			echo "Account with email ".$email." does not exist";exit;
		}
		

		// Now that the user is logged in you may want to start some session variables
		//$_SESSION['logged_in'] = 1;

		// You may now want to redirect the user to the home page of your website
		// header('Location: home.php');
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
?>