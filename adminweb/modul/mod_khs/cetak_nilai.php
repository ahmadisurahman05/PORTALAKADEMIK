<?php
$aksi="modul/mod_krs/aksi_krs.php";
switch(@$_GET['act']) {
	// Cari Data Nilai
	default:
	$thn_skrg=date("Y");
echo "<h2>Cari Data Nilai</h2>
<form method=POST action='modul/mod_cetaknilai/cetaknilai.php'>
<table>
	<tr>
		<td>NIM*</td>
		<td> : <input type=text name=nim size=18 maxlength=18 ></td>
</tr>
<td colspan=2><input type=submit value='Cari'></td>
</tr>
</table>
</form>";
break;
}

?>