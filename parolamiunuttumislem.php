<?php
    require_once 'baglan.php';
    header("Content-Type:text/html; charset=Utf-8");

    //php mailer dahil edildi.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if (isset($_POST["eposta2"])) {
         $GelenEMail = Filtre($_POST["eposta2"]);
    }else{
         $GelenEMail = "";
    }


    if (($GelenEMail!="")) {
        
        $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=?");

        $KontrolSorgusu ->execute([$GelenEMail]);  
        $KontrolSayisi  =$KontrolSorgusu->rowCount();
        $KullaniciKaydi =$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
        
        if ($KontrolSayisi>0) {
            $MailIcerigiHazirla = "Merhaba Sayın " . $KullaniciKaydi["kullanici_adi"] . "<br/>";
            $MailIcerigiHazirla .= "Sitemiz üzerinde bulunan hesabınızın parolasını sıfırlamak için lütfen
            
            <a href='http://localhost/Wb/yeniparolaolustur.php?AktivasyonKodu=". $KullaniciKaydi["kullanici_aktivasyon_kodu"] ."&Email=" . $KullaniciKaydi["kullanici_mail"] ."'>
            
            BURAYA TIKLAYINIZ.  
            </a>

            <br/> <br/>";
            $MailIcerigiHazirla .= "Saygılarımızla iyi çalışmalar. <br/>";
            $MailIcerigiHazirla .= "SOBİAD WEBİNAR SERİSİ ";

            //bir mail sınıfı başlattık. 
            $mail = new PHPMailer(true);
            try {
                //Sunucu Ayarları-bu kısım ayarlanacak
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host          = 'smtp.gmail.com';                     //kullanıdığız mailin sunucu adresi  ; gmail kullanıyorsak-> smtp.gmail.com
                $mail->SMTPAuth      = true;                                   //Enable SMTP authentication
                $mail->CharSet='UTF-8';
            
            
                $mail->Username      = 'bozuk.trenler6@gmail.com';                     //SMTP username
                $mail->Password      = 'Pansuman664';                               //SMTP password
                $mail->SMTPSecure    = 'tls';            //Enable implicit TLS encryption
                $mail->Port          = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $mail->SMTPOptions   = array(
                                            'ssl' => [
                                                'verify_peer'      => false,
                                                'verify_peer_name' =>false,
                                                'allow_self_signed'=>true,
                                            ],
                                        );


                //Recipients
                $mail->setFrom('bozuk.trenler6@gmail.com','Sobiad Webinar Serisi ');    //kimden mail gidecek, Mail ismi
                $mail->addAddress($GelenEMail  );     //Kime mail gideceği
                $mail->addReplyTo('bozuk.trenler6@gmail.com','Sobiad Webinar Serisi ');  //mail yanıtla dediğinde hangi maile yanıtın gideceği
                


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Sobiad Webinar Parola Sıfırlama';               //mailin konusu
                $mail->msgHTML($MailIcerigiHazirla); 
            
                $mail->send();
                echo 'Mail Gönderildi.';
            } catch (Exception $e) {
                echo "Mail Gönderim Hatası <br/> Hata Açıklaması: {$mail->ErrorInfo}";
                header("Location: hata.php");
            }

 





 



        }else{
            header("Location: hata.php");
        }




    }else{
        header("Location: hata.php");
    }








?>