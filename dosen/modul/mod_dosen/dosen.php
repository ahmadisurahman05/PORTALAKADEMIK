<?php
$aksi = "modul/mod_dosen/aksi_dosen.php";
$act=@$_GET['act'];
switch($act) {
	// Tampil Dosen
	default:
		echo "<h2>Dosen</h2>

<table>
<tr>
	<th>No.</th>
	<th>Kode Dosen</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Telpon</th>
	<th>Jenis Kelamin</th>
	<th>Tempat/Tgl Lahir</th>
	<th>Pendidikan</th>
	<th>Aksi</th>
</tr>";

	$p= new Paging;
	$batas=10;
	$posisi=$p->cariposisi($batas);

	$tampil = mysql_query("SELECT * FROM dosen where kode_dosen='$_SESSION[namauser]' ORDER BY kode_dosen limit $posisi,$batas");
	
	$no=$posisi+1;
	while($r=mysql_fetch_array($tampil)){
		$tglhr = tgl_indo($r['tanggal_lahir']);
		echo "<tr><td>$no</td>
				<td>$r[kode_dosen]</td>
				<td>$r[nama_dosen]</td>
				<td>$r[alamat]</td>
				<td>$r[telpon]</td>
				<td>$r[jenis_kelamin]</td>
				<td>$r[tempat_lahir], $tglhr</td>
				<td>$r[pendidikan]</td>
				<td><a href=?module=dosen&act=editdosen&id=$r[kode_dosen]><img src='images/edit-icon.gif' alt='edit' /></a>
			</tr>";
	$no++;
}
echo "</table>";

	$tampil2=mysql_query("select * from dosen where kode_dosen='$_SESSION[namauser]' ORDER BY kode_dosen ");
	$jmldata=mysql_num_rows($tampil2);

	$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
	$linkHalaman= $p->navHalaman($_GET['halaman'],$jmlhalaman);
	echo "<p>$linkHalaman</p>"; 
break;
case "tambahdosen":
$tgl_skrg= date("d");
$bln_skrg = date("m");
$thn_skrg = date("Y");

echo "<h2>Tambah Dosen</h2>
<form method=POST action='$aksi?module=dosen&act=input'>
<table>
<tr>
	<td>Kode Dosen</td>
	<td> : <input type=text name='kode_dosen' size=18 max=18></td>
</tr>
<tr>
	<td>Nama Dosen</td>
	<td> : <input type=text name='nama' size=35 max=100></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td> :	<input type='radio' name='jenis_kelamin' value='L'>L
			<input type='radio' name='jenis_kelamin' value='P'>P
	</td>
</tr>
<tr>
	<td>Password</td>
	<td> : <input type=text name='password' size=35 max=35></td>
</tr>
	<td>Alamat</td>
	<td> : <input type=text name='alamat' size=40 max=100></td>
</tr>
</tr>
	<td>Telpon</td>
	<td> : <input type=text name='telpon' size=15 max=15></td>
</tr>
<tr>
	<td>Tempat Lahir</td>
	<td> : <input type=text name='tempat_lahir' size=35 max=50>
</td>
</tr>
<tr>
	<td>Tanggal Lahir</td><td> : ";
	combotgl(1,31,'tanggal',$tgl_skrg);
	combobln(1,12,'bulan',$bln_skrg);
	combotgl(1970,$thn_skrg,'tahun',$thn_skrg);
echo "</td>
</tr>
<tr>
	<td>Pendidikan</td>
	<td> : <input type=text name='pendidikan' size=25 max=50></td>
</tr>
<tr>
	<td colspan=2><input type=submit value=Simpan><input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;
case "editdosen":
$tgl_skrg= date("d");
$bln_skrg = date("m");
$thn_skrg = date("Y"); 

$edit = mysql_query("SELECT * FROM dosen WHERE kode_dosen='$_GET[id]'");
$r=mysql_fetch_array($edit);

echo "<h2>Edit Dosen</h2>
<form method=POST action=$aksi?module=dosen&act=update>
<input type=hidden name=id value='$r[kode_dosen]'>
<table>
<tr>
	<td>Kode Dosen</td>
	<td> : <input type=text name=kode_dosen size=10 max=15 value='$r[kode_dosen]' disabled></td>
</tr>
<tr>
	<td>Nama Dosen</td>
	<td> : <input type=text name=nama size=35 max=100 value='$r[nama_dosen]'></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td> :	<input type='radio' name='jenis_kelamin' value='L'>L
			<input type='radio' name='jenis_kelamin' value='P'>P
	</td>
</tr>
<tr>
	<td>Password</td>
	<td> : <input type=text name=password size=35 max=35> *)</td>
</tr>
	<td>Alamat</td>
	<td> : <input type=text name=alamat size=40 max=100 value='$r[alamat]'></td>
</tr>
</tr>
	<td>Telpon</td>
	<td> : <input type=text name=telpon size=15 max=15 value='$r[telpon]'></td>
</tr>
<tr>
	<td>Tempat Lahir</td>
	<td> : <input type=text name='tempat_lahir' size=35 max=50 value='$r[tempat_lahir]'>
</td>
</tr>
<tr>
	<td>Tanggal Lahir</td><td> : ";
	
	$get_tgl = substr("$r[tanggal_lahir]",8,2);
	combotgl2(1,31,'tanggal',$get_tgl);
	$get_bln=substr("$r[tanggal_lahir]",5,2);
	combobln(1,12,'bulan',$get_bln);
	$get_thn=substr("$r[tanggal_lahir]",0,4);
	$thn_skrg=date("Y");
	combotgl2(1970,$thn_skrg,'tahun',$get_thn);

echo "</td>
</tr>
<tr>
	<td>Pendidikan</td>
	<td> : <input type=text name='pendidikan' size=25 max=50 value='$r[pendidikan]'></td>
</tr>
<tr>
	<td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.</td>
</tr>
<tr>
	<td colspan=2><input type=submit value=Update><input type=button value=Batal onclick=self.history.back()></td>
</tr>
</table>
</form>";
break;
}
?>