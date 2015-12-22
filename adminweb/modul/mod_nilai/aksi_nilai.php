<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];


// Input Nilai
if ($module=='nilai' AND $act=='input') {
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
	$angkamutu=$_POST['angkamutu'.$i];
	
	mysql_query("update krs set nilai='$nilai',
				angkamutu='$angkamutu' WHERE nim='$nim' AND kdmatkul='$kdmatkul' AND kode_dosen ='$kode_dosen' AND tahun='$tahun' AND semester='$semester' AND kdkelas='$kdkelas' AND kdjur='$kdjur'") or die ("Query Error");		
		
	}

	header('location:../../../adminweb/index.php?module='.$module);
}

// Update Nilai
elseif ($module=='nilai' AND $act=='update') {
mysql_query("UPDATE krs SET nilai='$_POST[nilai]',
							angkamutu='$_POST[angkamutu]'
							WHERE id_krs='$_POST[id]'") or die ("Query Error");
header('location:../../../adminweb/index.php?module='.$module);
}
?>