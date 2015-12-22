<?php
//$aksi="modul/mod_krs/aksi_krs.php";
$act=@$_GET['act'];
switch($act) {
	// Cari Data Nilai
	default:
	$thn_skrg=date("Y");
echo "<h2>Cari Data Nilai</h2>
<form method=POST action='modul/mod_cetaknilai/cetaknilai.php'>
<table>
	<tr>
		<td>Nomor Induk Mahasiswa*</td>
		<td> : <select name=nim>"; 
		$sql=mysql_query("SELECT * FROM mahasiswa order by nim");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value='$data[nim]'>$data[nim]</option>";
			
		}
	echo "</select></td>
</tr>
<td colspan=2><input type=submit value='Cari'></td>
</tr>
</table>
</form>";
break;
}

?>