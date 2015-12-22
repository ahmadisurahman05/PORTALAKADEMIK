<?php
if (!isset($_SESSION)){
session_start();
}
 if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else {
	$aksi = "modul/mod_user/aksi_user.php";
	switch(@$_GET['act']){
		// Tampil User
		default:
		echo "<h2>User</h2>
		<input type=button value='Tambah User' onclick=\"window.location.href='?module=user&act=tambahuser';\">
		
		<table>
			<tr><th>No.</th><th class='judultable'><a href=$_SERVER[PHP_SELF]?module=user&by=id_user>Username</a></th><th class='judultable'><a href=$_SERVER[PHP_SELF]?module=user&by=nama>Nama Lengkap</a></th><th class='judultable'><a href=$_SERVER[PHP_SELF]?module=user&by=email>Email</a></th><th class='judultable'><a href=$_SERVER[PHP_SELF]?module=user&by=telp>No. Telp/HP</a></th><th>Aksi</th></tr>";
		
		if (@$_GET['by']=='nama') {
			$orderBy = 'nama_lengkap';
		}
		elseif (@$_GET['by']=='email') {
			$orderBy = 'email';
		}
		elseif (@$_GET['by']=='telp') {
			$orderBy = 'no_telp';
		}
		else {
			$orderBy = 'id_user';
		}
				
		$tampil=mysql_query("SELECT * FROM users ORDER BY $orderBy");
		$no=1;
		while($r=mysql_fetch_array($tampil)) {
			echo "<tr><td>$no</td>
					<td>$r[id_user]</td>
					<td>$r[nama_lengkap]</td>
					<td><a href=mailto:$r[email]>$r[email]</a></td>
					<td>$r[no_telp]</td>
					<td><a href=?module=user&act=edituser&id=$r[id_user]><img src='images/edit-icon.gif' alt='edit' /></a> &nbsp; 
						<a href=$aksi?module=user&act=hapus&id=$r[id_user]><img src='images/hapus-icon.gif' alt='hapus' /></a></td>
				</tr>";
			$no++;
		}
		
	echo "</table>";
	break;

	case "tambahuser":
	echo "<h2>Tambah User</h2>
		<form method=POST action='$aksi?module=user&act=input'>
		<table>
			<tr>
				<td>Username</td>
				<td> : <input type=text name='username'></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : <input type=text name='password'></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : <input type=text name='nama_lengkap' size=30></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td> : <input type=text name='email' size=30></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td> : <input type=text name='no_telp' size=20></td>
			</tr>
			<tr>
				<td colspan=2><input type=submit value=Simpan><input type=button value=Batal onclick=self.history.back()></td>
			</tr>
		</table>
	</form>";
	break;

	case "edituser":
	$edit=mysql_query("SELECT * FROM users WHERE id_user='$_GET[id]'");
	$r=mysql_fetch_array($edit);

	echo "<h2>Edit User</h2>
	<form method=POST action=$aksi?module=user&act=update>
	<input type=hidden name=id value='$r[id_user]'>

	<table>
	<tr>
		<td>Username</td>
		<td> : <input type=text name='username' value='$r[id_user]'></td>
	</tr>
	<tr>
		<td>Password</td>
		<td> : <input type=text name='password'> *)</td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td> : <input type=text name='nama_lengkap' size=30 value='$r[nama_lengkap]'></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td> : <input type=text name='email' size=30 value='$r[email]'></td>
	</tr>
	<tr>
		<td>No. Telp</td>
		<td> : <input type=text name='no_telp' size=30 value='$r[no_telp]'></td>
	</tr>";

	if ($r['blokir']=='N') {
		echo "<tr><td>Blokir</td>
				<td> : <input type=radio name='blokir' value='Y'> Y
				<input type=radio name='blokir' value='N' checked> N </td></tr>";
	}
	else {
		echo "<tr><td>Blokir</td>
				<td> : <input type=radio name='blokir' value='Y' checked> Y
				<input type=radio name='blokir' value='N'> N </td></tr>";
	}
	echo "<tr><td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.</td></tr>
		<tr><td colspan=2><input type=submit value=Simpan><input type=button value=Batal onclick=self.history.back()></td></tr>
		</table></form>";
	break;
	}
}
?>