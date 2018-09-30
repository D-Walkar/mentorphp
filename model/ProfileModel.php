<?php  
	include_once('connection.php');
	class ProfileModel{
		public function getUserData($id){
			$connection = new connection();
			$conn = $connection->db_connect("localhost","oracooli","root","");
			$stmt = $conn->query("select * from user_profile where user_reg_id = ".$id);
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		/*public function checkUser(){
			$connection = new connection();
			$conn = $connection->db_connect("localhost","oracooli","root","");
			$stmt = $conn->query("select * from user_registration");
			return $stmt->fetch();
		}


		public function checkLogin($email){
			$connection = new connection();
			$conn = $connection->db_connect("localhost","oracooli","root","");
			$stmt = $conn->query("select * from user_registration where email = '".$email."'");
			return $stmt->fetch(PDO::FETCH_OBJ);
		}*/
	}
?>