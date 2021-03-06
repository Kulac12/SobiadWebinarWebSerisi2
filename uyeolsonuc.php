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

    $AktivasyonKodu = AktivasyonKodu??ret(); 
    $MD5liSifre     = md5($GelenSifre);




    //e??er e-posta ile daha ??nce kay??t yap??ld??ysa kay??t yap??lmas??na izin vermeyece??iz

    $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=? ");

    $KontrolSorgusu ->execute([$GelenKullaniciMail]);  
    $KontrolSayisi  =$KontrolSorgusu->rowCount();
    
    if($KontrolSayisi>0){
        echo "HATA<br/> ";
        echo "E-mail adresi ba??ka bir kullan??c?? taraf??ndan kullan??lmaktad??r.";


    }else{
        if ($GelenSifre==$GelenSifreT) {  

                            $MailIcerigiHazirla = "Merhaba Say??n " . $GelenAdSoyad . "<br/>";
                            $MailIcerigiHazirla .= "Sitemize yapm???? oldu??unuz ??yelik kayd??n?? tamamlamak i??in l??tfen 
                            
                            <a href='http://localhost/Wb/aktivasyon.php?AktivasyonKodu=". $AktivasyonKodu ."&Email=" .$GelenKullaniciMail."'>
                            
                            BURAYA TIKLAYINIZ. 
                            </a>

                            <br/> <br/>";
                            $MailIcerigiHazirla .= "Sayg??lar??m??zla iyi ??al????malar. <br/>";
                            $MailIcerigiHazirla .= "SOB??AD WEB??NAR SER??S?? ";

                            //bir mail s??n??f?? ba??latt??k. 
                            $mail = new PHPMailer(true);

                            try {
                                //Sunucu Ayarlar??-bu k??s??m ayarlanacak
                                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host          = 'smtp.gmail.com';                     //kullan??d??????z mailin sunucu adresi  ; gmail kullan??yorsak-> smtp.gmail.com
                                $mail->SMTPAuth      = true;                                   //Enable SMTP authentication
                                $mail->CharSet='UTF-8';
                            
                            
                                $mail->Username      = '';                     //SMTP username
                                $mail->Password      = '';                               //SMTP password
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
                                $mail->addAddress($GelenKullaniciMail,$GelenAdSoyad  );     //Kime mail gidece??i
                                $mail->addReplyTo('bozuk.trenler6@gmail.com','Sobiad Webinar Serisi ');  //mail yan??tla dedi??inde hangi maile yan??t??n gidece??i
                                
    
            
                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Sobiad Webinar Yeni ??yelik Aktivasyonu';               //mailin konusu
                                $mail->msgHTML($MailIcerigiHazirla); 
                            
                                $mail->send();
                                echo 'Mail G??nderildi.';
                            } catch (Exception $e) {
                                echo "Mail G??nderim Hatas?? <br/> Hata A????klamas??: {$mail->ErrorInfo}";
                            }
    

           
       

        //ilgili kullan??c??y?? kay??t etti??imiz k??s??m

        $Kay??tEkle   = $baglanti->prepare("INSERT INTO kullanicilar(
            kullanici_adi,
            kullanici_soyadi,
            kullanici_??nvan,
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
         
        $Kay??tEkle->execute([ 
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

        $KayitKontrol = $Kay??tEkle ->rowCount();

        if ($KayitKontrol>0) {

            echo "Tebrikler<br/> ";
            echo "Kullan??c?? kayd??n??z ba??ar?? ile tamamlanm????t??r.";
        }else{
            
            header("Location:hata.php");
        }
    }else{
        echo "Girdi??iniz ??ifre ile ??ifre tekrar?? ayn?? de??il!";
    }

    }

?>
