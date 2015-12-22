<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Modul
if ($module=='kelas' AND $act=='hapus') {
mysql_query("DELETE FROM kelas WHERE kdkelas='$_GET[id]'");
header('location:../../../adminweb/index.php?module='.$module);
}

// Input Modul
if ($module=='kelas' AND $act=='input') {
mysql_query("INSERT INTO kelas(kdkelas,nmkelas,ruang)
						VALUES('$_POST[kdkelas]',
								'$_POST[nmkelas]',
								'$_POST[ruang]')");
header('location:../../../adminweb/index.php?module='.$module);
}

// Update Kelas
if ($module=='kelas' AND $act=='update') {
mysql_query("UPDATE kelas SET kdkelas='$_POST[kdkelas]',
							nmkelas='$_POST[nmkelas]',
							ruang='$_POST[ruang]'
							WHERE kdkelas='$_POST[id]'");
header('location:../../../adminweb/index.php?module='.$module);
}
?>


