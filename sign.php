<?php 
    require_once("baglan.php");
    if (isset($_SESSION["Kullanici"])) {
        header("Location:index.php");
        exit();
    }else{

   
?>

<?php require_once 'header.php' ?>


<head>
    <style>
         .formTasarim{
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px rgb(187, 184, 184);
         }
    </style>
</head>

<body>
   
     

<section>
    <div class="container-sm  p-3 mb-5 bg-body rounded  ">
        <div class="row formTasarim justify-content-center py-5 ">


            <br>
            

            
            <div class="col-md-12 col-lg-6 mb-5 ">
                <P>
                    <strong>Sayın Akademisyen; </strong> <br> <br>

                    Bireysel kayıt sayesinde atıf ve yayınlarınız ile ilgili haberleri <strong>mail ve sms yolu ile
                    </strong>
                    size gönderebiliriz. <br>
                    Ayrıca bireysel kayıt, profilinizi yönetme imkanı sağlar. <strong>Bireysel kayıt</strong> kurumsal
                    üyelikleri sahip üniversitelerin akademisyenlerine <strong>tamamen ücretsizdir</strong> ve kurumunuz
                    SOBIAD'a abone olduğu süre boyunca geçerlidir.
                </P>
                
            </div>

            <div class="row  justify-content-center ">
                <div class="col-md-12 col-lg-6 mb-5">

                    <form class="border box-shadow p-3 rounded row" target="_self" enctype="application/x-www-form-urlencoded" autocomplete="on"
                        accept-charset="utf-8" method="POST" action="uyeolsonuc.php">

                        <!--KURUMUNUZ KISMI-->
                        <h2 class="display-5 text-warning py-3">KAYIT OL</h2>
                        <div class="col-12 mb-4 ">
                            <label for="universite"> Kurumunuz: </label>
                            <select id="unvan" name="universite" autofocus
                                class="form-select form-control my-2 border-warning "
                                aria-label="Default select example">
                                <option value="Seçiniz" disabled="">Seçiniz</option>

                                <option value="Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi">Adana Alparslan
                                    Türkeş Bilim ve Teknoloji Üniversitesi</option>

                                <option value="Adıyaman Üniversitesi">Adıyaman Üniversitesi</option>

                                <option value="Afyon Kocatepe Üniversitesi">Afyon Kocatepe Üniversitesi</option>

                                <option value="Ağrı İbrahim Çeçen Üniversitesi">Ağrı İbrahim Çeçen Üniversitesi</option>

                                <option value="Akdeniz Üniversitesi">Akdeniz Üniversitesi</option>

                                <option value="Aksaray Üniversitesi">Aksaray Üniversitesi</option>

                                <option value="Alanya Alaaddin Keykubat Üniversitesi">Alanya Alaaddin Keykubat
                                    Üniversitesi
                                </option>

                                <option value="Altınbaş Üniversitesi">Altınbaş Üniversitesi</option>

                                <option value="Amasya Üniversitesi">Amasya Üniversitesi</option>

                                <option value="Anadolu Üniversitesi">Anadolu Üniversitesi</option>

                                <option value="Ankara Hacı Bayram Veli Üniversitesi">Ankara Hacı Bayram Veli
                                    Üniversitesi
                                </option>

                                <option value="Ankara Müzik ve Güzel Sanatlar Üniversitesi">Ankara Müzik ve Güzel
                                    Sanatlar
                                    Üniversitesi</option>

                                <option value="Ankara Sosyal Bilimler Üniversitesi">Ankara Sosyal Bilimler Üniversitesi
                                </option>

                                <option value="Ankara Yıldırım Beyazıt Üniversitesi">Ankara Yıldırım Beyazıt
                                    Üniversitesi
                                </option>

                                <option value="Ardahan Üniversitesi">Ardahan Üniversitesi</option>

                                <option value="Artvin Çoruh Üniversitesi">Artvin Çoruh Üniversitesi</option>

                                <option value="Atatürk Kültür, Dil ve Tarih Yüksek Kurumu: AYK">Atatürk Kültür, Dil ve
                                    Tarih
                                    Yüksek Kurumu: AYK</option>

                                <option value="Atatürk Üniversitesi">Atatürk Üniversitesi</option>

                                <option value="Atılım Üniversitesi">Atılım Üniversitesi</option>

                                <option value="Aydın Adnan Menderes Üniversitesi">Aydın Adnan Menderes Üniversitesi
                                </option>

                                <option value="Balıkesir Üniversitesi">Balıkesir Üniversitesi</option>

                                <option value="Bandırma Onyedi Eylül Üniversitesi">Bandırma Onyedi Eylül Üniversitesi
                                </option>

                                <option value="Bartın Üniversitesi">Bartın Üniversitesi</option>

                                <option value="Bayburt Üniversitesi">Bayburt Üniversitesi</option>

                                <option value="Beykent Üniversitesi">Beykent Üniversitesi</option>

                                <option value="Bilecik Şeyh Edebali Üniversitesi">Bilecik Şeyh Edebali Üniversitesi
                                </option>

                                <option value="Bingöl Üniversitesi">Bingöl Üniversitesi</option>

                                <option value="Bitlis Eren Üniversitesi">Bitlis Eren Üniversitesi</option>

                                <option value="Bolu Abant İzzet Baysal Üniversitesi">Bolu Abant İzzet Baysal
                                    Üniversitesi
                                </option>

                                <option value="Burdur Mehmet Akif Ersoy Üniversitesi">Burdur Mehmet Akif Ersoy
                                    Üniversitesi
                                </option>

                                <option value="Bursa Uludağ Üniversitesi">Bursa Uludağ Üniversitesi</option>

                                <option value="Çanakkale Onsekiz Mart Üniversitesi">Çanakkale Onsekiz Mart Üniversitesi
                                </option>

                                <option value="Çankaya Üniversitesi">Çankaya Üniversitesi</option>

                                <option value="Çankırı Karatekin Üniversitesi">Çankırı Karatekin Üniversitesi</option>

                                <option value="Çukurova Üniversitesi">Çukurova Üniversitesi</option>

                                <option value="Cumhurbaşkanlığı Millet Kütüphanesi">Cumhurbaşkanlığı Millet Kütüphanesi
                                </option>

                                <option value="Dicle Üniversitesi">Dicle Üniversitesi</option>

                                <option value="Dokuz Eylül Üniversitesi">Dokuz Eylül Üniversitesi</option>

                                <option value="Düzce Üniversitesi">Düzce Üniversitesi</option>

                                <option value="Ege Üniversitesi">Ege Üniversitesi</option>

                                <option value="Erciyes Üniversitesi">Erciyes Üniversitesi</option>

                                <option value="Erzincan Binali Yıldırım Üniversitesi">Erzincan Binali Yıldırım
                                    Üniversitesi
                                </option>

                                <option value="Eskişehir Osmangazi Üniversitesi">Eskişehir Osmangazi Üniversitesi
                                </option>

                                <option value="Fatih Sultan Mehmet Vakıf Üniversitesi">Fatih Sultan Mehmet Vakıf
                                    Üniversitesi</option>

                                <option value="Fırat Üniversitesi">Fırat Üniversitesi</option>

                                <option value="Galatasaray Üniversitesi">Galatasaray Üniversitesi</option>

                                <option value="Gazi Üniversitesi">Gazi Üniversitesi</option>

                                <option value="Gaziantep Üniversitesi">Gaziantep Üniversitesi</option>

                                <option value="Giresun Üniversitesi">Giresun Üniversitesi</option>

                                <option value="Gümüşhane Üniversitesi">Gümüşhane Üniversitesi</option>

                                <option value="Hakkari Üniversitesi">Hakkari Üniversitesi</option>

                                <option value="Harran Üniversitesi">Harran Üniversitesi</option>

                                <option value="Hatay Mustafa Kemal Üniversitesi">Hatay Mustafa Kemal Üniversitesi
                                </option>

                                <option value="Hitit Üniversitesi">Hitit Üniversitesi</option>

                                <option value="İbn Haldun Üniversitesi">İbn Haldun Üniversitesi</option>

                                <option value="Iğdır Üniversitesi">Iğdır Üniversitesi</option>

                                <option value="International Balkan University">International Balkan University</option>

                                <option value="Işık Üniversitesi">Işık Üniversitesi</option>

                                <option value="İskenderun Teknik Üniversitesi">İskenderun Teknik Üniversitesi</option>

                                <option value="İstanbul 29 Mayıs Üniversitesi">İstanbul 29 Mayıs Üniversitesi</option>

                                <option value="İstanbul Aydın Üniversitesi">İstanbul Aydın Üniversitesi</option>

                                <option value="İstanbul Bilgi Üniversitesi">İstanbul Bilgi Üniversitesi</option>

                                <option value="İstanbul Esenyurt Üniversitesi">İstanbul Esenyurt Üniversitesi</option>

                                <option value="İstanbul Gelişim Üniversitesi">İstanbul Gelişim Üniversitesi</option>

                                <option value="İstanbul Kent Üniversitesi">İstanbul Kent Üniversitesi</option>

                                <option value="İstanbul Kültür Üniversitesi">İstanbul Kültür Üniversitesi</option>

                                <option value="İstanbul Medeniyet Üniversitesi">İstanbul Medeniyet Üniversitesi</option>

                                <option value="İstanbul Medipol Üniversitesi">İstanbul Medipol Üniversitesi</option>

                                <option value="İstanbul Sabahattin Zaim Üniversitesi">İstanbul Sabahattin Zaim
                                    Üniversitesi
                                </option>

                                <option value="İstanbul Teknik Üniversitesi">İstanbul Teknik Üniversitesi</option>

                                <option value="İstanbul Üniversitesi">İstanbul Üniversitesi</option>

                                <option value="İstanbul Üniversitesi - Cerrahpaşa">İstanbul Üniversitesi - Cerrahpaşa
                                </option>

                                <option value="İzmir Katip Çelebi Üniversitesi">İzmir Katip Çelebi Üniversitesi</option>

                                <option value="Kadir Has Üniversitesi">Kadir Has Üniversitesi</option>

                                <option value="Kafkas Üniversitesi">Kafkas Üniversitesi</option>

                                <option value="Kahramanmaraş Sütçü İmam Üniversitesi">Kahramanmaraş Sütçü İmam
                                    Üniversitesi
                                </option>

                                <option value="Kapadokya Üniversitesi">Kapadokya Üniversitesi</option>

                                <option value="Karabük Üniversitesi">Karabük Üniversitesi</option>

                                <option value="Karadeniz Teknik Üniversitesi">Karadeniz Teknik Üniversitesi</option>

                                <option value="Karamanoğlu Mehmetbey Üniversitesi">Karamanoğlu Mehmetbey Üniversitesi
                                </option>

                                <option value="Kastamonu Üniversitesi">Kastamonu Üniversitesi</option>

                                <option value="Kilis 7 Aralık Üniversitesi">Kilis 7 Aralık Üniversitesi</option>

                                <option value="Kırıkkale Üniversitesi">Kırıkkale Üniversitesi</option>

                                <option value="Kırşehir Ahi Evran Üniversitesi">Kırşehir Ahi Evran Üniversitesi</option>

                                <option value="Kocaeli Üniversitesi">Kocaeli Üniversitesi</option>

                                <option value="KTO Karatay Üniversitesi">KTO Karatay Üniversitesi</option>

                                <option value="Kütahya Dumlupınar Üniversitesi">Kütahya Dumlupınar Üniversitesi</option>

                                <option value="Maltepe Üniversitesi">Maltepe Üniversitesi</option>

                                <option value="Manisa Celal Bayar Üniversitesi">Manisa Celal Bayar Üniversitesi</option>

                                <option value="Mardin Artuklu Üniversitesi">Mardin Artuklu Üniversitesi</option>

                                <option value="Marmara Üniversitesi">Marmara Üniversitesi</option>

                                <option value="Mersin Üniversitesi">Mersin Üniversitesi</option>

                                <option value="Milli Savunma Üniversitesi">Milli Savunma Üniversitesi</option>

                                <option value="Mimar Sinan Güzel Sanatlar Üniversitesi">Mimar Sinan Güzel Sanatlar
                                    Üniversitesi</option>

                                <option value="Muğla Sıtkı Koçman Üniversitesi">Muğla Sıtkı Koçman Üniversitesi</option>

                                <option value="Munzur Üniversitesi">Munzur Üniversitesi</option>

                                <option value="Muş Alparslan Üniversitesi">Muş Alparslan Üniversitesi</option>

                                <option value="Necmettin Erbakan Üniversitesi">Necmettin Erbakan Üniversitesi</option>

                                <option value="Niğde Ömer Halisdemir Üniversitesi">Niğde Ömer Halisdemir Üniversitesi
                                </option>

                                <option value="Nişantaşı Üniversitesi">Nişantaşı Üniversitesi</option>

                                <option value="Ondokuz Mayıs Üniversitesi">Ondokuz Mayıs Üniversitesi</option>

                                <option value="Ordu Üniversitesi">Ordu Üniversitesi</option>

                                <option value="Osmaniye Korkut Ata Üniversitesi">Osmaniye Korkut Ata Üniversitesi
                                </option>

                                <option value="Özyeğin Üniversitesi">Özyeğin Üniversitesi</option>

                                <option value="Recep Tayyip Erdoğan Üniversitesi">Recep Tayyip Erdoğan Üniversitesi
                                </option>

                                <option value="Sağlık Bilimleri Üniversitesi">Sağlık Bilimleri Üniversitesi</option>

                                <option value="Sakarya Üniversitesi">Sakarya Üniversitesi</option>

                                <option value="Selçuk Üniversitesi">Selçuk Üniversitesi</option>

                                <option value="Siirt Üniversitesi">Siirt Üniversitesi</option>

                                <option value="Sinop Üniversitesi">Sinop Üniversitesi</option>

                                <option value="Şırnak Üniversitesi">Şırnak Üniversitesi</option>

                                <option value="Süleyman Demirel Üniversitesi">Süleyman Demirel Üniversitesi</option>

                                <option value="Tarsus Üniversitesi">Tarsus Üniversitesi</option>

                                <option value="TED Üniversitesi">TED Üniversitesi</option>

                                <option value="Tekirdağ Namık Kemal Üniversitesi">Tekirdağ Namık Kemal Üniversitesi
                                </option>

                                <option value="Tokat Gaziosmanpaşa Üniversitesi">Tokat Gaziosmanpaşa Üniversitesi
                                </option>

                                <option value="Trabzon Üniversitesi">Trabzon Üniversitesi</option>

                                <option value="Trakya Üniversitesi">Trakya Üniversitesi</option>

                                <option value="Türk Hava Kurumu Üniversitesi">Türk Hava Kurumu Üniversitesi</option>

                                <option value="Uluslararası Final Üniversitesi">Uluslararası Final Üniversitesi</option>

                                <option value="Uşak Üniversitesi">Uşak Üniversitesi</option>

                                <option value="Van Yüzüncü Yıl Üniversitesi">Van Yüzüncü Yıl Üniversitesi</option>

                                <option value="Yalova Üniversitesi">Yalova Üniversitesi</option>

                                <option value="Yıldız Teknik Üniversitesi">Yıldız Teknik Üniversitesi</option>

                                <option value="Yozgat Bozok Üniversitesi">Yozgat Bozok Üniversitesi</option>

                                <option value="Zonguldak Bülent Ecevit Üniversitesi">Zonguldak Bülent Ecevit
                                    Üniversitesi
                                </option>
                            </select>






                        </div>
                        <!--KURUMUNUZ KISMI BİTTİ-->

                        <!--Adınız- soyadınız KISMI-->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="isim"> Adınız:</label>
                            <input pattern="[A-z a-z]{3,40}" title="Minimum 3 karakter olmak üzere adınızı giriniz."
                                type="text" id="firstname" placeholder="Adınız" name="isim" required
                                aria-label="First name" class="form-control border-warning  my-2">
                        </div>

                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="soyisim"> Soyadınız:</label>
                            <input type="text" pattern="[A-za-z]{3,40}"
                                title="Minimum 3 karakter olmak üzere soyadınızı giriniz. Rakam ve geçersiz karakterler kullanmadığınızdan emin olunuz."
                                name="soyisim" required id="lastname" placeholder="Soyadınız" aria-label="Last name"
                                class="form-control border-warning my-2">
                        </div>


                        <!--Ünvan Kısmı-->
                        <div class="col-12 mb-4">
                            <label class="control-label" for="unvan">Ünvanınız:</label>
                            <select class="form-select form-control border-warning my-2" id="unvan" name="unvan"
                                aria-label="Default select example">
                                <option value="Seçiniz">Seçiniz</option>
                                <option value="Prof.Dr.">Prof.Dr.</option>
                                <option value="Doç.Dr.">Doç.Dr.</option>
                                <option value="Dr.Öğretim Üyesi">Dr.Öğretim Üyesi</option>
                                <option value="Arş. Gör.">Arş. Gör.</option>
                                <option value="Öğr. Gör.">Öğr. Gör.</option>
                                <option value="Okutman">Okutman</option>
                                <option value="Diğer">Diğer</option>
                            </select>

                        </div>
                        <!--Ünvan kısmı KISMI BİTTİ-->

                        <!--PAROLA -->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="password">Parola:</label>
                            <input type="password" required id="pasw" placeholder="Parola" maxlength="15" minlength="8"
                                name="password" class="form-control border-warning my-2">
                        </div>
                        <!--PAROLA TEkRARI-->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="passwordT">Parola Tekrarı:</label>
                            <input type="password" required id="pasw" placeholder="Parola Tekrarı" maxlength="15"
                                minlength="8" name="passwordT" class="form-control border-warning my-2">

                        </div>

                        <!--KURUM MAİLİNİZ-->
                        <div class="col-12 mb-4">
                            <label for="eposta">Kurumsal E-Mail Adresiniz:</label>
                            <div class="input-group mb-3 my-2 ">
                                <input type="text"  required id="mail" name="eposta" class="form-control border-warning  "
                                    placeholder="Kurumsal e-mail adresiniz" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <span id="basic-addon2">
                                    <select style="background-color: rgb(233, 236, 239);" class="form-select  "
                                        aria-label="Default select example" name="etmail">
                                        <option value="@adanabtu.edu.tr">@adanabtu.edu.tr</option>

                                        <option>@gmail.com</option>

                                        <option>@adiyaman.edu.tr</option>



                                        <option>@aku.edu.tr</option>



                                        <option>@agri.edu.tr</option>



                                        <option>@akdeniz.edu.tr</option>



                                        <option>@aksaray.edu.tr</option>



                                        <option>@alanya.edu.tr</option>



                                        <option>@altinbas.edu.tr</option>



                                        <option>@amasya.edu.tr</option>



                                        <option>@anadolu.edu.tr</option>



                                        <option>@hbv.edu.tr</option>



                                        <option>@mgu.edu.tr</option>



                                        <option>@asbu.edu.tr</option>



                                        <option>@ybu.edu.tr</option>



                                        <option>@ardahan.edu.tr</option>



                                        <option>@artvin.edu.tr</option>



                                        <option>@ayk.gov.tr</option>



                                        <option>@atauni.edu.tr </option>



                                        <option>@atilim.edu.tr</option>



                                        <option>@adu.edu.tr</option>



                                        <option>@balikesir.edu.tr</option>



                                        <option>@bandirma.edu.tr</option>



                                        <option>@bartin.edu.tr</option>



                                        <option>@bayburt.edu.tr</option>



                                        <option>@beykent.edu.tr</option>



                                        <option>@bilecik.edu.tr</option>



                                        <option>@bingol.edu.tr</option>



                                        <option>@beu.edu.tr</option>



                                        <option>@ibu.edu.tr</option>



                                        <option>@mehmetakif.edu.tr</option>



                                        <option>@uludag.edu.tr</option>



                                        <option>@comu.edu.tr</option>



                                        <option>@cankaya.edu.tr</option>



                                        <option>@karatekin.edu.tr</option>



                                        <option>@cu.edu.tr</option>



                                        <option>@tccb.gov.tr</option>



                                        <option>@dicle.edu.tr</option>



                                        <option>@deu.edu.tr</option>



                                        <option>@duzce.edu.tr</option>



                                        <option>@ege.edu.tr</option>



                                        <option>@erciyes.edu.tr</option>



                                        <option>@erzincan.edu.tr</option>



                                        <option>@ogu.edu.tr</option>



                                        <option>@fsm.edu.tr</option>



                                        <option>@firat.edu.tr</option>



                                        <option>@gsu.edu.tr</option>



                                        <option>@gazi.edu.tr</option>



                                        <option>@gantep.edu.tr</option>



                                        <option>@giresun.edu.tr</option>



                                        <option>@gumushane.edu.tr</option>



                                        <option>@hakkari.edu.tr</option>



                                        <option>@harran.edu.tr</option>



                                        <option>@mku.edu.tr</option>



                                        <option>@hitit.edu.tr</option>



                                        <option>@ihu.edu.tr</option>



                                        <option>@igdir.edu.tr</option>



                                        <option>@ibu.edu.mk</option>



                                        <option>@isikun.edu.tr</option>

                                        <option>@iste.edu.tr</option>


                                        <option>@29mayis.edu.tr</option>

                                        <option>@aydin.edu.tr</option>

                                        <option>@bilgi.edu.tr</option>

                                        <option>@esenyurt.edu.tr</option>

                                        <option>@gelisim.edu.tr</option>

                                        <option>@kent.edu.tr</option>

                                        <option>@iku.edu.tr</option>

                                        <option>@medeniyet.edu.tr</option>


                                        <option>@medipol.edu.tr</option>


                                        <option>@izu.edu.tr</option>

                                        <option>@itu.edu.tr</option>

                                        <option>@istanbul.edu.tr</option>

                                        <option>@istanbulc.edu.tr</option>

                                        <option>@ikc.edu.tr</option>

                                        <option>@khas.edu.tr</option>

                                        <option>@kafkas.edu.tr</option>
                                        <option>@ksu.edu.tr</option>
                                        <option>@kapadokya.edu.tr</option>
                                        <option>@karabuk.edu.tr</option>
                                        <option>@ktu.edu.tr</option>

                                        <option>@kmu.edu.tr</option>


                                        <option>@kastamonu.edu.tr</option>

                                        <option>@kilis.edu.tr</option>
                                        <option>@kku.edu.tr</option>
                                        <option>@ahievran.edu.tr</option>
                                        <option>@kocaeli.edu.tr</option>
                                        <option>@karatay.edu.tr</option>
                                        <option>@dpu.edu.tr</option>

                                        <option>@maltepe.edu.tr</option>
                                        <option>@cbu.edu.tr</option>
                                        <option>@artuklu.edu.tr</option>



                                        <option>@marmara.edu.tr</option>



                                        <option>@mersin.edu.tr</option>



                                        <option>@msu.edu.tr</option>



                                        <option>@msgsu.edu.tr</option>



                                        <option>@mu.edu.tr</option>



                                        <option>@munzur.edu.tr</option>



                                        <option>@alparslan.edu.tr</option>



                                        <option>@erbakan.edu.tr</option>



                                        <option>@ohu.edu.tr</option>



                                        <option>@nisantasi.edu.tr</option>



                                        <option>@omu.edu.tr</option>



                                        <option>@odu.edu.tr</option>



                                        <option>@osmaniye.edu.tr</option>



                                        <option>@ozyegin.edu.tr</option>



                                        <option>@erdogan.edu.tr</option>

                                        <option>@sbu.edu.tr</option>
                                        <option>@sakarya.edu.tr</option>



                                        <option>@selcuk.edu.tr</option>


                                        <option>@siirt.edu.tr</option>

                                        <option>@sinop.edu.tr</option>

                                        <option>@sirnak.edu.tr</option>
                                        <option>@sdu.edu.tr</option>
                                        <option>@tarsus.edu.tr</option>

                                        <option>@tedu.edu.tr</option>

                                        <option>@nku.edu.tr</option>

                                        <option>@gop.edu.tr</option>

                                        <option>@trabzon.edu.tr</option>

                                        <option>@trakya.edu.tr</option>

                                        <option>@thk.edu.tr</option>

                                        <option>@final.edu.tr</option>

                                        <option>@usak.edu.tr</option>

                                        <option>@yyu.edu.tr</option>
                                        <option>@yalova.edu.tr</option>
                                        <option>@yildiz.edu.tr</option>
                                        <option>@bozok.edu.tr</option>
                                        <option>@beun.edu.tr</option>
                                        <option>@atu.edu.tr</option>

                                        <option>@ogr.akdeniz.edu.tr</option>

                                        <option>@asu.edu.tr</option>

                                        <option>@tdk.gov.tr</option>

                                        <option>@ogr.atauni.edu.tr</option>

                                        <option>@bitliseren.edu.tr</option>

                                        <option>@ogr.uludag.edu.tr</option>
                                        <option>@edu.tr</option>
                                        <option>@ogr.duzce.edu.tr</option>
                                        <option>@ebyu.edu.tr</option>
                                        <option>@fatihsultan.edu.tr</option>
                                        <option>@stu.fsm.edu.tr</option>
                                        <option>@mail2.gantep.edu.tr</option>
                                        <option>@std.izu.edu.tr </option>
                                        <option>@ogr.iu.edu.tr</option>
                                        <option>@istanbul.edu.tr
                                        </option>
                                        <option>@stu.khas.edu.tr</option>
                                        <option>@ogr.ksu.edu.tr</option>
                                        <option>@ogr.ktu.edu.tr</option>
                                        <option>@dumlupinar.edu.tr</option>
                                        <option>@st.maltepe.edu.tr</option>
                                        <option>@mcbu.edu.tr</option>
                                        <option>@ogr.cbu.edu.tr</option>
                                        <option>@marun.edu.tr</option>
                                        <option>@kho.edu.tr</option>
                                        <option>@dho.edu.tr</option>
                                        <option>@ogr.erbakan.edu.tr</option>
                                        <option>@ozu.edu.tr</option>
                                        <option>@ogr.sakarya.edu.tr</option>

                                        <option>@ogr.selcuk.edu.tr</option>
                                    </select></span>
                            </div>
                        </div>

                        <!-- Telefon -->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="telefon">Cep Telefonunuz:</label>
                            <input type="tel" required id="tel" placeholder="Telefon numaranız" name="telefon"
                                class="form-control border-warning my-2">

                        </div>
                        <!-- ORCID ID -->

                        <div class="col-md-12 col-lg-6 mb-4">
                            <label for="orcid">(Opsiyonel) Orcid ID:</label>
                            <input type="text" required id="orcid" placeholder="Orcid ID" name="orcid"
                                class="form-control border-warning my-2">

                        </div>

                        <!-- TEMEL ALAN-->
                        <div class="col-12 mb-4">
                            <label class="control-label" for="temelalan">Temel Alan:</label>
                            <select class="form-select form-control border-warning my-2" id="temelalan" name="temelalan"
                                aria-label="Default select example">
                                <option value="Eğitim Bilimleri ve Öğretmen Yetiştirme">Eğitim Bilimleri ve Öğretmen
                                    Yetiştirme</option>
                                <option value="Fen Bilimleri ve Matematik">Fen Bilimleri ve Matematik</option>
                                <option value="Filoloji">Filoloji</option>
                                <option value="Güzel Sanatlar">Güzel Sanatlar</option>
                                <option value="Hukuk">Hukuk</option>
                                <option value="İlahiyat">İlahiyat</option>
                                <option value="Mimarlık, Planlama, Tasarım">Mimarlık, Planlama, Tasarım</option>
                                <option value="Mühendislik">Mühendislik</option>
                                <option value="Sağlık Bilimleri">Sağlık Bilimleri</option>
                                <option value="Sosyal, Beşeri ve İdari Bilimler">Sosyal, Beşeri ve İdari Bilimler
                                </option>
                                <option value="Ziraat ve Orman ve Su Ürünleri">Ziraat ve Orman ve Su Ürünleri</option>
                                <option value="Spor Bilimleri">Spor Bilimleri</option>
                            </select>

                        </div>





                        <!-- check ALAN-->
                        <div class="col-12 mb-4">
                            <label class="control-label">Seçenekler (İsteğe Bağlı):</label>
                            <div class="form-check my-3 ">

                                <input class="form-check-input btn-outline-warning" name="emailHaber" type="checkbox"
                                    id="emailHaber">
                                <label class="form-check-label" for="emailHaber">
                                    Atıf Geldiğinde E-Mail ile Haber Ver
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input btn-outline-warning" name="telHaber" type="checkbox"
                                    id="telHaber">
                                <label class="form-check-label " for="telHaber">
                                    Atıf Geldiğinde Cep Telefonu Mesajı ile Haber Ver
                                </label>
                            </div>
                        </div>












                        <div class="d-grid my-5">
                            <button class="btn btn-outline-warning rounded-0 text-uppercase" type="submit">
                                KAYIT OL
                            </button>

                        </div>

                    </form>
                    <!-- FORM GÖNDERME KSIMI BİTTİ-->


                </div>
            
        </div>

        </div>
    </div>
     <!-- en alt kısımdaki uzun ince bölüm footer/altbilgi  -->
    </section>
 
    <?php  require_once  'footer.php' ?>
<?php  }
?>