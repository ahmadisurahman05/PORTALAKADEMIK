<?php
mysql_connect("localhost","root","");
mysql_select_db("pintar");
   
$tampil=mysql_query("select * from tini order by id_berita desc");
   
while($data=mysql_fetch_array($tampil)){
    $isi=$data[isi_berita];
    echo "<h3>$data[judul] </h3>";
    echo "$isi";
}
?>

