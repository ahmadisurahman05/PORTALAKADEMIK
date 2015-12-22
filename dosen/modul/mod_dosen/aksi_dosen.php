<?php
	if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Dosen
if ($module=='dosen' AND $act=='hapus') {
	mysql_query("DELETE FROM dosen WHERE kode_dosen='$_GET[id]'");
	header('location:../../../administrator/index.php?module='.$module);
}

// Input Dosen
elseif ($module=='dosen' AND $act=='input') {
$pass=md5($_POST['password']);
$tglhr = sprintf("%02d%02d%02d",$_POST['tahun'],$_POST['bulan'],$_POST['tanggal']);
mysql_query("INSERT INTO dosen(kode_dosen,nama_dosen,password,
								alamat,telpon,jenis_kelamin,tempat_lahir,tanggal_lahir,pendidikan)
			VALUES('$_POST[kode_dosen]',
					'$_POST[nama]',
					'$pass',
					'$_POST[alamat]',
					'$_POST[telpon]',
					'$_POST[jenis_kelamin]',
					'$_POST[tempat_lahir]',
					'$tglhr',
					'$_POST[pendidikan]')");
	header('location:../../../administrator/index.php?module='.$module);
}

// Update Dosen
elseif ($module=='dosen' AND $act=='update') {
$tglhr = sprintf("%02d%02d%02d",$_POST['tahun'],$_POST['bulan'],$_POST['tanggal']);
if (empty($_POST['password'])) {
	mysql_query("UPDATE dosen SET nama_dosen='$_POST[nama]',
								alamat='$_POST[alamat]',
								telpon='$_POST[telpon]',
								jenis_kelamin='$_POST[jenis_kelamin]',
								tempat_lahir='$_POST[tempat_lahir]',
								tanggal_lahir='$tglhr',
								pendidikan='$_POST[pendidikan]'
					WHERE kode_dosen='$_POST[id]'");
}
else {
	$pass=md5($_POST['password']);
	mysql_query("UPDATE dosen SET nama_dosen='$_POST[nama]',
								password='$pass',
								alamat='$_POST[alamat]',
								telpon='$_POST[telpon]',
								jenis_kelamin='$_POST[jenis_kelamin]',
								tempat_lahir='$_POST[tempat_lahir]',
								tanggal_lahir='$tglhr',
								pendidikan='$_POST[pendidikan]'
					WHERE kode_dosen='$_POST[id]'");	
}
	header('location:../../../dosen/index.php?module='.$module);
}
?>