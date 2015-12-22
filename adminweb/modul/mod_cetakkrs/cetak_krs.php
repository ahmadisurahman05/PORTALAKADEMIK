<?php
$aksi="modul/mod_krs/aksi_krs.php";
$act=@$_GET['act'];
switch($act) {
	// Cari KRS
	default:
	$thn_skrg=date("Y");
echo "<h2>Cari Kartu Rencana Studi Mahasiswa</h2>
<form method=POST action='modul/mod_cetakkrs/cetakkrs.php'>
<table>
	<tr>
		<td>NIM*</td>
		<td> : <select name=nim>"; 
		$sql=mysql_query("SELECT * FROM mahasiswa order by nim");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value='$data[nim]'>$data[nim]</option>";
			
		}
	echo "</select></td>
</tr>
<tr>
	<td>Tahun Ajaran</td>
	<td> : <select name=tahun>";
	for ($ta=1980; $ta<=$thn_skrg;$ta++) {
		$ts=$ta+1;
		echo "<option value=$ta selected>$ta/$ts</option>";
	}
	echo "</select>
	</td>
</tr>
<tr>
	<td>Semester</td>
	<td> : <select name=semester>
		<option value='Ganjil' selected>Ganjil</option>
		<option value='Genap'>Genap</option>
		</select>
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