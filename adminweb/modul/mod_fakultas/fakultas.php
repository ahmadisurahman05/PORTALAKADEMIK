<?php
$aksi="modul/mod_fakultas/aksi_fakultas.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Fakultas
	default:
	echo "<h2>Fakultas</h2>
<input type=button value='Tambah Fakultas' onclick=\"window.location.href='?module=fakultas&act=tambahfakultas';\">
<table>
	<tr>
		<th>No.</th>
		<th>Kd. Fakultas</th>
		<th>Nama Fakultas</th>
		<th>NIP Dekan/Pimpinan</th>
		<th>Alamat Fakultas</th>
		<th>Aksi</th>
	</tr>";
	$p=new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);

	$tampil=mysql_query("SELECT * FROM fakultas ORDER BY kdfak limit $posisi,$batas");
	$no=$posisi+1;
	while ($r=mysql_fetch_array($tampil)){
		echo "<tr>
			<td>$no</td>
			<td>$r[kdfak]</td>
			<td>$r[nmfak]</td>
			<td>$r[nippimpinan]</td>
			<td>$r[almtfak]</td>
			<td><a href=?module=fakultas&act=editfakultas&id=$r[kdfak]><img src='images/edit-icon.gif' alt='edit' /></a> &nbsp;
				<a href=$aksi?module=fakultas&act=hapus&id=$r[kdfak]><img src='images/hapus-icon.gif' alt='hapus' /></a>
			</td>
			</tr>";
		$no++;
	}
echo "</table>";
$tampil2 = mysql_query("select * from fakultas");
$jmldata = mysql_num_rows($tampil2);

$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman= $p->navHalaman(@$_GET['halaman'],$jmlhalaman);
echo "<p>$linkHalaman</p>";
break;

case "tambahfakultas":
echo "<h2>Tambah Fakultas</h2>
<form name=form1 method=POST action='$aksi?module=fakultas&act=input'>
<table>
	<tr>
		<td>Kode Fakultas</td>
		<td> : <input type=text name='kdfak' id=kdfak size=15 maxlength=20></td>
	</tr>
	<tr>
		<td>Nama Fakultas</td>
		<td> : <input type=text name='nmfak' id=nmfak size=50 maxlength=100></td>
	</tr>
	<tr>
		<td>Nama Pimpinan</td>
		<td> : <input type=text name='nippimpinan' id=nippimpinan size=50 maxlength=50></td>
	</tr>
	<tr>
		<td>Alamat Fakultas</td>
		<td> : <input type=text name='almtfak' size=50 maxlength=50</td>
	</tr>
	<tr>
		<td colspan=2><input type=submit value=Simpan>
		<input type=button value=Batal onclick=self.history.back()>
		</td>
	</tr>
</table>
</form>";
break;

case "editfakultas":
$edit = mysql_query("SELECT * FROM fakultas WHERE kdfak='$_GET[id]'");

$r=mysql_fetch_array($edit);

echo "<h2>Edit Fakultas</h2>
<form name=form1 method=POST action=$aksi?module=fakultas&act=update>
	<input type=hidden name=id value='$r[kdfak]'>
<table>
	<tr>
		<td>Kode Fakultas</td>
		<td> : <input type=text name=kdfak value='$r[kdfak]' size=18 maxlength=18></td>
	</tr>
	<tr>
		<td>Nama Fakultas</td>
		<td> : <input type=text name=nmfak value='$r[nmfak]' size=50 maxlength=100></td>
	</tr>
	<tr>
		<td>Nama Pimpinan</td>
		<td> : <input type=text name=nippimpinan value='$r[nippimpinan]' size=50 maxlength=50></td>
	</tr>
	<tr>
		<td>Alamat Fakultas</td>
		<td> : <input type=text name=almtfak value='$r[almtfak]' size=50 maxlength=50></td>
	</tr>
	<tr>
		<td colspan='2'><input type=submit value=Simpan>
			<input type=button value=Batal onclick=self.history.back()></td>
	</tr>
</table>
</form>";
break;
}

?>