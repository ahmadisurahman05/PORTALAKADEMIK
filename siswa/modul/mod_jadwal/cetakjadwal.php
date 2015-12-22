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
$pdf->addText(30, 820, 12,'<b>JADWAL KULIAH</b>');
$pdf->addText(30, 800, 12,'<b>UNIVERSITAS ISLAM NEGERI SUNAN DUNUNG DJATI BANDUNG</b>');
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

$hts=substr($_POST['tahun'],0,4);
$tampiljdwl = mysql_query("SELECT a.*,b.nmmatkul from jadwal a inner join matakuliah b on a.kdmatkul=b.kdmatkul AND a.tahun='$hts' order by a.hari desc");

$b=$_POST['tahun']+1;

$jml = mysql_num_rows($tampiljdwl);

if ($jml <>0 ){
$i = 1;
while($r = mysql_fetch_array($tampiljdwl)){
    $data[$i]=array('<b>Tahun Ajaran</b>'=>$r['tahun'],
                  '<b>Kode-MK</b>'=>$r['kdmatkul'],
				  '<b>Nama-MK</b>'=>$r['nmmatkul'],
				  '<b>Kelas</b>'=>$r['kdkelas'],
				  '<b>Hari</b>'=>$r['hari'],
				  '<b>Jam Mulai</b>'=>$r['jam_mulai'],
				  '<b>Jam Selesai</b>'=>$r['jam_selesai'],
				  '<b>Kd.Dosen</b>'=>$r['kode_dosen']);
  

$ketua=$r['nmketua'];
  $i++;
}
$pdf->ezTable($data, '', '', '');
$pdf->ezText("\n                                            Bandung," . date( 'd-m-Y'));

// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();
}
else {
	echo "Jadwal belum ada";
}
?>
