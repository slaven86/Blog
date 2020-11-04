<?php

require_once 'bootstrap.php';

if (!isset($_SESSION['logged_user'])){
	
	header('Location:login_register.php');
}

if(isset($_POST['btn_post_sbm'])){
	$post->createPost();
}

require_once 'views/add_post_view.php';

?>