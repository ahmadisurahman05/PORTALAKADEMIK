<?php
	if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus KRS
if ($module=='krs' AND $act=='hapus') {
mysql_query("DELETE FROM krs WHERE id_krs='$_GET[id]'");
header('location:../../../administrator/index.php?module='.$module);
}

// Input KRS
elseif ($module=='krs' AND $act=='input') {
	$nim=$_POST['nim'];
$kdjur=$_POST['kdjur'];
$tahun=$_POST['tahun'];
$jummk=$_POST['jummk'];

for ($i=1;$i<=$jummk;$i++) {
	$kdmk=$_POST['kdmk'.$i];
	$kk=$_POST['kk'.$i];
	$sms=$_POST['sms'.$i];
		$a = $sms % 2;
	if ($a == 1) {
    $ket = "Ganjil";
	}
	else {
  $ket = "Genap";
}
	if (!empty($kdmk))
	{
		$cari=mysql_query("SELECT * FROM krs WHERE nim='$nim' AND kdmatkul='$kdmk' AND tahun='$tahun' AND ket='$ket'");
		$temu=mysql_num_rows($cari);
		if ($temu <= 0) {
			mysql_query("INSERT INTO krs(nim,kdjur,tahun,kdmatkul,kdkelas,semester,ket) VALUES('$nim','$kdjur','$tahun','$kdmk','$kk','$sms','$ket')");
		}
		else {
			echo "<p>Data Sudah Ada</p>";
		}
	}
}
header('location:../../../administrator/index.php?module='.$module);
}

// Update KRS
elseif ($module=='krs' AND $act=='update') {
mysql_query("UPDATE krs SET nim='$_POST[nim]',
									tahun='$_POST[tahun]',
									semester='$_POST[semester]',
									kdjur='$_POST[kdjur]',
									kdmatkul='$_POST[kdmatkul]',
									kdkelas='$_POST[kdkelas]'
								WHERE id_krs='$_POST[id]'");
header('location:../../../administrator/index.php?module='.$module);
}
?>