<?php include("mysql_veritabani_baglanti.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
	</style>
<title>kaydet</title>
</head>

<body>
<?php
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$adres = $_POST["adres"];
	mysqli_query($mysql_baglantisi,"insert into adresdefteri05 (ad,soyad,adres) values ('$ad','$soyad','$adres')") or die ("Üzgünüm, kaydınız eklenememiştir. Kontrol edip tekrar deneyiniz" .mysql_error() );

echo "<font face='Arial' size='6' color='##FFFFFF'><p>Bilgileriniz veritabanına kaydedilmiştir. Teşekkür ederim.<br/>Yeni kayıt için aşağıdaki butonu tıklayınız.</p></font>";
?>
<form action="kadin.php" method="POST">
	<input type="submit" name="yenikayit" style=" background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color: #FFFFFF" value="YENİ KAYIT" />
	<a href="kadinlistele.php">
	<input type="button" name="Listele" style="background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color: #FFFFFF" value="LİSTELE">
	</a>
	
	<a href="kadinara.php">
	<input type="button" name="Ara" style="background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color: #FFFFFF" value="ARA">
	</a>
</form>
</body>
</html>