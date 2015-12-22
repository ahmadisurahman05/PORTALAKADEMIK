<script type='text/javascript'>
var xmlhttp = createRequestObject();

function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

function dinamis(combobox)
{
    var kode = combobox.value;
    if (!kode) return;
    xmlhttp.open('get', 'modul/mod_materibaru/getdata.php?kode='+kode, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
        {
             document.getElementById("tampilmatkul").innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}
</script>


<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";

// Bagian Home
if ($_GET['module']=='home') {
	echo "<h2>Login Mahasiswa</h2>
			<p>Hai <b>$_SESSION[namalengkap]</b>, selamat datang di halaman Pengelolaan SIAKAD.<br>
			 Silahkan klik menu pilihan yang berada di sebelah kiri untuk data yang diinginkan.</p>
			 <p>&nbsp;</p>
			 <p>&nbsp;</p>";
}

// Bagian User
elseif ($_GET['module']=='user') {
	include "modul/mod_user/user.php";
}

// Bagian Modul
elseif ($_GET['module']=='modul') {
	include "modul/mod_modul/modul.php";
}

// Bagian Fakultas
elseif ($_GET['module']=='fakultas') {
	include "modul/mod_fakultas/fakultas.php";
}

// Bagian Jurusan
elseif ($_GET['module']=='jurusan') {
	include "modul/mod_jurusan/jurusan.php";
}

// Bagian Mahasiswa
elseif ($_GET['module']=='mahasiswa') {
	include "modul/mod_siswa/mahasiswa.php";
}

// Bagian Dosen
elseif ($_GET['module']=='dosen') {
	include "modul/mod_dosen/dosen.php";
}

// Bagian Kategori
elseif ($_GET['module']=='kategori') {
	include "modul/mod_kategori/kategori.php";
}
// Bagian Berita
elseif ($_GET['module']=='berita') {
	include "modul/mod_berita/berita.php";
}
// Bagian Banner
elseif ($_GET['module']=='banner') {
	include "modul/mod_banner/banner.php";
}

// Bagian Agenda
elseif ($_GET['module']=='agenda') {
	include "modul/mod_agenda/agenda.php";
}

// Bagian Download
elseif ($_GET['module']=='download') {
	include "modul/mod_download/download.php";
}
// Bagian Mata Kuliah
elseif ($_GET['module']=='matakul') {
	include "modul/mod_matakul/matakul.php";
}

// Bagian Kelas
elseif ($_GET['module']=='kelas') {
	include "modul/mod_kelas/kelas.php";
}

// Bagian Materi Ajar Baru
elseif ($_GET['module']=='materibaru') {
	include "modul/mod_materibaru/materibaru.php";
}

// Bagian Materi Ajar Baru
elseif ($_GET['module']=='krs') {
	include "modul/mod_krs/krs.php";
}

// Bagian Dosen Mengajar
elseif ($_GET['module']=='dosenmengajar') {
	include "modul/mod_dosenmengajar/dosenmengajar.php";
}

// Bagian Jadwal Kuliah
elseif ($_GET['module']=='jadwal') {
	include "modul/mod_jadwal/cetak_jadwal.php";
}

// Bagian KHS
elseif ($_GET['module']=='cetakkhs') {
	include "modul/mod_khs/cetak_khs.php";
}

// Bagian Nilai
elseif ($_GET['module']=='nilai') {
	include "modul/mod_nilai/nilai.php";
}

// Bagian Cetak KRS
elseif ($_GET['module']=='cetak_krs') {
	include "modul/mod_cetakkrs/cetak_krs.php";
}

// Bagian Cetak Nilai
elseif ($_GET['module']=='cetaknilai') {
	include "modul/mod_cetaknilai/cetak_nilai.php";
}

?>