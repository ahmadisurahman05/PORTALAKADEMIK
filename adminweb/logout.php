<?php
	if (!isset($_SESSION)){
session_start();
}
	session_destroy();
	//echo "<center>Anda telah sukses keluar system <b>[LOGOUT]</b>";
	header('location:../index.php');
?>