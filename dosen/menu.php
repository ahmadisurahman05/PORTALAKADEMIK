<?php
include "../config/koneksi.php";

	$sql = mysql_query("SELECT * FROM modul_dosen WHERE aktif='Y' order BY urutan");

while ($m=mysql_fetch_array($sql)) {
	echo "<li><a href='$m[link]'>&#187; $m[nama_modul]</a></li>";
}
?>
	