<?php 
	include_once('model/indexModel.php');
	class indexController{
		public function index(){
			$indexModel = new indexModel();
			$data = $indexModel->fetchData();
			print_r($data);exit;
			include 'view/index.php';
		}
	}

?>