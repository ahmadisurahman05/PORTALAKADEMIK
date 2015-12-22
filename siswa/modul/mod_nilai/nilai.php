<?php
$aksi="modul/mod_nilai/aksi_nilai.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Nilai
	default:
echo "<h2>Daftar Nilai Mahasiswa</h2>
Nama Mahasiswa : <b>$_SESSION[namalengkap]</b>
<table>
<tr>
	<th>No.</th>
	<th>NIM</th>
	<th>Nama MHS</th>
	<th>Jurusan</th>
	<th>Tahun Ajaran</th>
	<th>Kd.Matkul</th>
	<th>Mata Kuliah</th>
	<th>Kd. Kelas</th>
	<th>Semester</th>
	<th>Nama Dosen</th>
	<th>Huruf Mutu</th>
	<th>Angka Mutu</th>
</tr>";

$p=new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);

$tampil=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas AND a.nim='$_SESSION[namauser]' ORDER BY a.semester,a.tahun LIMIT $posisi,$batas");
$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)) {
	echo "<tr><td>$no</td>
		<td>$r[nim]</td>
		<td>$r[nama]</td>
		<td>$r[nmjur]</td>
		<td>$r[tahun]</td>
		<td>$r[kdmatkul]</td>
		<td>$r[nmmatkul]</td>
		<td>$r[kdkelas]</td>
		<td>$r[semester]</td>
		<td>$r[nama_dosen]</td>
		<td>$r[nilai]</td>
		<td>$r[angkamutu]</td>
		</tr>";
		$no++;
}
echo "</table>";	
$tampil2=mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas AND a.nim='$_SESSION[namauser]'");
$jmldata = mysql_num_rows($tampil2);

$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman= $p->navHalaman($_GET['halaman'],$jmlhalaman);
echo "<p>$linkHalaman</p>";

break;

}
?>