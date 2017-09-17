<?php include("mysql_veritabani_baglanti.php");?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MEK ADRES DEFTERİ</title>

<title>BUL</title>
</head>

<body>

<?php
if(isset($_POST['aranacak'])){
    @$aranacakolan=addslashes(strip_tags(trim($_POST['aranacak'])));
    $bulunacakolan=$_POST['bul'];
    
    if($aranacakolan !=""){
        $arama = mysqli_query($mysql_baglantisi, "SELECT * FROM adresdefteri05 WHERE $bulunacakolan LIKE '%{$aranacakolan}%'") or die ("BOŞ BIRAKTINIZ! LÜTFEN TEKRAR DENEYİNİZ. ".mysql_error() );
        while ($parcabul = mysqli_fetch_array($arama)){
            echo $ad;
            echo $soyad;
            echo $adres;
        }
    }
}
?>
</body>
</html>