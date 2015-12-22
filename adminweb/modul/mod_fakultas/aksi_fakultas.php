<?php
session_start();
include "../../../config/koneksi.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Fakultas

if ($module=='fakultas' AND $act=='hapus') {
	mysql_query("DELETE FROM fakultas WHERE kdfak='$_GET[id]'");
	header ('location:../../../adminweb/index.php?module='.$module);
}

// Input Fakultas
elseif ($module=='fakultas' AND $act=='input') {
mysql_query("INSERT INTO fakultas(kdfak,nmfak,nippimpinan,almtfak)
	VALUES
	('$_POST[kdfak]','$_POST[nmfak]','$_POST[nippimpinan]','$_POST[almtfak]')") or die ("Query Gagal");;
	header ('location:../../../adminweb/index.php?module='.$module);
}

// Update Fakultas
elseif ($module=='fakultas' AND $act=='update') {
	mysql_query("UPDATE fakultas SET kdfak='$_POST[kdfak]',
				nmfak='$_POST[nmfak]',
				nippimpinan='$_POST[nippimpinan]',
				almtfak='$_POST[almtfak]'
				WHERE kdfak='$_POST[id]'");
	header ('location:../../../adminweb/index.php?module='.$module);
}
?>

