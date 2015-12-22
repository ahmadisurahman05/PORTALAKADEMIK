<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Nilai
if ($module=='nilai' AND $act=='hapus') {
mysql_query("DELETE FROM nilai WHERE id_nilai='$_GET[id]'");
header('location:../../../administrator/index.php?module='.$module);
}

// Input Nilai
elseif ($module=='nilai' AND $act=='input') {
$kdmatkul=$_POST['kdmatkul'];
$kdjur=$_POST['kdjur'];
$tahun=$_POST['tahun'];
$semester=$_POST['semester'];
$kdkelas=$_POST['kdkelas'];
$kode_dosen=$_POST['kode_dosen'];

$jummk=$_POST['jummk'];

for ($i=1;$i<=$jummk;$i++) {
	$nim=$_POST['nim'.$i];
	$nilai=$_POST['nilai'.$i];
	$a = $semester % 2;
	if ($a == 1) {
    	$ket = "Ganjil";
	}
	else {
  		$ket = "Genap";
	}

		$cari=mysql_query("SELECT * FROM krs WHERE nim='$nim' AND kdmatkul='$kdmk' AND tahun='$tahun' AND ket='$ket'");
		$temu=mysql_num_rows($cari);
		if ($temu <= 0) {
			mysql_query("INSERT INTO nilai(nim,kdjur,tahun,kdmatkul,kdkelas,semester,ket,kode_dosen,nilai) VALUES('$nim','$kdjur','$tahun','$kdmatkul','$kdkelas','$semester','$ket','$kode_dosen','$nilai')");
		
		}
}

header('location:../../../administrator/index.php?module='.$module);
}

// Update Nilai
elseif ($module=='nilai' AND $act=='update') {
mysql_query("UPDATE nilai SET nim='$_POST[nim]',
									tahun='$_POST[tahun]',
									semester='$_POST[semester]',
									kdjur='$_POST[kdjur]',
									kdmatkul='$_POST[kdmatkul]',
									kdkelas='$_POST[kdkelas]',
									nilai='$_POST[nilai]'
								WHERE id_nilai='$_POST[id]'");
header('location:../../../administrator/index.php?module='.$module);
}
?>