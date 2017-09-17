<?php include("mysql_veritabani_baglanti.php");?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MEK ADRES DEFTERİ</title>
/*<link rel="Shortcut Icon"  href="uzayarkaplan01.jpg"  type="image/x-icon">
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
	 $sira_no = $_POST["sira_no"];

     $yenile = mysqli_query($mysql_baglantisi, "Update adresdefteri05 SET ad='$ad', soyad='$soyad', adres='$adres' WHERE sira_no='$sira_no' ");

     if($yenile) {
	     echo "<font face='Arial' size='6' color='##FFFFFF'><p>Bilgileriniz veritabanına kaydedilmiştir. Teşekkür ederim.</p></font>";
	 }
	 else {
	     echo"<font face='Arial' size='6' color='##FFFFFF'><p>Üzgünüm, bilgileriniz veritabanına kaydedilmemiştir. Tekrar deneyiniz.</p></font>";
	 }
?>
	<a href="erkekdiger.php">
	<input type="button" name="anasayfa" style="background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color:#FFFFFF" value="ANASAYFA">
	</a>
	
	<a href="erkekdigerlistele.php">
	<input type="button" name="Listele" style="background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color: #FFFFFF" value="LİSTELE">
	</a>
	
	<a href="erkekdigerara.php">
	<input type="button" name="Ara" style="background:#FF0033; width: 120px; height: 40px; font-family: Arial Black; font-size: 16px; color: #FFFFFF" value="ARA">
	</a>
</body>
</html>