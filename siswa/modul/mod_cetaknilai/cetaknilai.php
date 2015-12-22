<?php
include ('class.ezpdf.php');
  
$pdf = new Cezpdf();
 
// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('fonts/Courier.afm');

$all = $pdf->openObject();

// Tampilkan logo
//$pdf->setStrokeColor(0, 0, 0, 1);
//$pdf->addJpegFromFile('logo.jpg',20,800,69);

// Teks di tengah atas untuk judul header
$pdf->addText(30, 820, 16,'<b>TRANSKRIP NILAI</b>');
$pdf->addText(30, 800, 16,'<b>UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG</b>');
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
	$nima=@$_POST['nim'];
	$hts=substr(@$_POST['tahun'],0,4);
	$ktr=@$_POST['semester'];

$sql =mysql_query("SELECT b.nmmatkul,b.sks,c.nmjur,c.nmketua,d.nama,e.nama_dosen,f.nmkelas,a.* from matakuliah b,jurusan c,mahasiswa d,dosen e,kelas f,krs a WHERE b.kdmatkul=a.kdmatkul AND c.kdjur=a.kdjur AND d.nim=a.nim AND e.kode_dosen=a.kode_dosen AND f.kdkelas = a.kdkelas AND a.nim='$_POST[nim]' ORDER BY a.kdmatkul");

$jml = mysql_num_rows($sql);

if ($jml <>0 ){
$i = 1;
while($r = mysql_fetch_array($sql)){
    $mutu=$r['sks']*$r['angkamutu'];
	$data[$i]=array('<b>No</b>'=>$i, 
                  '<b>Kode Mata Kuliah</b>'=>$r['kdmatkul'],
                  '<b>Nama Mata Kuliah</b>'=>$r['nmmatkul'],
				  '<b>SKS</b>'=>$r['sks'],
				  '<b>Huruf Mutu</b>'=>$r['nilai'],
				  '<b>Angka Mutu</b>'=>$r['angkamutu'],
				  '<b>Mutu</b>'=>$mutu);
  $totalsks=$totalsks+$r['sks'];
  $totalmutu=$totalmutu+$mutu;
$nm=$r['nim'];
$nam=$r['nama'];
//$tah=$w[tahun];
///$tah2=$w[tahun]+1;
$jur=$r['nmjur'];
$ktrg=$r['ket'];
$ketua=$r['nmketua'];
  $i++;
}

$pdf->ezText("\nNim                   : {$nm}");
$pdf->ezText("\nNama Mahasiswa        : {$nam}");
$pdf->ezText("\nJurusan               : {$jur}");
//$pdf->ezText("\nTahun Ajaran          : {$tah}/{$tah2}");
//$pdf->ezText("\nSemester              : {$ktrg}");
$pdf->ezText("\n");

$ipk=$totalmutu/$totalsks;
$ipka=number_format($ipk, 2, '.', ''); 
$pdf->ezTable($data);
$pdf->ezText("\nTotal Mutu                     : {$totalmutu}");
$pdf->ezText("\nTotal SKS                      : {$totalsks}");
$pdf->ezText("\nIndeks Prestasi Kumulatif(IPK) : {$ipka}");

$pdf->ezText("\n                                            Bandung," . date( 'd-m-Y'));
$pdf->ezText("                                            Ketua Jurusan");
$pdf->ezText("\n");
$pdf->ezText("\n");
$pdf->ezText("\n");
$pdf->ezText("                                            {$ketua}");
// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();
}
else {
	echo "Data Transkrip Kosong";
}
?>
