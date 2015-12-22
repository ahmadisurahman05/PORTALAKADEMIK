<?php
session_start();
 if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
	include "../../../config/koneksi.php";

	$module=$_GET[module];
	$act=$_GET[act];

	// Hapus User

	if ($module=='user' AND $act=='hapus') {
		mysql_query("DELETE FROM users WHERE id_user='$_GET[id]'");
		header('location:../../../adminweb/index.php?module='.$module);
	}

	// Input User
	elseif ($module=='user' AND $act=='input') {
		$pass=md5($_POST[password]);
		mysql_query("INSERT INTO users(id_user,password,nama_lengkap,email,no_telp)
				VALUES
				('$_POST[username]','$pass','$_POST[nama_lengkap]','$_POST[email]','$_POST[no_telp]')");
		header('location:../../../adminweb/index.php?module='.$module);

	}

	// Update User
	elseif ($module=='user' AND $act=='update') {
	if (empty($_POST[password])) {
		mysql_query("UPDATE users SET id_user        = '$_POST[username]',
										nama_lengkap = '$_POST[nama_lengkap]',
										email        = '$_POST[email]',
										blokir       = '$_POST[blokir]',
										no_telp      = '$_POST[no_telp]'
					WHERE id_user = '$_POST[id]'");
	}
	else {
		$pass = md5($_POST[password]);
		mysql_query("UPDATE users SET id_user        = '$_POST[username]',
										password     = '$pass',
										nama_lengkap = '$_POST[nama_lengkap]',
										email        = '$_POST[email]',
										blokir       = '$_POST[blokir]',
										no_telp      = '$_POST[no_telp]'
								WHERE id_user        = '$_POST[id]'");
	}

		header('location:../../../adminweb/index.php?module='.$module);
	}
}
?>


	
