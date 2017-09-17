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
body,td,th {
	width: 100%;
}
div{
	display: table;
    margin: 0 auto;
}
</style>
</head>
<font face="Verdana Black" size="6" color=#FF3300>
   <p align="center">M.E.K.</font> 
<font face="Arial Black" size="4" color=#FFFFFF>
	 İTÜ PERSONEL ADRES DEFTERİ</p></font><br></br>
<body> 
<div id="aramabiçimi>
<form action="bul.php" method="post">
<select name="ara" id="ara" style="background:#FFFFFF; width: 300px; height: 40px; font-family: Arial Black; font-size: 16px; color: #000000">
    <option value="ad">ADI: </option>
    <option value="soyad">SOYADI: </option>
    <option value="adres">ADRESİ: </option>
</select><br></br><br></br>

<input type="text" name="aranacak" style="background:#FFFFFF; width: 300px; height: 40px; font-family: Arial Black; font-size: 12px; color: #000000" placeholder="Buraya yazınız." />
<input type="submit" name="bul" style="background:#FF0000; width: 80px; height: 45px; font-family: Arial Black; font-size: 16px; color: #000000" onClick="location.href='bul.php'"value="BUL"/>
</form>
</div>
</body>
</html>

