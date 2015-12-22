<?php
echo "<form method=POST action=cek_login.php>
<table bgcolor=#400101 width=100% border=0 cellpadding=2>
<tr><td><div id=menu>Jenis User</div></td><td> : 
<select name='jenis_user'>
	<option value=pegawai selected>Admin</option>
	<option value=dosen>Dosen</option>
	<option value=mahasiswa>Mahasiswa</option>
</select>
</td></tr>
<tr><td><div id=menu>Username</div></td><td> : 
<input type=text name='id_user' size='25'></td></tr>
<tr><td><div id=menu>Password<div></td><td> :
<input type=password name='password' size='25'></td></tr>
<tr><td colspan=2><input type=submit value=Login></td></tr>
</table>
</form>";
?>