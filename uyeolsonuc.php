<?php 
 
    require_once("baglan.php");
    header("Content-Type:text/html; charset=Utf-8");

    //php mailer dahil edildi.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    if (isset($_POST["eposta"])) {
        $GelenKullaniciMail = Filtre($_POST["eposta"]);
    }else{
        $GelenKullaniciMail = "";
    }

    if (isset($_POST["etmail"])) {
        $GelenKullaniciMailEt = Filtre($_POST["etmail"]);
    }else{
        $GelenKullaniciMailEt = "";
    }

    $GelenKullaniciMail = $GelenKullaniciMail.$GelenKullaniciMailEt;

    if (isset($_POST["password"])) {
        $GelenSifre = Filtre($_POST["password"]);
    }else{
        $GelenSifre = "";
    }

    if (isset($_POST["passwordT"])) {
        $GelenSifreT= Filtre($_POST["passwordT"]);
    }else{
        $GelenSifreT = "";
    }

    if (isset($_POST["universite"])) {
        $GelenUniversite = Filtre($_POST["universite"]);
    }else{
        $GelenUniversite = "";
    }

    if (isset($_POST["isim"])) {
        $GelenIsim = Filtre($_POST["isim"]);
    }else{
        $GelenIsim = "";
    }

    if (isset($_POST["soyisim"])) {
        $GelenSoyIsim = Filtre($_POST["soyisim"]);
    }else{
        $GelenSoyIsim = "";
    }

    $GelenAdSoyad =  $GelenIsim . " " . $GelenSoyIsim;

    if (isset($_POST["unvan"])) {
        $GelenUnvan = Filtre($_POST["unvan"]);
    }else{
        $GelenUnvan = "";
    }

    if (isset($_POST["telefon"])) {
        $GelenTel = Filtre($_POST["telefon"]);
    }else{
        $GelenTel = "";
    }

    if (isset($_POST["orcid"])) {
        $GelenOrcid = Filtre($_POST["orcid"]);
    }else{
        $GelenOrcid = "";
    }

    if (isset($_POST["temelalan"])) {
        $GelenTemelAlan = Filtre($_POST["temelalan"]);
    }else{
        $GelenTemelAlan = "";
    }

    if (isset($_POST["emailHaber"])) {
        $GelenEmailHaber = Filtre($_POST["emailHaber"]);
    }else{
        $GelenEmailHaber = "";
    }

    if (isset($_POST["telHaber"])) {
        $GelenTelHaber = Filtre($_POST["telHaber"]);
    }else{
        $GelenTelHaber = "";
    }

    $AktivasyonKodu = AktivasyonKoduÜret(); 
    $MD5liSifre     = md5($GelenSifre);




    //eğer e-posta ile daha önce kayıt yapıldıysa kayıt yapılmasına izin vermeyeceğiz

    $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=? ");

    $KontrolSorgusu ->execute([$GelenKullaniciMail]);  
    $KontrolSayisi  =$KontrolSorgusu->rowCount();
    
    if($KontrolSayisi>0){
        echo "HATA<br/> ";
        echo "E-mail adresi başka bir kullanıcı tarafından kullanılmaktadır.";


    }else{
        if ($GelenSifre==$GelenSifreT) {  

                            $MailIcerigiHazirla = "Merhaba Sayın " . $GelenAdSoyad . "<br/>";
                            $MailIcerigiHazirla .= "Sitemize yapmış olduğunuz üyelik kaydını tamamlamak için lütfen 
                            
                            <a href='http://localhost/Wb/aktivasyon.php?AktivasyonKodu=". $AktivasyonKodu ."&Email=" .$GelenKullaniciMail."'>
                            
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
                                $mail->addAddress($GelenKullaniciMail,$GelenAdSoyad  );     //Kime mail gideceği
                                $mail->addReplyTo('bozuk.trenler6@gmail.com','Sobiad Webinar Serisi ');  //mail yanıtla dediğinde hangi maile yanıtın gideceği
                                
    
            
                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Sobiad Webinar Yeni Üyelik Aktivasyonu';               //mailin konusu
                                $mail->msgHTML($MailIcerigiHazirla); 
                            
                                $mail->send();
                                echo 'Mail Gönderildi.';
                            } catch (Exception $e) {
                                echo "Mail Gönderim Hatası <br/> Hata Açıklaması: {$mail->ErrorInfo}";
                            }
    

           
       

        //ilgili kullanıcıyı kayıt ettiğimiz kısım

        $KayıtEkle   = $baglanti->prepare("INSERT INTO kullanicilar(
            kullanici_adi,
            kullanici_soyadi,
            kullanici_ünvan,
            kullanici_parola,
            kullanici_mail,
            kullanici_kurum,
            kullanici_tel,
            kullanici_orcid,
            kullanici_alan,
            kullanici_mailhaber,
            kullanici_telhaber,
            kullanici_kayitTarihi,
            kullanici_aktivasyon_kodu ) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
         
        $KayıtEkle->execute([ 
            $GelenIsim, 
            $GelenSoyIsim,
            $GelenUnvan,
            $MD5liSifre,
            $GelenKullaniciMail,
            $GelenUniversite,
            $GelenTel,
            $GelenOrcid,
            $GelenTemelAlan,
            $GelenEmailHaber,
            $GelenTelHaber,
            $ZamanDamgasi,
            $AktivasyonKodu]);

        $KayitKontrol = $KayıtEkle ->rowCount();

        if ($KayitKontrol>0) {

            echo "Tebrikler<br/> ";
            echo "Kullanıcı kaydınız başarı ile tamamlanmıştır.";
        }else{
            
            header("Location:hata.php");
        }
    }else{
        echo "Girdiğiniz şifre ile Şifre tekrarı aynı değil!";
    }

    }

?>
