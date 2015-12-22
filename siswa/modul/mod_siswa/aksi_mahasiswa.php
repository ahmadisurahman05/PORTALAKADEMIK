<?php
if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Mahasiswa
if ($module=='mahasiswa' AND $act=='hapus') {
mysql_query("DELETE FROM mahasiswa WHERE nim='$_GET[id]'");
header('location:../../../adminweb/index.php?module='.$module);

}
// Input Mahasiswa
if ($module=='mahasiswa' AND $act=='input') {
$pass=md5($_POST['password']);
$tglhr = sprintf("%02d%02d%02d",$_POST['tahun'],$_POST['bulan'],$_POST['tanggal']);
$lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $tipe_file   = $_FILES['fupload']['type'];
  $acak        = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 

if (!empty($lokasi_file)) {
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
		echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=mahasiswa')</script>";
	}
    else{
UploadMhs($nama_file_unik);
mysql_query("INSERT INTO mahasiswa(nim,password,nama,kdjur,angkatan,foto,alamat,tplhr,tglhr,jekel,agama,notelp,asalsekolah,thlulus)
			VALUES('$_POST[nim]',
					'$pass',
					'$_POST[nama]',
					'$_POST[kdjur]',
					'$_POST[angkatan]',
					'$nama_file_unik',
					'$_POST[alamat]',
					'$_POST[tplhr]',
					'$tglhr',
					'$_POST[jekel]',
					'$_POST[agama]',
					'$_POST[notelp]',
					'$_POST[asalsekolah]',
					'$_POST[thlulus]')");
}
}
else {
	mysql_query("INSERT INTO mahasiswa(nim,password,nama,kdjur,angkatan,alamat,tplhr,tglhr,jekel,agama,notelp,asalsekolah,thlulus)
			VALUES('$_POST[nim]',
					'$pass',
					'$_POST[nama]',
					'$_POST[kdjur]',
					'$_POST[angkatan]',
					'$_POST[alamat]',
					'$_POST[tplhr]',
					'$tglhr',
					'$_POST[jekel]',
					'$_POST[agama]',
					'$_POST[notelp]',
					'$_POST[asalsekolah]',
					'$_POST[thlulus]')");
}

header('location:../../../adminweb/index.php?module='.$module);

}

// Update Mahasiswa
if ($module=='mahasiswa' AND $act=='update') {$tglhr = sprintf("%02d%02d%02d",$_POST['tahun'],$_POST['bulan'],$_POST['tanggal']);
$lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $tipe_file   = $_FILES['fupload']['type'];
  $acak        = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 

if (empty($_POST['password'])) {
	mysql_query("UPDATE mahasiswa SET nama='$_POST[nama]',
								kdjur='$_POST[kdjur]',
								angkatan='$_POST[angkatan]',
								alamat='$_POST[alamat]',
								tplhr='$_POST[tplhr]',
								tglhr='$tglhr',
								jekel='$_POST[jekel]',
								agama='$_POST[agama]',
								notelp='$_POST[notelp]',
								asalsekolah='$_POST[asalsekolah]',
								thlulus='$_POST[thlulus]'
					WHERE nim='$_POST[id]'");
}
else {
	$pass=md5($_POST['password']);
	mysql_query("UPDATE mahasiswa SET password='$pass',
								nama='$_POST[nama]',
								kdjur='$_POST[kdjur]',
								angkatan='$_POST[angkatan]',
								alamat='$_POST[alamat]',
								tplhr='$_POST[tplhr]',
								tglhr='$tglhr',
								jekel='$_POST[jekel]',
								agama='$_POST[agama]',
								notelp='$_POST[notelp]',
								asalsekolah='$_POST[asalsekolah]',
								thlulus='$_POST[thlulus]'
					WHERE nim='$_POST[id]'");
}

if (!empty($lokasi_file)) {
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
		echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=mahasiswa')</script>";
    }
    else{
	UploadMhs($nama_file_unik);
	mysql_query("UPDATE mahasiswa SET foto='$nama_file_unik' WHERE nim='$_POST[id]'");
}
}
header('location:../../../siswa/index.php?module='.$module);

}

?>