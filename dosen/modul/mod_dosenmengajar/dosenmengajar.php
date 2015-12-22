<?php
$aksi="modul/mod_dosenmengajar/aksi_dosenmengajar.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Dosen Mengajar
	default:
	echo "<h2>Data Dosen Mengajar</h2>
<table>
<tr>
	<th>No</th>
	<th>Kode Dosen</th>
	<th>Nama Dosen</th>
	<th>Kode M-K</th>
	<th>Nama M-K</th>
	<th>SKS</th>
	<th>Jurusan</th>
	<th>Tahun Ajaran</th>
	<th>Sem M-K</th>
</tr>";
$tampil=mysql_query("SELECT matakuliah.nmmatkul,matakuliah.sks,dosen.nama_dosen,jurusan.nmjur,dosemengajar.* from matakuliah,dosen,jurusan,dosemengajar WHERE matakuliah.kdmatkul=dosemengajar.kdmatkul AND dosen.kode_dosen=dosemengajar.kode_dosen AND jurusan.kdjur=dosemengajar.kdjur AND dosemengajar.kode_dosen='$_SESSION[namauser]' ORDER BY dosemengajar.kode_dosen ");
$no=1;
while($r=mysql_fetch_array($tampil)) {
	echo "<tr><td>$no</td>
			<td>$r[kode_dosen]</td>
			<td>$r[nama_dosen]</td>
			<td>$r[kdmatkul]</td>
			<td>$r[nmmatkul]</td>
			<td>$r[sks]</td>
			<td>$r[nmjur]</td>
			<td>$r[tahun]</td>
			<td>$r[semester]</td>
			</tr>";
		$no++;
}
echo "</table>";

break;
}
?>