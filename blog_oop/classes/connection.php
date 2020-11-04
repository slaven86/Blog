<?php

class Connection{


	public static function connect (){

		try{
			
	return new PDO('mysql:host=localhost;dbname=blog','root','');
}
	catch(PDOException $e){
die ("Error " .$e->getMessage());
}

	}

}



?>