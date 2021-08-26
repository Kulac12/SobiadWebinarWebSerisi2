<?php
    require_once 'baglan.php';
    header("Content-Type:text/html; charset=Utf-8");

    //php mailer dahil edildi.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if (isset($_POST["cisim"])) {
         $GelenIsimSoyisim = Filtre($_POST["cisim"]);
    }else{
         $GelenIsimSoyisim = "";
    }


    if (isset($_POST["cmail"])) {
        $GelenMail = Filtre($_POST["cmail"]);
    }else{
         $GelenMail = "";
    }


    if (isset($_POST["cmesaj"])) {
         $GelenMesaj = Filtre($_POST["cmesaj"]);
    }else{
         $GelenMesaj = "";
    }





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
        $mail->setFrom($GelenMail, $GelenIsimSoyisim);    //kimden mail gidecek, Mail ismi
        $mail->addAddress('bozuk.trenler6@gmail.com','Sobiad Webinar Serisi' );     //Kime mail gideceği
        $mail->addReplyTo($GelenMail, $GelenIsimSoyisim);  //mail yanıtla dediğinde hangi maile yanıtın gideceği
        

        //Attachments  maillerin içinde gidecek olan resim, dökman vs
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Sobiad Webinar İletişim Formu';               //mailin konusu
        $mail->msgHTML($GelenMesaj); 
      
        $mail->send();
        echo 'Mail Gönderildi.';

        
                    
                        //ilgili kullanıcıyı kayıt ettiğimiz kısım

                        $KayıtEkle   = $baglanti->prepare("INSERT INTO iletisim (
                            
                            iletisim_isimsoyisim,
                            iletisim_mail,
                            iletisim_mesaj
                             ) values (?,?,?)");
                        
                        $KayıtEkle->execute([ 
                            $GelenIsimSoyisim, 
                            $GelenMail,
                            $GelenMesaj 
                            ]);

                        $KayitKontrol = $KayıtEkle ->rowCount();

                        if ($KayitKontrol>0) {
                            Header("Location: iletisim.php?durum=true");
                            echo "Tebrikler<br/> ";
                            echo "Mesaj Gönderimi başarılı.";
                        }else{
                            Header("Location: iletisim.php?durum=false"); 
                            echo "Mail Gönderim Hatası <br/> Hata Açıklaması: {$mail->ErrorInfo}";
                        } 
                        


    } catch (Exception $e) {
        echo "Mail Gönderim Hatası <br/> Hata Açıklaması: {$mail->ErrorInfo}";
    }

?>