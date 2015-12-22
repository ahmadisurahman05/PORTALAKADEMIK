<?php
	if (!isset($_SESSION)){
session_start();
}
function timer(){
	$time=10000;
	$_SESSION['timeout']=time()+$time;
}
function cek_login(){
	$timeout=$_SESSION['timeout'];
	if(time()<$timeout){
		timer();
		return true;
	}else{
		unset($_SESSION['timeout']);
		return false;
	}
}
?>
