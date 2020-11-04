<?php

class Post extends QueryBuilder {
	
	public $new_post_result = NULL;
	
	public function createPost(){
		
		$title = $_POST['post_title'];
		$description = $_POST['post_description'];
		$user_id = $_SESSION['logged_user']->id;
		$createdAt = date('Y-m-d');
		
		$sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
		$query = $this->db->prepare($sql);
		$query->execute([$title,$description,$user_id,$createdAt]);
		
		if($query){
			$this->new_post_result = TRUE;
		}
		
	}
	
	public function deletePost($id){
		
		$sql = "DELETE FROM posts WHERE id = ?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		
	}
}

?>