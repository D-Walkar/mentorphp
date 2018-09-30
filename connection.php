<?php 
 class connection{
 	protected $username;
 	protected $host;
 	protected $password;
 	protected $dbname;

 	public function db_connect($host,$dbname,$username,$password){
 		try{
 			$connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password); 			
 			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		return $connection;
 		}catch(PDOException $e){
 			 echo "Connection failed: " . $e->getMessage();
 		}
 	}
 }
?>