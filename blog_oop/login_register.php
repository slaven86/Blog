<?php 

require_once 'bootstrap.php';

if(isset($_SESSION['logged_user'])){
	header("location: index.php");
}

	if(isset($_POST['register_btn'])){
		$user->registerUser();
		
	}
	
	if(isset($_POST['login_btn'])){
		$user->logUser();
	}

require_once 'views/login_register_view.php'; 

?>


