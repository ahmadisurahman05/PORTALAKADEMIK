<?php
$aksi="modul/mod_krs/aksi_krs.php";
$act=@$_GET['act'];
switch($act) {
	// Cari KRS
	default:
	$thn_skrg=date("Y");
echo "<h2>Cari Data Nilai</h2>
<form method=POST action='modul/mod_cetaknilai/cetaknilai.php'>
<table>
	<tr>
		<td>NIM</td>
		<td> : <input type=text name=nim size=18 maxlength=18 value='$_SESSION[namauser]'></td>
</tr>
<td colspan=2><input type=submit value='Cari'></td>
</tr>
</table>
</form>";
break;


case "cetakdatakrs":

include ('modul/mod_cetakkrs/class.ezpdf.php');
  
$pdf = new Cezpdf();
 
// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('modul/mod_cetakkrs/fonts/Courier.afm');

$all = $pdf->openObject();

// Tampilkan logo
//$pdf->setStrokeColor(0, 0, 0, 1);
//$pdf->addJpegFromFile('logo.jpg',20,800,69);

// Teks di tengah atas untuk judul header
$pdf->addText(200, 820, 16,'<b>KARTU RENCANA STUDI</b>');
$pdf->addText(200, 800, 14,'<b>UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG</b>');
// Garis atas untuk header
$pdf->line(10, 795, 578, 795);

// Garis bawah untuk footer
$pdf->line(10, 50, 578, 50);
// Teks kiri bawah
$pdf->addText(30,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');

// Koneksi ke database dan tampilkan datanya
include "../../../config/koneksi.php";

// Query untuk merelasikan kedua tabel
	$nima=$_POST['nim'];
	$hts=substr($_POST['tahun'],0,4);
	$ktr=$_POST['semester'];
//	$tampilmatakul=mysql_query("SELECT a.*,b.nmmatkul,b.sks from materibaru a inner join matakuliah b on a.kdmatkul=b.kdmatkul where a.tahun='$hts' AND a.ket='$ktr' AND a.kdjur='$w[kdjur]' order by a.semester");
$sql =mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,a.* from matakuliah b,jurusan c,mahasiswa d,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND a.nim='$nima' AND a.tahun='$hts' AND a.ket='$ktr' ORDER BY a.kdmatkul");
//$sql =mysql_query("SELECT * FROM krs WHERE nim='$_POST[nim]' AND tahun='$_POST[tahun]' AND ket='$_POST[semester]' ORDER BY kdmatkul");
$jml = mysql_num_rows($sql);
$w=mysql_fetch_array($sql);

$nm=$w['nim'];
$nam=$w['nama'];
$tah=$w['tahun'];
$tah2=$w['tahun']+1;
$jur=$w['nmjur'];

$pdf->ezText("\nNIM                   : {$nm}");
$pdf->ezText("\nNama Mahasiswa        : {$nam}");
$pdf->ezText("\nJurusan               : {$jur}");
$pdf->ezText("\nTahun Ajaran          : {$tah}/{$tah2}");
$pdf->ezText("\nSemester              : {$ktr}");
$pdf->ezText("\n");
$i =1;
while($r = mysql_fetch_array($sql)){
    $data[$i]=array('<b>No</b>'=>$i, 
                  '<b>Kode Mata Kuliah</b>'=>$r[kdmatkul],
                  '<b>Nama Mata Kuliah</b>'=>$r[nmmatkul],
				  '<b>Jumlah SKS</b>'=>$r[sks],
				  '<b>Semester Mata Kuliah</b>'=>$r[semester]);
  $i++;
}

$pdf->ezTable($data, '', '', '');

$pdf->ezText("\n                                            Mengetahui");
$pdf->ezText("                                            Ketua Jurusan");
$pdf->ezText("\n");
$pdf->ezText("\n");
$pdf->ezText("\n");
$ketua=$w[nmketua];
$pdf->ezText("                                            {$ketua}");
// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();
break;

}

?>