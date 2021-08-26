<?php
    require_once("baglan.php");
    
    if (isset($_GET["AktivasyonKodu"])) {
        $GelenAktivasyonKodu = Filtre($_GET["AktivasyonKodu"]);
   }else{
        $GelenAktivasyonKodu = "";
   } 

 
   if (isset($_GET["Email"])) {
       $GelenMail = Filtre($_GET["Email"]);
   }else{
        $GelenMail = "";
   } 


   if (($GelenAktivasyonKodu!="")and ($GelenMail!="")) {
    $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=? AND kullanici_aktivasyon_kodu=?");

    $KontrolSorgusu ->execute([$GelenMail, $GelenAktivasyonKodu]);  
    $KontrolSayisi  =$KontrolSorgusu->rowCount();

        if ($KontrolSayisi>0) {
            $UyeGuncellemeSorgusu =  $baglanti->prepare(" UPDATE kullanicilar SET durum= ? WHERE kullanici_mail=? ");
                  
            $UyeGuncellemeSorgusu->execute([1,$GelenMail]); 

            $Kontrol = $UyeGuncellemeSorgusu->rowCount(); 
                if ($Kontrol>0) {
                    Header("Location: index.php?durum=true");



                }else{
                    header("Location:index.php");
                    exit();
                }



        }else{
            header("Location:index.php");
            exit();
        }



   }else{
       header("Location:index.php");
       exit();
   }
   $baglanti =null;

?>