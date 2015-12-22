<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Dosen Ajar
if ($module=='dosenmengajar' AND $act=='hapus') {
	mysql_query("DELETE FROM dosemengajar WHERE id_mengajar='$_GET[id]'");
	header ('location:../../../adminweb/index.php?module='.$module);
}

// Input Dosen Mengajar
elseif ($module=='dosenmengajar' AND $act=='inputdosenajar') {
$sql=mysql_query("SELECT * FROM materibaru where kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]' AND semester='$_POST[semester]'");
$r=mysql_fetch_array($sql);
$ketemu=mysql_num_rows($sql);
if ($ketemu > 0) {
	$sql2=mysql_query("SELECT * FROM dosemengajar where kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]' AND kdjur='$_POST[kodejur]' AND semester='$_POST[semester]'");
	$temu=mysql_num_rows($sql2);
	if ($temu>0) {
		echo "<p>Data Sudah Ada</p>";
	}
	else {
	mysql_query("INSERT INTO dosemengajar(kode_dosen,kdmatkul,semester,kdjur,tahun) 
			VALUES('$_POST[kode_dosen]',
					'$_POST[kdmatkul]',
					'$_POST[semester]',
					'$_POST[kodejur]',
					'$_POST[tahun]')");
	
	mysql_query("UPDATE materibaru SET kode_dosen='$_POST[kode_dosen]' WHERE kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]' AND semester='$_POST[semester]' AND kdjur='$_POST[kodejur]'");
	header ('location:../../../adminweb/index.php?module='.$module);
	}
	


}
else {
	echo "<br><br><p>Mata Kuliah belum terdaftar di Kurikulum baru</p>";
}
}
// Update Dosen Mengajar
elseif ($module=='dosenmengajar' AND $act=='update') {
mysql_query("UPDATE dosemengajar SET kdmatkul='$_POST[kdmatkul]'
								WHERE id_mengajar='$_POST[id]'");
header('location:../../../adminweb/index.php?module='.$module);
}

?>

