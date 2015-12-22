<?php
if (!isset($_SESSION)){
session_start();
}
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<link href='../config/adminstyle.css' rel='stylesheet' type='text/css'>
	<center>Untuk mengakses modul Siakad, Anda harus login <br>";
	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}
else
{
?>

<html>
<head>
<title>SISTEM INFORMASI AKADEMIK</title>
<link href="../config/adminstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"> 
  <div id="menu"> 
    <ul>
      <li><a href=?module=home>&#187; Home</a></li>
      <?php include "menu.php"; ?>
      <li><a href=logout.php>&#187; Logout</a></li>
    </ul>
    <p>&nbsp;</p>
  </div>
  <div id="content"> 
    <?php include "content.php"; ?>
  </div>
  <div id="footer"> 
    <center>
      Copyright &copy; 2015 by Ahmadi Surahman All Right Reserved.
    </center>
  </div>
</div>
</body>
</html>
<?php
}
?>