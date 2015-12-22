<?php
session_start();
include "../../../config/koneksi.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Jurusan

if ($module=='jurusan' AND $act=='hapus') {
	mysql_query("DELETE FROM jurusan WHERE kdjur='$_GET[id]'");
	header('location:../../../adminweb/index.php?module='.$module);
}

// Input Jurusan
elseif ($module=='jurusan' AND $act=='input') {
	
mysql_query("INSERT INTO jurusan(kdjur,kdfak,nmjur,nipketua,nmketua,almtjur)
	VALUES
	('$_POST[kdjur]','$_POST[kdfak]','$_POST[nmjur]','$_POST[nipketua]','$_POST[nmketua]','$_POST[almtjur]')");

	header('location:../../../adminweb/index.php?module='.$module);
}

// Update Jurusan
elseif ($module=='jurusan' AND $act=='update') {
	mysql_query("UPDATE jurusan SET kdjur='$_POST[kdjur]',
								kdfak='$_POST[kdfak]',
								nmjur='$_POST[nmjur]',
								nipketua='$_POST[nipketua]',
								nmketua='$_POST[nmketua]',
								almtjur='$_POST[almtjur]'
			WHERE kdjur='$_POST[id]'");
header('location:../../../adminweb/index.php?module='.$module);
}
?>

