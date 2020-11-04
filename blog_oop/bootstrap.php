<?php
session_start();

require_once 'classes/connection.php';

$db = Connection::connect();

require_once 'classes/queryBuilder.php';
require_once 'classes/user.php';
require_once 'classes/post.php';

$query = new QueryBuilder($db);
$user = new User($db);
$post = new Post($db);


?>