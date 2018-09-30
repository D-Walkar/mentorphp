<?php  
	include_once('connection.php');
	class loginModel{
		public function fetchData(){
			$connection = new connection();
			$conn = $connection->db_connect("localhost","oracooli","root","");
			$stmt = $conn->query("select * from user_registration");
			return $stmt->fetch();
		}

		public function checkUser(){
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
		}
	}
?>