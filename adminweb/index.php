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
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
	});
</script>
<link rel="shortcut icon" href="favicon.png" />
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
  <div id="footer"> Copyright &copy; 2015 by Ahmadi Surahman All Right Reserved.
</div>
</body>
</html>
<?php
}
?>