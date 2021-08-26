<?php 

    require_once("baglan.php");
    header("Content-Type:text/html; charset=Utf-8");

    //php mailer dahil edildi.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    

    
    if (isset($_POST["yparola"])) {
        $GelenSifre = Filtre($_POST["yparola"]);
    }else{
        $GelenSifre = "";
    }

    if (isset($_POST["yparolat"])) {
        $GelenSifreT= Filtre($_POST["yparolat"]);
    }else{
        $GelenSifreT = "";
    }

    if (isset($_GET["Email"])) {
        $GelenEMail = Filtre($_GET["Email"]);
    }else{
        $GelenEMail = "";
    }




    $MD5liSifre     = md5($GelenSifre);
    

   if (($GelenSifre!="")and ($GelenSifreT!="")and ($GelenEMail!="")) {
            
        if ($GelenSifre!=$GelenSifreT) {
           Header("Location:hata.php");
           // echo "şifre şifre tekrarı aynı değil";
            exit();
        }else{
        
                $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=?");
        
                $KontrolSorgusu ->execute([$GelenEMail]);  
                $KontrolSayisi  =$KontrolSorgusu->rowCount();
                $KullaniciKaydi =$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
                
                if ($KontrolSayisi>0) {
                    
                    
                        $UyeGuncellemeSorgusu =  $baglanti->prepare(" UPDATE kullanicilar SET kullanici_parola=? WHERE kullanici_mail=?");
                            
                        $UyeGuncellemeSorgusu->execute([$MD5liSifre,$GelenEMail]); 
            
                        $Kontrol = $UyeGuncellemeSorgusu->rowCount(); 
                }else{
                        Header("Location:hata.php");
                       // echo "kullanıcı kaydı bulunamadı";
                        exit();
                }
                if ($Kontrol>0) {
                        Header("Location: index.php");
                       // echo "kayıt başarılı";
                        
                }else{
                     header("Location:index.php");
                     //echo "beklenmedik bir hata meydana geldi";
                        exit();
                }


            }
   }else{
     header("Location:hata.php");
    // echo "değerler boş";
        exit();
   }
?>
