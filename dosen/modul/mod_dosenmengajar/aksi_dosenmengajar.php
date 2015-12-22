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
	header ('location:../../../administrator/index.php?module='.$module);
}

// Input Dosen Mengajar
elseif ($module=='dosenmengajar' AND $act=='inputdosenajar') {
$sql=mysql_query("SELECT * FROM krs where kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]' AND ket='$_POST[semester]'");
$r=mysql_fetch_array($sql);
$ketemu=mysql_num_rows($sql);
if ($ketemu > 0) {
	$sql2=mysql_query("SELECT * FROM dosemengajar where kode_dosen='$_POST[kode_dosen]' AND kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]'");
	$temu=mysql_num_rows($sql2);
	if ($temu>0) {
		echo "<p>Data Sudah Ada</p>";
	}
	else {
	mysql_query("INSERT INTO dosemengajar(kode_dosen,kdmatkul,kdkelas,tahun) 
			VALUES('$_POST[kode_dosen]',
					'$_POST[kdmatkul]',
					'$_POST[kdkelas]',
					'$_POST[tahun]')");
	
	mysql_query("UPDATE krs SET kode_dosen='$_POST[kode_dosen]' WHERE kdmatkul='$_POST[kdmatkul]' AND tahun='$_POST[tahun]' AND ket='$_POST[semester]'");
	}
	header ('location:../../../administrator/index.php?module='.$module);


}
else {
	echo "<br><br><p>Mata Kuliah belum terdaftar pada ajaran baru / pengambilan Mata Kuliah</p>";
}
}
?>

