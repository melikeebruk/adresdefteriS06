<?php
include ("mysql_veritabani_baglanti.php");
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MEK ADRES DEFTERİ</title>
<link rel="Shortcut Icon"  href="uzayarkaplan01.jpg"  type="image/x-icon">
<style type="text/css">
body {
	background-image: url(uzayarkaplan01.jpg);
    background-repeat:no-repeat;
    background-size: cover;
}
table {
    margin: 1px;
	align: center;
}

th {
    background: #666;
    color: #FFF;
    padding: 10px 10px 20px 60px;
    border-collapse: separate;
    border: 1px solid #000;
}

</style>
</head>
<font face="Verdana Black" size="6" color=#FF3300>
   <p align="center">M.E.K.</font> 
<font face="Arial Black" size="4" color=#FFFFFF>
	 İTÜ PERSONEL ADRES DEFTERİ</p></font>
<body align="center">
<?php 
	error_reporting(false);
	$listele = mysqli_query($mysql_baglantisi, "SELECT * FROM adresdefteri05");
	  echo"<center>GENEL ADRES DEFTERİ<table border=4>
	  <tr>
      <td width=150px><font color='#FF3300'><b>ADI</font></b></td>
      <td  width=150px><font color='#FF3300'><b>SOYADI</font></b></td>
      <td  width=250px><font color='#FF3300'><b>ADRES</font></b></td>
    </tr></table></center>";
	while($oku = mysqli_fetch_array($listele)) {
		echo "<center><table border=3>
    <tr>
      <td  width=150px><font color='#FFFFFF'>{$oku[ad]}</font></td>
      <td  width=150px><font color='#FFFFFF'>{$oku[soyad]}</font></td>
      <td  width=250px><font color='#FFFFFF'>{$oku[adres]}</font></td>
    </tr>
</table></center>";
	}
?>
</body>
</html>