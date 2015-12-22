<?php
$aksi="modul/mod_nilai/aksi_nilai.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Nilai
	default:
echo "<h2>Daftar Nilai Mahasiswa</h2>
<form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=nilai>
          <div id=paging>Masukkan Nama Mahasiswa : <input type=text name='kata'> <input type=submit value=Cari></div>
          </form>
<input type=button value='Update/Isi Nilai' onclick=location.href='?module=nilai&act=carinilai'>";
if (empty($_GET['kata'])){
echo "<table>
<tr>
	<th>No.</th>
	<th>NIM</th>
	<th>Nama MHS</th>
	<th>Jurusan</th>
	<th>Tahun Ajaran</th>
	<th>Mata Kuliah</th>
	<th>Kd. Kelas</th>
	<th>Semester</th>
	<th>Nama Dosen</th>
	<th>Huruf Mutu</th>
	<th>Angka Mutu</th>
	<th>Aksi</th>
</tr>";

$p=new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);
$tampil=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas ORDER BY a.nim,a.tahun,a.semester LIMIT $posisi,$batas");
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
		<td>$r[nama_dosen]</td>
		<td>$r[nilai]</td>
		<td>$r[angkamutu]</td>
		<td><a href=?module=nilai&act=editnilai&id=$r[id_krs]><img src='images/edit-icon.gif' alt='edit' /></a>
			</td></tr>";
		$no++;
}
echo "</table>";	
$tampil2=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas");
$jmldata = mysql_num_rows($tampil2);

$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman= $p->navHalaman($_GET['halaman'],$jmlhalaman);
echo "<p>$linkHalaman</p>";

break;
}
else {
echo "<table>
<tr>
	<th>No.</th>
	<th>NIM</th>
	<th>Nama MHS</th>
	<th>Jurusan</th>
	<th>Tahun Ajaran</th>
	<th>Mata Kuliah</th>
	<th>Kd. Kelas</th>
	<th>Semester</th>
	<th>Nama Dosen</th>
	<th>Huruf Mutu</th>
	<th>Angka Mutu</th>
	<th>Aksi</th>
</tr>";

$p=new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);
$tampil=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE d.nama LIKE '%$_GET[kata]%' AND b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas ORDER BY a.nim,a.tahun,a.semester LIMIT $posisi,$batas");
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
		<td>$r[nama_dosen]</td>
		<td>$r[nilai]</td>
		<td>$r[angkamutu]</td>
		<td><a href=?module=nilai&act=editnilai&id=$r[id_krs]><img src='images/edit-icon.gif' alt='edit' /></a>
			</td></tr>";
		$no++;
}
echo "</table>";	
$tampil2=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE d.nama LIKE '%$_GET[kata]%' AND b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas");
$jmldata = mysql_num_rows($tampil2);

$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman= $p->navHalaman($_GET['halaman'],$jmlhalaman);
echo "<p>$linkHalaman</p>";

break;
}

case "carinilai":
$thn_skrg=date("Y");
echo "<h2>Nilai Mata Kuliah</h2>
<form method=POST action='?module=nilai&act=prosestampilnilai'>
<table>

<tr>
		<td>Jurusan</td>
		<td> : <select name=kodejur>";
		$tampil=mysql_query("SELECT * FROM jurusan ORDER BY nmjur");
		while ($w=mysql_fetch_array($tampil))
		{
			echo "<option value='$w[kdjur]'>$w[nmjur]</option>";
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
	<td> : <select name=semester>";
		for ($sm=1; $sm<=8;$sm++) {
			echo "<option value=$sm>$sm</option>";
	}
	echo "</select>
	</td>
</tr>
<tr>
		<td>Kelas</td>
		<td> : <select name=kdkelas>";
		$sql=mysql_query("SELECT * FROM kelas ORDER BY nmkelas");
		while ($data=mysql_fetch_array($sql))
		{
			if ($data['kdkelas']==$_GET['kdkelas']) {
				echo "<option value=$data[kdkelas] selected>$data[nmkelas]</option>";
			}
			else {
				echo "<option value=$data[kdkelas]>$data[nmkelas]</option>";
			}
		}
	echo "</select></td>
</tr>

<tr>
<td colspan=2><input type=submit value='Lanjut'></td>
</tr>
</table>
</form>";
break;

case "prosestampilnilai":
$kdmk=$_POST['kdmatkul'];
$hts=substr($_POST['tahun'],0,4);
$semester=$_POST['semester'];
$tampilmatakul=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas AND a.kdmatkul='$kdmk' AND a.tahun='$hts' AND a.semester='$semester' AND a.kdkelas='$_POST[kdkelas]' AND a.kdjur='$_POST[kodejur]'");
$w=mysql_fetch_array($tampilmatakul);
$ketemu=mysql_num_rows($tampilmatakul);
$b=$_POST['tahun']+1;
if ($ketemu > 0) {
echo"<h2>Form Entry Nilai</h2>
<form method=POST action='$aksi?module=nilai&act=input'>
	<table>
		<tr>
			<td>Mata Kuliah</td>
			<td> : $w[nmmatkul]</td>
			<input type=hidden name=kdmatkul value='$w[kdmatkul]'>
		</tr>
		<tr>
		<td>Tahun Ajaran</td>
			<td> : $_POST[tahun]/$b</td>
			<input type=hidden name=tahun value='$_POST[tahun]'>
		</tr>
		<tr>
			<td>Semester</td>
			<td> : $w[semester]</td> 
			<input type=hidden name=semester value='$w[semester]'>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td> : $w[nama_dosen]</td>
			<input type=hidden name=kode_dosen value='$w[kode_dosen]'>
		</tr>
		<tr>
			<td>Kode Kelas</td>
			<td> : $w[kdkelas]</td>
			<input type=hidden name=kdkelas value='$w[kdkelas]'>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td> : $w[nmjur]</td>
			<input type=hidden name=kdjur value='$w[kdjur]'>
		</tr>
		
	</table>";
					
	$hts=substr($_POST['tahun'],0,4);
	$ktr=$_POST['semester'];
	$tampilnilai=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas AND a.kdmatkul='$kdmk' AND a.tahun='$hts' AND a.semester='$semester' AND a.kdkelas='$_POST[kdkelas]' order by a.nim");
	echo "<table>
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Huruf Mutu</th>
						<th>Bobot</th>
					</tr>";
		
	$no=1;
	while($r=mysql_fetch_array($tampilnilai)) {
						echo"	<tr><td>$no</td>
								<td>$r[nim]</td>
								<input type=hidden name='nim".$no."' value='$r[nim]'>
								<td>$r[nama]</td>
								<input type=hidden name='nama".$no."' value='$r[nama]'>
								<td><input type=text name='nilai".$no."' value='$r[nilai]' size=2 maxlength=2></td>
								<td><input type=text name='angkamutu".$no."' value='$r[angkamutu]' size=3 maxlength=4></td>
								</tr>";
						$no++;						
		}
		?>
		<input type="hidden" name="jummk" value="<?php echo $no-1; ?>">
		<?php
echo "<tr><td colspan=6><input type=submit value=Simpan><input type=button value=Batal onClick=self.history.back()></td></tr>
				</table>
				</form>";
			
}
else {
	echo "<p><b>Data tidak ditemukan..</b></p>";
}

break;

case "editnilai":
$edit=mysql_query("SELECT * FROM krs WHERE id_krs='$_GET[id]'");
$r=mysql_fetch_array($edit);

echo "<h2>Edit Nilai</h2>
<form method=POST action='$aksi?module=nilai&act=update'>
<input type=hidden name='id' value='$r[id_krs]'>
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
	combotgl2(1970,$thn_skrg,'tahun',$get_thn);

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
	<td>Nilai</td>
	<td> : <input type='text' name='nilai' value='$r[nilai]' size='2' maxlength='2'></td>
</tr>

<tr>
	<td>Bobot</td>
	<td> : <input type='text' name='angkamutu' value='$r[angkamutu]' size='3' maxlength='4'></td>
</tr>

<tr>
	<td colspan=2><input type=submit value=Update>
	<input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;
}
?>