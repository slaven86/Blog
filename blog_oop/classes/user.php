<?php

class User extends QueryBuilder{
	
		public $register_result = NULL;
		public $logged_result = NULL;
	
	public function registerUser(){
		
		$name = $_POST['register_name'];
		$email = $_POST['register_email'];
		$password = $_POST['register_password'];
	
	$sql = "INSERT INTO users VALUES (NULL,?,?,?)";
	$query = $this->db->prepare($sql);
	$query->execute([$name,$email,$password]);
	
	if($query){
		$this->register_result = TRUE;
	}
	
}

	public function logUser(){
		
		$email = $_POST['login_email'];
		$password = $_POST['login_password'];
		
		$sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
		$query = $this->db->prepare($sql);
		$query->execute([$email,$password]);
		$logged_user = $query->fetch(PDO::FETCH_OBJ);
		
		if($logged_user){
			$_SESSION['logged_user'] = $logged_user;
			$this->logged_result = TRUE;
		}
	}
	
	public function getUserId($id){
		
		$sql = "SELECT * from users WHERE id = ?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		return  $query->fetch(PDO::FETCH_OBJ);
		
		
	}


}
?>