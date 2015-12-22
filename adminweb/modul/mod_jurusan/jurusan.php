<?php
$aksi="modul/mod_jurusan/aksi_jurusan.php";
$act=@$_GET['act'];
switch ($act) {
	// Tampil Jurusan
	default:
	echo "<h2>Jurusan</h2>
<input type=button value='Tambah Jurusan' onclick=\"window.location.href='?module=jurusan&act=tambahjurusan';\">
<table>
<tr>
	<th>No.</th>
	<th>Kode Jurusan</th>
	<th>Nama Jurusan</th>
	<th>Kode Fakultas</th>
	<th>Nama Ketua</th>
	<th>Alamat Jurusan</th>
	<th>Aksi</th>
</tr>";

$p=new Paging;
$batas=10;
$posisi=$p->cariposisi($batas);

$tampil = mysql_query("SELECT * FROM jurusan ORDER BY kdjur limit $posisi,$batas");
$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)){
	echo "<tr>
			<td>$no</td>
			<td>$r[kdjur]</td>
			<td>$r[nmjur]</td>
			<td>$r[kdfak]</td>
			<td>$r[nmketua]</td>
			<td>$r[almtjur]</td>
			<td><a href=?module=jurusan&act=editjurusan&id=$r[kdjur]><img src='images/edit-icon.gif' alt='edit' /></a>
			<a href=$aksi?module=jurusan&act=hapus&id=$r[kdjur]><img src='images/hapus-icon.gif' alt='hapus' /></a>
			</td>
		</tr>";
		$no++;
	}
	echo "</table>";
	$tampil2=mysql_query("select * from jurusan");
	$jmldata=mysql_num_rows($tampil2);

	$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
	$linkHalaman= $p->navHalaman(@$_GET[halaman],$jmlhalaman);
	echo "<p>$linkHalaman</p>";
break;
case "tambahjurusan":
echo "<h2>Form Jurusan</h2>
<form name=form1 method=POST action='$aksi?module=jurusan&act=input'>
<table>
	<tr>
		<td>Fakultas</td>
		<td> : <select name=kdfak>
		<option value=0 selected>- Pilih Fakultas -</option>"; 
		$sql=mysql_query("SELECT * FROM fakultas ORDER BY kdfak");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value=$data[kdfak]>$data[nmfak]</option>";
		}
	echo "</select></td>
	</tr>
	<tr>
		<td>Kode Jurusan</td>
		<td> : <input type=text name=kdjur size=23 maxlength=15></td>
	</tr>
	<tr>
		<td>Nama Jurusan</td>
		<td> : <input type=text name=nmjur size=50 maxlength=100></td>
	</tr>
	<tr>
		<td>NIP Ketua</td>
		<td> : <input type=text name=nipketua size=50 maxlength=100></td>
	</tr>
	<tr>
		<td>Nama Ketua</td>
		<td> : <input type=text name=nmketua size=50 maxlength=100></td>
	</tr>
	<tr>
		<td>Alamat Jurusan</td>
		<td> : <input type=text name=almtjur size=50 maxlength=100></textarea>
		</td>
	</tr>
	<tr>
		<td colspan=2><input type=submit value=Simpan>
		<input type=button value=Batal onclick=self.history.back()></td>
	</tr>
</table>
</form>";
break;
case "editjurusan":
$edit = mysql_query("SELECT * FROM jurusan WHERE kdjur='$_GET[id]'");

$r=mysql_fetch_array($edit);

echo "<h2>Edit Jurusan</h2>
<form method=POST action=$aksi?module=jurusan&act=update>
	<input type=hidden name=id value=$r[kdjur]>
	<table>
		<tr>
			<td>Fakultas</td>
			<td> : <select name=kdfak>";
			$tampil=mysql_query("SELECT * FROM fakultas ORDER by nmfak");
			while ($w=mysql_fetch_array($tampil))
			{
				if ($r[kdfak]==$w[kdfak]) {
					echo "<option value=$w[kdfak] selected>$w[nmfak]</option>";
				}
				else
				{
					echo "<option value=$w[kdfak]>$w[nmfak]</option>";
				}
			}
			echo "</select></td>
		</tr>
		<tr>
			<td>Kode Jurusan</td>
			<td> : <input type=text name=kdjur value='$r[kdjur]' size=23 maxlength=15></td>
		</tr>
		<tr>
			<td>Nama Jurusan</td>
			<td> : <input type=text name=nmjur value='$r[nmjur]' size=50 maxlength=100></td>
		</tr>
		<tr>
			<td>NIP Ketua</td>
			<td> : <input type=text name=nipketua value='$r[nipketua]' size=50 maxlength=100></td>
		</tr>
		<tr>
			<td>Nama Ketua</td>
			<td> : <input type=text name=nmketua value='$r[nmketua]' size=50 maxlength=100></td>
		</tr>
		<tr>
			<td>Alamat Jurusan</td>
			<td> : <input type=text name=almtjur value='$r[almtjur]' size=50 maxlength=100></td>
		</tr>
		<tr>
			<td colspan=2><input type=submit value=Simpan>
			<input type=button value=Batal onclick=self.history.back()></td>
		</tr>
</table>
</form>";
break;
}
?>