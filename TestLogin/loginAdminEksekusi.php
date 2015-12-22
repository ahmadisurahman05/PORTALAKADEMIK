<?php

require_once 'cek_login.php';

class loginEksekusi{
public $username = "select * from admin where login";
public $password = "select * from admin where passwd";

	function __construct($username, $password){

		$this->username = $username;
		$this->password = $password;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}
}


?>
