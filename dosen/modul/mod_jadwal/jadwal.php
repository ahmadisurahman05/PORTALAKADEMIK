<?php
$aksi="modul/mod_jadwal/aksi_jadwal.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Jadwal
default:
$thn_skrg=date("Y");
	echo "<h2>Cari Jadwal Kuliah</h2>
<form method=POST action='?module=jadwal&act=tampiljadwal'>
<table>
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
<td colspan=2><input type=submit value='Tampilkan Jadwal'></td>
</tr>
</table>
</form>";
break;

case "tampiljadwal":
$hts=substr($_POST['tahun'],0,4);
$tampiljdwl = mysql_query("SELECT a.*,b.nmmatkul from jadwal a inner join matakuliah b on a.kdmatkul=b.kdmatkul AND a.tahun='$hts'");

$b=$_POST['tahun']+1;
echo "<h2>Jadwal Mata Kuliah</h2>
<table>
<input type=button value='Cari Jadwal' onclick=location.href='?module=jadwal'>
<tr>
	<th>No</th>
	<th>Th Ajaran</th>
	<th>Kode M-K</th>
	<th>Nama M-K</th>
	<th>Kelas</th>
	<th>Hari</th>
	<th>Jam Mulai</th>
	<th>Jam Selesai</th>
	<th>Kd. Dosen</th>
	</tr>";

/* $tampil=mysql_query("SELECT a.*,b.nmmatkul from jadwal a inner join matakuliah b on a.kdmatkul=b.kdmatkul ");*/
$no=1;
while($r=mysql_fetch_array($tampiljdwl)) {
	echo "<tr><td>$no</td>
			<td>$r[tahun]</td>
			<td>$r[kdmatkul]</td>
			<td>$r[nmmatkul]</td>
			<td>$r[kdkelas]</td>
			<td>$r[hari]</td>
			<td>$r[jam_mulai]</td>
			<td>$r[jam_selesai]</td>
			<td>$r[kode_dosen]</td>
				</tr>";
		$no++;
}
echo "</table>";

break;

case "tambahjadwal":
$thn_skrg=date("Y");
echo "<h2>Tambah Jadwal Kuliah</h2>
<form method=POST action='$aksi?module=jadwal&act=input'>
<table>
<tr>
	<td>Tahun Ajaran</td>
	<td> : <select name=tahun>
	<option value=0 selected>Tahun Ajaran</option>";
	for ($ta=2009; $ta<=$thn_skrg;$ta++) {
		echo "<option value=$ta>$ta</option>";
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
		<td>Nama Mata Kuliah</td>
		<td> : <select name=kdmatkul>
		<option value=0 selected>- Pilih Mata Kuliah -</option>"; 
		$sql=mysql_query("SELECT * FROM matakuliah order by nmmatkul");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value=$data[kdmatkul]>$data[nmmatkul]</option>";
		}
	echo "</select></td>
	</tr>
			<tr>
		<td>Nama Kelas</td>
		<td> : <select name=kdkelas>
		<option value=0 selected>- Pilih Kelas -</option>"; 
		$sql=mysql_query("SELECT * FROM  kelas ORDER BY kdkelas");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value=$data[kdkelas]>$data[nmkelas]</option>";
		}
	echo "</select></td>
	</tr>
<tr>
	<td>Hari</td>
	<td> : <input type=text name=hari size=20 maxlength=35></td>
</tr>
<tr>
	<td>Jam Mulai</td>
	<td> : <input type=text name=jam_mulai size=8 maxlength=8> (jj:mm:dd) </td>
</tr>
<tr>
	<td>Jam Selesai</td>
	<td> : <input type=text name=jam_selesai size=8 maxlength=8> (jj:mm:dd) </td>
</tr>
<tr>
<td colspan=2><input type=submit value=Tambah><input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;

case "editjadwal":
$thn_skrg=date("Y");
$edit=mysql_query("SELECT * FROM jadwal WHERE id_jadwal='$_GET[id]'");
$r=mysql_fetch_array($edit);

echo "<h2>Edit Jadwal Kuliah</h2>
<form method=POST action=$aksi?module=jadwal&act=update>
<input type=hidden name=id value='$r[id_jadwal]'>
<table>
<tr>
	<td>Tahun Ajaran</td>
	<td> : ";
	$get_thn=substr("$r[tahun]",0,4);
	$thn_skrg=date("Y");
	combotgl2(2009,$thn_skrg,'tahun',$get_thn);

echo "</td>
</tr>
<tr>
		<td>semester</td>
		<td> : <select name='semester'>";
	if ($r['semester']=='Ganjil') {
		echo "<option value=Ganjil selected>Ganjil</option>
			<option value=Genap>Genap</option>";
	}
	else {
		echo "<option value=Pria>Pria</option>
			<option value=Wanita selected>Wanita</option>";
	}
echo "</select>
	</td>
</tr>
<tr>
		<td>Mata Kuliah</td>
		<td> : <select name=kdmatkul>";
		$tampil=mysql_query("SELECT * FROM matakuliah ORDER BY nmmatkul");
		while ($w=mysql_fetch_array($tampil))
		{
			if ($r['kdmatkul']==$w['kdmatkul']) {
				echo "<option value='$w[kdmatkul]' selected>$w[nmmatkul]</option>";
			}
			else {
				echo "<option value='$w[kdmatkul]'>$w[nmmatkul]</option>";
			}
		}
		echo "</select></td>
</tr>
			<tr>
<tr>
		<td>Kelas</td>
		<td> : <select name=kdkelas>";
		$tampil=mysql_query("SELECT * FROM kelas ORDER BY nmkelas");
		while ($w=mysql_fetch_array($tampil))
		{
			if ($r['kdkelas']==$w['kdkelas']) {
				echo "<option value='$w[kdkelas]' selected>$w[nmkelas]</option>";
			}
			else {
				echo "<option value='$w[kdkelas]'>$w[nmkelas]</option>";
			}
		}
		echo "</select></td>
</tr>
<tr>
	<td>Hari</td>
	<td> : <input type=text name=hari size=20 maxlength=35 value='$r[hari]'></td>
</tr>
<tr>
	<td>Jam Mulai</td>
	<td> : <input type=text name=jam_mulai size=8 maxlength=8 value='$r[jam_mulai]'> (jj:mm:dd) </td>
</tr>
<tr>
	<td>Jam Selesai</td>
	<td> : <input type=text name=jam_selesai size=8 maxlength=8 value='$r[jam_selesai]'> (jj:mm:dd) </td>
</tr>
<tr>
<td colspan=2><input type=submit value=Update><input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;
}
?>