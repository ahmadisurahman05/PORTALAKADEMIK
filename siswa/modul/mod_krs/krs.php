<?php
$aksi="modul/mod_krs/aksi_krs.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil KRS
	default:
	echo "<h2>Kartu Rencana Studi</h2>
<input type=button value='Tambah Mata Kuliah' onclick=location.href='?module=krs&act=carimatakul'>
<table>
<tr>
	<th>No.</th>
	<th>NIM</th>
	<th>Nama Mhs</th>
	<th>Jurusan</th>
	<th>Tahun Ajaran</th>
	<th>Nama M-K</th>
	<th>Kd. Kelas</th>
	<th>Semester</th>
	<th>Kd Dosen</th>
	<th>Aksi</th>
</tr>";
$p=new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);
	
//$tampil=mysql_query("SELECT a.*,b.nmmatkul FROM krs a inner join matakuliah b on a.kdmatkul=b.kdmatkul ORDER BY a.nim LIMIT $posisi,$batas");
$tampil=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND f.kdkelas = a.kdkelas AND a.nim='$_SESSION[namauser]' ORDER BY a.nim,a.tahun,a.semester LIMIT $posisi,$batas");

	$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)) {
	echo "<tr><td>$no</td>
		<td>$r[nim]</td>
		<td>$r[nama]</td>
		<td>$r[nmjur]</td>
		<td>$r[tahun]</td>
		<td>$r[nmmatkul]</td>
		<td>$r[kdkelas]</td>
		<td>$r[semester]</td>
		<td>$r[kode_dosen]</td>
			<td><a href=?module=krs&act=editkrs&id=$r[id_krs]><img src='images/edit-icon.gif' alt='edit' /></a>  
			</td></tr>";
		$no++;
}
echo "</table>";
$tampil2 = mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND f.kdkelas = a.kdkelas AND a.nim='$_SESSION[namauser]'");
$jmldata = mysql_num_rows($tampil2);

$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman= $p->navHalaman($_GET['halaman'],$jmlhalaman);
echo "<p>$linkHalaman</p>";

break;

case "carimatakul":
$thn_skrg=date("Y");
echo "<h2>Pengambilan M-K Mahasiswa</h2>
<form method=POST action='?module=krs&act=prosestampilkrs'>
<table>
	<tr>
		<td>NIM*</td>
		<td> : <input type=text name=nim size=15 maxlength=15 value='$_SESSION[namauser]'></td>
</tr>
<tr>
	<td>Tahun Ajaran</td>
	<td> : <select name=tahun>";
	//<option value=0 selected>Tahun Ajaran</option>";
	for ($ta=2009; $ta<=$thn_skrg;$ta++) {
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
<td colspan=2><input type=submit value='Isi KRS'></td>
</tr>
</table>
</form>";
break;

case "prosestampilkrs":
$tampilmhs=mysql_query("SELECT a.*,b.kdjur,b.nmjur FROM mahasiswa a inner join jurusan b on a.kdjur=b.kdjur WHERE nim ='$_SESSION[namauser]'");
$w=mysql_fetch_array($tampilmhs);
$ketemu=mysql_num_rows($tampilmhs);
$b=$_POST['tahun']+1;
if ($ketemu > 0) {
echo"<h2>Kartu Rencana Studi</h2>
<form method=POST action='$aksi?module=krs&act=input'>
	<table>
		<tr>
			<td>No. Induk Mahasiswa</td>
			<td> : $w[nim]</td>
			<input type=hidden name=nim value='$w[nim]'>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td> : $w[nama]</td>
			<input type=hidden name=nama value='$w[nama]'>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td> : $w[angkatan]</td>
			<input type=hidden name=angkatan value='$w[angkatan]'>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td> : $w[nmjur]</td>
			<input type=hidden name=kdjur value='$w[kdjur]'>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td> : $_POST[tahun]/$b</td>
			<input type=hidden name=tahun value='$_POST[tahun]'>
		</tr>
		<tr>
			<td>Semester</td>
			<td> : $_POST[semester]</td>
			<input type=hidden name=semester value='$_POST[semester]'>
		</tr>
	</table>";
						
	$hts=substr($_POST['tahun'],0,4);
	$ktr=$_POST['semester'];
	$tampilmatakul=mysql_query("SELECT a.*,b.nmmatkul,b.sks from materibaru a inner join matakuliah b on a.kdmatkul=b.kdmatkul where a.tahun='$hts' AND a.ket='$ktr' AND a.kdjur='$w[kdjur]' order by a.semester");
	
	
		echo "<table>
					<tr>
						
						<th>No.</th>
						<th>Kode MK</th>
						<th>Nama MK</th>
						<th>SKS</th>
						<th>kdkelas</th>
						<th>Semester</th>
						<th>Ambil</th>
						
					</tr>";
		
	
	$no=1;
	while($r=mysql_fetch_array($tampilmatakul)) {
						

						echo"	<tr><td>$no</td>
								<td>$r[kdmatkul]</td>
								<input type=hidden name='km".$no."' value='$r[kdmatkul]'>
								<td>$r[nmmatkul]</td>
								<input type=hidden name='nmmk".$no."' value='$r[nmmatkul]'>
								<td>$r[sks]</td>
								<input type=hidden name='jumsks".$no."' value='$r[sks]'>
								<td><select name='kk".$no."'>";
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
								
								<td>$r[semester]</td>
								<input type=hidden name='sms".$no."' value='$r[semester]'>
								<input type=hidden name='kdosen".$no."' value='$r[kode_dosen]'>
							";
						echo "<td><input type=checkbox name='kdmk".$no."' value='$r[kdmatkul]' id=id$no></td>
						</tr>";
						$no++;						
					}
				?>
				<input type="hidden" name="jummk" value="<?php echo $no-1; ?>">
				<?php
				echo "<tr><td colspan=7 align=center>
<input type=radio name=pilih onClick='for (i=1;i<$no;i++){document.getElementById(\"id\"+i).checked=true;}'>Check All 
<input type=radio name=pilih onClick='for (i=1;i<$no;i++){document.getElementById(\"id\"+i).checked=false;}'>Uncheck All 

</td></tr>
				<tr><td colspan=7><input type=submit value=Simpan><input type=button value=Batal onClick=self.history.back()></td></tr>
				</table>
				</form>";
			
}
else {
	echo "<br><br><p><b>NIM mahasiswa tidak ditemukan..</b></p>";
}
break;

case "editkrs":
$edit=mysql_query("SELECT * FROM krs WHERE id_krs='$_GET[id]'");
$r=mysql_fetch_array($edit);

echo "<h2>Edit KRS</h2>
<form method=POST action='$aksi?module=krs&act=update'>
<input type=hidden name=id value='$r[id_krs]'>
<table>
<tr>
	<td>NIM</td>
	<td> : <input type=text name=nim value='$r[nim]' size=15 maxlength=15></td>
</tr>
<tr>
		<td>Jurusan</td>
		<td> : <select name=kdjur>";
		$tampil=mysql_query("SELECT * FROM jurusan ORDER BY nmjur");
		while ($w=mysql_fetch_array($tampil))
		{
			if ($r['kdjur']==$w['kdjur']) {
				echo "<option value='$w[kdjur]' selected>$w[nmjur]</option>";
			}
			else {
				echo "<option value='$w[kdjur]'>$w[nmjur]</option>";
			}
		}
		echo "</select></td>
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
	<td>Tahun Ajaran</td>
	<td> : ";
	$get_thn=substr("$r[tahun]",0,4);
	$thn_skrg=date("Y");
	combotgl2(2009,$thn_skrg,'tahun',$get_thn);

echo "</td>
</tr>
<tr>
	<td>Semester</td>
	<td> : <input type=text name=semester size=3 maxlength=2 value='$r[semester]'></td>
</tr>
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
	<td colspan=2><input type=submit value=Simpan>
	<input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;
}

?>