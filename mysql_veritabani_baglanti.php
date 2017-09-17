<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>mysql_veritabani_baglanti</title>
</head>

<body>
<?php
	$mysql_baglantisi = mysqli_connect("localhost","root","") or die ("Üzgünüm, MySQL'e bağlanılamadı. Tekrar deneyiniz.");
	
	$veritabani_baglantisi = mysqli_select_db($mysql_baglantisi, "mekadresdefteri05") or die ("Üzgünüm, mekadresdefteri05 adlı veritabanına bağlanılamadı. Tekrar deneyiniz.");
	
	mysqli_query($mysql_baglantisi,"SET CHARSET utf8");
	mysqli_query($mysql_baglantisi,"SET CHARSET SET utf8");
	mysqli_query($mysql_baglantisi,"SET CHARSET 'utf8_general_ci'");
?>
</body>
</html>