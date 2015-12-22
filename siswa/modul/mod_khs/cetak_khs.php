<?php
//$aksi="modul/mod_krs/aksi_khs.php";
$act=@$_GET['act'];
switch($act) {
// Cari KHS
default:
$thn_skrg=date("Y");
echo "<h2>Cari Data KHS</h2>
<form method=POST action='modul/mod_khs/cetakkhs.php'>
<table>
	<tr>
		<td>NIM*</td>
		<td> : <input type=text name=nim size=18 maxlength=18 value='$_SESSION[namauser]'></td>
</tr>
<tr>
	<td>Tahun Ajaran</td>
	<td> : <select name=tahun>";
	for ($ta=2009; $ta<=$thn_skrg;$ta++) {
		$ts=$ta+1;
		echo "<option value=$ta selected>$ta/$ts</option>";
	}
	echo "</select>
	</td>
</tr>
<tr>
	<td>Semester</td>
	<td> : <select name=semester>";
		for ($sm=1; $sm<=8;$sm++) {
			echo "<option value=$sm>$sm</option>";
	}
	echo "</select>
	</td>
</tr>

<tr>
<td colspan=2><input type=submit value='Cari'></td>
</tr>
</table>
</form>";
break;
}
?>