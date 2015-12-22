<?php
session_start();
include "../../../config/koneksi.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Mata Kuliah
if ($module=='matakul' AND $act=='hapus') {
	mysql_query("DELETE FROM matakuliah WHERE kdmatkul='$_GET[id]'");
	header('location:../../../adminweb/index.php?module='.$module);
}

// Input Mata Kuliah
elseif ($module=='matakul' AND $act=='input') {
	mysql_query("INSERT INTO matakuliah(kdmatkul,nmmatkul,sks,jenis)
						VALUES('$_POST[kdmatkul]',
								'$_POST[nmmatkul]',
								'$_POST[sks]',
								'$_POST[jenis]')");
	header('location:../../../adminweb/index.php?module='.$module);
}

// Update Mata Kuliah
elseif ($module=='matakul' AND $act=='update') {
	mysql_query("UPDATE matakuliah SET kdmatkul='$_POST[kdmatkul]',
									nmmatkul='$_POST[nmmatkul]',
									sks='$_POST[sks]',
									jenis='$_POST[jenis]'
									WHERE kdmatkul='$_POST[id]'");
	header('location:../../../adminweb/index.php?module='.$module);
}
?>