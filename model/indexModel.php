<?php  
	include_once('connection.php');
	class indexModel{
		public function fetchData(){
			$connection = new connection();
			$conn = $connection->db_connect("localhost","oracooli","root","");
			$stmt = $conn->query("select * from user_registration");
			return $stmt->fetch();
		}
	}
?>