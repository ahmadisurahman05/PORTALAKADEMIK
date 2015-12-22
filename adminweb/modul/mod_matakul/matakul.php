<?php
$aksi="modul/mod_matakul/aksi_matakul.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Mata Kuliah
	default:
	echo "<h2>Mata Kuliah</h2>
	<form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=matakul>
          <div id=paging>Masukkan Nama MataKuliah : <input type=text name='kata'> <input type=submit value=Cari></div>
          </form>
<input type=button value='Tambah Mata Kuliah' onclick=\"window.location.href='?module=matakul&act=tambahmatakul';\">";
if (empty($_GET['kata'])){
echo "<table>
	<tr>
		<th>No.</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>Jumlah SKS</th>
		<th>Jenis</th>
		<th>Aksi</th>
	</tr>";
$p=new Paging;
$batas=10;
$posisi=$p->cariposisi($batas);

$tampil=mysql_query("SELECT * FROM matakuliah limit $posisi,$batas");

$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)) {
	echo "<tr><td>$no</td>
			<td>$r[kdmatkul]</td>
			<td>$r[nmmatkul]</td>
			<td>$r[sks]</td>
			<td>$r[jenis]</td>
			<td><a href=?module=matakul&act=editmatakul&id=$r[kdmatkul]><img src='images/edit-icon.gif' alt='edit' /></a> &nbsp;
				<a href=$aksi?module=matakul&act=hapus&id=$r[kdmatkul]><img src='images/hapus-icon.gif' alt='hapus' /></a>
			</td></tr>";
		$no++;
}
echo "</table>";
	$tampil2=mysql_query("SELECT * FROM matakuliah");
	$jmldata=mysql_num_rows($tampil2);

	$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
	$linkHalaman= $p->navHalaman(@$_GET['halaman'],$jmlhalaman);
	echo "<p>$linkHalaman</p>";

break;
}
else {
echo "<table>
	<tr>
		<th>No.</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>Jumlah SKS</th>
		<th>Jenis</th>
		<th>Aksi</th>
	</tr>";
$p=new Paging;
$batas=10;
$posisi=$p->cariposisi($batas);

$tampil=mysql_query("SELECT * FROM matakuliah WHERE nmmatkul LIKE '%$_GET[kata]%' limit $posisi,$batas");

$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)) {
	echo "<tr><td>$no</td>
			<td>$r[kdmatkul]</td>
			<td>$r[nmmatkul]</td>
			<td>$r[sks]</td>
			<td>$r[jenis]</td>
			<td><a href=?module=matakul&act=editmatakul&id=$r[kdmatkul]><img src='images/edit-icon.gif' alt='edit' /></a> &nbsp;
				<a href=$aksi?module=matakul&act=hapus&id=$r[kdmatkul]><img src='images/hapus-icon.gif' alt='hapus' /></a>
			</td></tr>";
		$no++;
}
echo "</table>";
	$tampil2=mysql_query("SELECT * FROM matakuliah WHERE nmmatkul LIKE '%$_GET[kata]%'");
	$jmldata=mysql_num_rows($tampil2);

	$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
	$linkHalaman= $p->navHalaman(@$_GET['halaman'],$jmlhalaman);
	echo "<p>$linkHalaman</p>";

break;

}


case "tambahmatakul":
echo "<h2>Tambah Mata Kuliah</h2>
<form method=POST action='$aksi?module=matakul&act=input'>
<table>
	<tr>
		<td>Kode Mata Kuliah</td>
		<td> : <input type=text name='kdmatkul' size=15 maxlength=15></td>
	</tr>
	<tr>
		<td>Nama Mata Kuliah</td>
		<td> : <input type=text name='nmmatkul' size=35 maxlength=100></td>
	</tr>
	<tr>
		<td>Jumlah SKS</td>
		<td> : <input type=text name='sks' size=2 maxlength=2></td>
	</tr>
	<tr>
		<td>Jenis</td>
		<td> : <select name=jenis>
			<option value=Praktek selected>Praktek</option>
			<option value=Teori>Teori</option>
		</td>
	</tr>
	<tr>
		<td colspan=2><input type=submit value=Simpan>
		<input type=button value=Batal onclick=self.history.back()></td>
	</tr>
</table>
</form>";
break;

case "editmatakul":
$edit=mysql_query("SELECT * FROM matakuliah WHERE kdmatkul='$_GET[id]'");
$r=mysql_fetch_array($edit);

echo "<h2>Edit Mata Kuliah</h2>
<form method=POST action=$aksi?module=matakul&act=update>
<input type=hidden name=id value='$r[kdmatkul]'>
<table>
	<tr>
		<td>Kode Mata Kuliah</td>
		<td> : <input type=text name=kdmatkul value='$r[kdmatkul]' size=15 maxlength=15></td>
	</tr>
	<tr>
		<td>Nama Mata Kuliah</td>
		<td> : <input type=text name=nmmatkul value='$r[nmmatkul]' size=35 maxlength=100></td>
	</tr>
	<tr>
		<td>Jumlah SKS</td>
		<td> : <input type=text name=sks value='$r[sks]' size=2 maxlength=2></td>
	</tr>
	<td>Jenis</td>
	<td> : <select name='jenis'>";
	if ($r['jenis']=='Praktek') {
		echo "<option value=Praktek selected>Praktek</option>
			<option value=Teori>Teori</option>";
	}
	else {
		echo "<option value=Praktek>Praktek</option>
			<option value=Teori selected>Teori</option>";
	}
	echo "</select>
	</td>
</tr>
	<tr>
		<td colspan=2><input type=submit value=Simpan>
			<input type=button value=Batal onclick=self.history.back()>
		</td>
	</tr>
</table>
</form>";
break;
}
?>