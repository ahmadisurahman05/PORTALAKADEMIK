<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Materi Ajaran Baru
if ($module=='materibaru' AND $act=='hapus') {
	mysql_query("DELETE FROM materibaru WHERE id_materi='$_GET[id]'");
	header('location:../../../adminweb/index.php?module='.$module);
}

// Input Materi Ajaran Baru
if ($module=='materibaru' AND $act=='input') {
	$a = $_POST['semester'] % 2;
if ($a == 1) {
    $ket = "Ganjil";
} else {
    $ket = "Genap";
}
$hts=substr($_POST['tahun'],0,4);
mysql_query("INSERT INTO materibaru(kdmatkul,kdjur,tahun,kdkelas,semester,kode_dosen,ket)
							VALUES('$_POST[kdmatkul]',
									'$_POST[kdjur]',
									'$hts',
									'$_POST[kdkelas]',
									'$_POST[semester]',
									'$_POST[kode_dosen]',
									'$ket')");
header('location:../../../adminweb/index.php?module='.$module);
}
// Update Materi Ajaran Baru
if ($module=='materibaru' AND $act=='update') {

$a = $_POST['semester'] % 2;
if ($a == 1) {
    $ket = "Ganjil";
} else {
    $ket = "Genap";
}
mysql_query("UPDATE materibaru SET kdjur='$_POST[kdjur]',
									kdmatkul='$_POST[kdmatkul]',
									tahun='$_POST[tahun]',
									kdkelas='$_POST[kdkelas]',
									semester='$_POST[semester]',
									kode_dosen='$_POST[kode_dosen]',
									ket='$ket'
								WHERE id_materi='$_POST[id]'");
header('location:../../../adminweb/index.php?module='.$module);
}

?>
