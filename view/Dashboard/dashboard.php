<?php session_start();?>
<?php if(!isset($_SESSION['user_data']['id'])){
	echo "some issues with login";
}
?>
<p>Hello welcome to oracooli</p>
<a href="logout">logout</a>