<?php
include "../config/koneksi.php";

if ($_SESSION['leveluser']=='admin') {
	$sql = mysql_query("SELECT * FROM modul WHERE aktif='Y' order BY urutan");
}
else {
	$sql = mysql_query("SELECT * FROM modul WHERE status='user' and aktif='Y' order by urutan");
}

while ($m=mysql_fetch_array($sql)) {
	echo "<li><a href='$m[link]'>&#187; $m[nama_modul]</a></li>";
}
?>
	