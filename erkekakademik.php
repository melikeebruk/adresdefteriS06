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
	 İTÜ PERSONEL ADRES DEFTERİ</p></font>
<body> 
<div id="adresdefteri" style="width: 400px;">
<form action="erkekakademikkaydet.php" method="POST">
	
	<fieldset>
		<font face="Arial Black" size="3" color=#CCFFFF>
			<b>CİNSİYET:</b></font><br/>
			
			<font face="Arial" size="3" color=#FFFFFF>
				<b>Erkek</b></font><br/>

	</fieldset><br/>
	
	<fieldset>
		<font face="Arial Black" size="3" color=#CCFFFF>
			<b>ÇALIŞMA TÜRÜ:</b></font><br/>
   
			<font face="Arial" size="3" color=#FFFFFF>
				<b>Akademik Personel</b></font><br/>
    
    <fieldset>
		<font face="Arial Black" size="3" color=#CCFFFF>
			<b>ADI:</b></font><br/>
				<input type="text" name="ad" style="width: 350px;" placeholder="Buraya adını giriniz:" required><br/>
     
		<font face="Arial Black" size="3" color=#CCFFFF>
			<b>SOYADI:</b></font><br/>
				<input type="text" name="soyad" style="width: 350px;" placeholder="Buraya soyadını giriniz:" required><br/>
     
		<font face="Arial Black" size="3" color=#CCFFFF>
			<b>ADRESİ:</b></font><br/>
				<textarea type="text" name="adres" rows="8" cols="47" wrap="hard" placeholder="Buraya adresini giriniz:" required></textarea>
	</fieldset><br/>
  
	<input action="erkekakademikkaydet.php" method="POST" type="submit" name="kaydet" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="KAYDET">
	
	<a href="erkekakademiklistele.php">
	<input type="button" name="Listele" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="LİSTELE">
	</a>
	
	<a href="erkekakademikara.php">
	<input type="button" name="Ara" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="ARA">
	</a>
</form>
</div><br>
</body>
</html>