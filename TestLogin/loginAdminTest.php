<?php

	require_once 'loginAdminEksekusi.php';

	class loginTest extends PHPUnit_Framework_TestCase{
		public $test;
		function setUp(){
			$this->test = new loginEksekusi("admin", "admin");
		}
		public function testLogin(){
			$usernameAdmin = $this->test->getUsername();
			$this->assertTrue($usernameAdmin == "admin");

			$passwordAdmin = $this->test->getPassword();
			$this->assertTrue($passwordAdmin == "admin");
		}
	}
?>