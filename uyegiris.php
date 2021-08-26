

<?php 

    require_once("baglan.php");
    
    if (isset($_POST["eposta"])) {
        $GelenKullaniciMail = Filtre($_POST["eposta"]);
    }else{
        $GelenKullaniciMail = "";
    }

    if (isset($_POST["password"])) {
        $GelenSifre = Filtre($_POST["password"]);
    }else{
        $GelenSifre = "";
    }
    
    $MD5liSifre     = md5($GelenSifre);



    $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=? AND kullanici_parola=?");

    $KontrolSorgusu ->execute([$GelenKullaniciMail,$MD5liSifre ]);  
    $KontrolSayisi  =$KontrolSorgusu->rowCount();

    if ($KontrolSayisi >0) {
        $_SESSION["Kullanici"] = $GelenKullaniciMail;
        header("Location:index.php");
    }else{
        echo "HATA<br/> ";
        echo "Girilen bilgiler ile eşleşen kullanıcı kaydı bulunmamaktadır.";
        
    }



?>
