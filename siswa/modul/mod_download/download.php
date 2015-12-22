<?php
//$aksi="modul/mod_download/aksi_download.php";
//$act = $_GET[act];
switch ($act) {
  // Tampil Download
  default:
  echo "<h2>Download</h2><ul>
   <table>
          <tr><th>no</th><th>judul</th><th>nama file</th><th>tgl. posting</th><th>Aksi</th></tr>";

    $p      = new Paging;
    $batas  = 15;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM download ORDER BY id_download DESC LIMIT $posisi,$batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r['tgl_posting']);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[nama_file]</td>
                <td>$tgl</td>
                <td><a href='../downlot.php?file=$r[nama_file]'>Download</a></td>
		        </tr>";
    $no++;
    }
    echo "</table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM download"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

    echo "<div id=paging>$linkHalaman</div><br>";    
	
break;
  

}

?>
