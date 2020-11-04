<?php

require_once 'bootstrap.php';

if(isset($_GET['post_id']) && $_SESSION['logged_user']){
	$post->deletePost($_GET['post_id']);
}

$posts = $post->selectAll('posts');



require_once 'views/index.view.php';

?>