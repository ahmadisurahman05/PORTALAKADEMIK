<?php
	if (!isset($_SESSION)){
session_start();
}
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=@$_GET['module'];
$act=@$_GET['act'];

// Hapus Jadwal
if ($module=='jadwal' AND $act=='hapus') {
	mysql_query("DELETE FROM jadwal WHERE id_jadwal='$_GET[id]'");
	header('location:../../../administrator/index.php?module='.$module);
}

// Input Jadwal
elseif ($module=='jadwal' AND $act=='input') {
	mysql_query("INSERT INTO jadwal(tahun,semester,kdmatkul,kdkelas,ruangan,hari,jam_mulai,jam_selesai,rtmuka,timpengajar)
			VALUES('$_POST[tahun]',
					'$_POST[semester]',
					'$_POST[kdmatkul]',
					'$_POST[kdkelas]',
					'$_POST[hari]',
					'$_POST[jam_mulai]',
					'$_POST[jam_selesai]')");
	header('location:../../../administrator/index.php?module='.$module);
}

// Update Jadwal
elseif ($module=='jadwal' AND $act=='update') {
mysql_query("UPDATE jadwal set tahun='$_POST[tahun]',
								semester='$_POST[semester]',
								kdmatkul='$_POST[kdmatkul]',
								kdkelas='$_POST[kdkelas]',
								hari='$_POST[hari]',
								jam_mulai='$_POST[jam_mulai]',
								jam_selesai='$_POST[jam_selesai]'
								WHERE id_jadwal='$_POST[id]'");
	header('location:../../../administrator/index.php?module='.$module);
}
?>



