<?php
include "../../../config/koneksi.php";
echo "<select name=kdmatkul>";
$sql2=mysql_query("SELECT * FROM matakuliah WHERE kdjur='$_GET[kode]'");
while ($row=mysql_fetch_array($sql2)){
    echo "<option value=$row[kdmatkul]>$row[nmmatkul]</option>";
}
echo "</select>";
?>
