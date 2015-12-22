<?php
include "config/koneksi.php";

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = anti_injection($_POST['id_user']);
$pass     = anti_injection(md5($_POST['password']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo "Sekarang loginnya tidak bisa di injeksi lho.";
}
else {

	if (trim($_POST['jenis_user'])=='pegawai') {

		//$pass=md5($_POST[password]);
		$login = mysql_query("SELECT * FROM users WHERE id_user='$username' AND password='$pass' AND blokir='N'");
		$ketemu=mysql_num_rows($login);
		$r=mysql_fetch_array($login);

	// Apabila username dan password ditemukan
		if ($ketemu > 0) {
			session_start();
			("namauser");
			("namalengkap");
			("passuser");
			("leveluser");
		
			$_SESSION['namauser']    = $r['id_user'];
			$_SESSION['namalengkap'] = $r['nama_lengkap'];
			$_SESSION['passuser']    = $r['password'];
			$_SESSION['leveluser']   = $r['level'];
		
			header('location:adminweb/index.php?module=home');
		}
		else
		{
			echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
			echo "<center>LOGIN GAGAL! <br>
				Username atau Password Anda tidak benar.<br>
				Atau Account Anda sedang diblokir.<br>";
			echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
		}
	}

	if (trim($_POST['jenis_user'])=='dosen') {
		//$pass=md5($_POST[password]);
		$login = mysql_query("SELECT * FROM dosen WHERE kode_dosen='$username' AND password='$pass'");
		$ketemu=mysql_num_rows($login);
		$r=mysql_fetch_array($login);

	// Apabila username dan password ditemukan
		if ($ketemu > 0) {
			session_start();
			("namauser");
			("namalengkap");
			("passuser");
		//session_register("leveluser");
		
			$_SESSION['namauser']    = $r['kode_dosen'];
			$_SESSION['namalengkap'] = $r['nama_dosen'];
			$_SESSION['passuser']    = $r['password'];
		//$_SESSION[leveluser]   = $r[level];
		
			header('location:dosen/index.php?module=home');
		}
		else
		{
			echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
			echo "<center>LOGIN GAGAL! <br>
				Username atau Password Anda tidak benar.<br>
				Atau Account Anda sedang diblokir.<br>";
			echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
		}
	}

	if (trim($_POST['jenis_user'])=='mahasiswa') {
		$pass=md5($_POST['password']);
		$login = mysql_query("SELECT * FROM mahasiswa WHERE nim='$username' AND password='$pass'");
		$ketemu=mysql_num_rows($login);
		$r=mysql_fetch_array($login);

	// Apabila username dan password ditemukan
		if ($ketemu > 0) {
			session_start();
			("namauser");
			("namalengkap");
			("passuser");
		//session_register("leveluser");
		
			$_SESSION['namauser']    = $r['nim'];
			$_SESSION['namalengkap'] = $r['nama'];
			$_SESSION['passuser']    = $r['password'];
		//$_SESSION[leveluser]   = $r[level];
		
			header('location:siswa/index.php?module=home');
		}
		else
		{
			echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
			echo "<center>LOGIN GAGAL! <br>
				Username atau Password Anda tidak benar.<br>
				Atau Account Anda sedang diblokir.<br>";
			echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
		}
	}
}
?>