<?php require_once 'header.php' ?>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        body {
            background-color: rgba(207, 219, 218, 0.555);
        }

        .row {
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px gray;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;

        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #ffc107;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: white;
            border: 1px solid;
            color: #ffc107;
        }

        .link {
            padding-top: 100%;
            
        }

        .link a {
            text-decoration: none;
            color: #aaa;
            font-size: 15px;

        }
        .alt {
            text-decoration: none;
            color: #aaa;
            font-size: 15px;

        }

       
    </style>
</head>

<body>
    <section id="wkayit" class="Form my-4 mx-5">
        <div class=" container ">


            <div class="row g-0">
                

                <div class="col-lg-12 container px-3 pt-0">
                    <div class="col-lg-8 container py-5 ">
                        <img src="Resimler/Bacground/webinar.png" class="img-fluid" alt="webinar resmi">
                    </div>
                    <div class="col-lg-8 container">

                    
                    <h3 class="text-warning">Sobiad Akademi Webinar Serisi</h3>
                    <div class="alt">Kayıt Formu ve Katılım Belgesi Dokümanı</div>
                    <br>
                    <p></p>
                    <p>Her katılımcıya kayıt ve katılım sonrası ismini özel karakod'lu katılım sertifikası dijital
                        ortamda gönderilecektir.</p>
                    <p></p>
                    <p>Aşağıdaki formdaki bilgiler sadece katılım sertifikası için istenmektedir ve başka hiçbir amaçla
                        kullanılmayacaktır.</p>
                    <p></p>
                    <p>Katılım Belgesi istemeyen kullanıcılarımız kayıt olmadan <a class="btn btn-warning"
                            href="https://us02web.zoom.us/j/82792959145" role="button">
                            https://us02web.zoom.us/j/82792959145</a> adresinden etkinliğe erişebilirler.</p>
                    <h4 class="font-weight-blod py-4"></h4>

                </div>
                    <form target="_self" enctype="application/x-www-form-urlencoded" autocomplete="on"
                    accept-charset="utf-8" method="POST" action="http://www.tipjar.com/cgi-bin/test">

                        <!--Fisrt Name -->
                        <div class="col-lg-8 container">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Last name"
                                    aria-label="First name">
                                <label for="floatingInput">Adınız <span class="text-danger">
                                        *
                                    </span></label>
                            </div>
                        </div>
                        <!--Last Name -->
                        <div class="col-lg-8 container">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Last name"
                                    aria-label="Last name">
                                <label for="floatingInput">Soyadınız <span class="text-danger">
                                        *
                                    </span></label>
                            </div>
                        </div>
                        <!--Kurumunuz Name -->
                        <div class="col-lg-8 container">
                            <div class="form-floating mb-3">
                                <select class="form-select form-control">
                                    <option value=""> Kurumunuz <span class="text-danger">
                                            *
                                        </span> </option>
                                    <option value="Abdullah Gül Üniversitesi"> Abdullah Gül Üniversitesi </option>
                                    <option value="Acıbadem Mehmet Ali Aydınlar Üniversitesi"> Acıbadem Mehmet Ali
                                        Aydınlar
                                        Üniversitesi
                                    </option>
                                    <option value="Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi"> Adana
                                        Alparslan
                                        Türkeş Bilim ve
                                        Teknoloji Üniversitesi </option>
                                    <option value="Adıyaman Üniversitesi"> Adıyaman Üniversitesi </option>
                                    <option value="Afyon Kocatepe Üniversitesi"> Afyon Kocatepe Üniversitesi </option>
                                    <option value="Afyonkarahisar Sağlık Bilimleri Üniversitesi"> Afyonkarahisar Sağlık
                                        Bilimleri
                                        Üniversitesi </option>
                                    <option value="Ağrı İbrahim Çeçen Üniversitesi"> Ağrı İbrahim Çeçen Üniversitesi
                                    </option>
                                    <option value="Akdeniz Üniversitesi"> Akdeniz Üniversitesi </option>
                                    <option value="Aksaray Üniversitesi"> Aksaray Üniversitesi </option>
                                    <option value="Alanya Alaaddin Keykubat Üniversitesi"> Alanya Alaaddin Keykubat
                                        Üniversitesi </option>
                                    <option value="Alanya Hamdullah Emin Paşa Üniversitesi"> Alanya Hamdullah Emin Paşa
                                        Üniversitesi
                                    </option>
                                    <option value="Altınbaş Üniversitesi"> Altınbaş Üniversitesi </option>
                                    <option value="Amasya Üniversitesi"> Amasya Üniversitesi </option>
                                    <option value="Anadolu Üniversitesi"> Anadolu Üniversitesi </option>
                                    <option value="Anka Teknoloji Üniversitesi"> Anka Teknoloji Üniversitesi </option>
                                    <option value="Ankara Hacı Bayram Veli Üniversitesi"> Ankara Hacı Bayram Veli
                                        Üniversitesi </option>
                                    <option value="Ankara Medipol Üniversitesi"> Ankara Medipol Üniversitesi </option>
                                    <option value="Ankara Müzik ve Güzel Sanatlar Üniversitesi"> Ankara Müzik ve Güzel
                                        Sanatlar Üniversitesi
                                    </option>
                                    <option value="Ankara Sosyal Bilimler Üniversitesi"> Ankara Sosyal Bilimler
                                        Üniversitesi
                                    </option>
                                    <option value="Ankara Üniversitesi"> Ankara Üniversitesi </option>
                                    <option value="Ankara Yıldırım Beyazıt Üniversitesi"> Ankara Yıldırım Beyazıt
                                        Üniversitesi </option>
                                    <option value="Antalya AKEV Üniversitesi"> Antalya AKEV Üniversitesi </option>
                                    <option value="Antalya Bilim Üniversitesi"> Antalya Bilim Üniversitesi </option>
                                    <option value="Ardahan Üniversitesi"> Ardahan Üniversitesi </option>
                                    <option value="Artvin Çoruh Üniversitesi"> Artvin Çoruh Üniversitesi </option>
                                    <option value="Ataşehir Adıgüzel Meslek Yüksekokulu"> Ataşehir Adıgüzel Meslek
                                        Yüksekokulu </option>
                                    <option value="Atatürk Kültür, Dil ve Tarih Yüksek Kurumu: AYK"> Atatürk Kültür, Dil
                                        ve
                                        Tarih Yüksek
                                        Kurumu: AYK </option>
                                    <option value="Atatürk Üniversitesi"> Atatürk Üniversitesi </option>
                                    <option value="Atılım Üniversitesi"> Atılım Üniversitesi </option>
                                    <option value="Avrasya Üniversitesi	"> Avrasya Üniversitesi </option>
                                    <option value="Avrupa Meslek Yüksekokulu"> Avrupa Meslek Yüksekokulu </option>
                                    <option value="Aydın Adnan Menderes Üniversitesi"> Aydın Adnan Menderes Üniversitesi
                                    </option>
                                    <option value="Bahçeşehir Üniversitesi"> Bahçeşehir Üniversitesi </option>
                                    <option value="Balıkesir Üniversitesi"> Balıkesir Üniversitesi </option>
                                    <option value="Bandırma Onyedi Eylül Üniversitesi"> Bandırma Onyedi Eylül
                                        Üniversitesi
                                    </option>
                                    <option value="Bartın Üniversitesi"> Bartın Üniversitesi </option>
                                    <option value="Başkent Üniversitesi"> Başkent Üniversitesi </option>
                                    <option value="Batman Üniversitesi"> Batman Üniversitesi </option>
                                    <option value="Bayburt Üniversitesi"> Bayburt Üniversitesi </option>
                                    <option value="Beykent Üniversitesi"> Beykent Üniversitesi </option>
                                    <option value="Beykoz Üniversitesi"> Beykoz Üniversitesi </option>
                                    <option value="Bezmiâlem Vakıf Üniversitesi"> Bezmiâlem Vakıf Üniversitesi </option>
                                    <option value="Biruni Üniversitesi"> Biruni Üniversitesi </option>
                                    <option value="Bilecik Şeyh Edebali Üniversitesi"> Bilecik Şeyh Edebali Üniversitesi
                                    </option>
                                    <option value="Bingöl Üniversitesi"> Bingöl Üniversitesi </option>
                                    <option value="Bitlis Eren Üniversitesi"> Bitlis Eren Üniversitesi </option>
                                    <option value="Boğaziçi Üniversitesi"> Boğaziçi Üniversitesi </option>
                                    <option value="Bolu Abant İzzet Baysal Üniversitesi"> Bolu Abant İzzet Baysal
                                        Üniversitesi </option>
                                    <option value="Burdur Mehmet Akif Ersoy Üniversitesi"> Burdur Mehmet Akif Ersoy
                                        Üniversitesi </option>
                                    <option value="Bursa Teknik Üniversitesi"> Bursa Teknik Üniversitesi </option>
                                    <option value="Bursa Uludağ Üniversitesi"> Bursa Uludağ Üniversitesi </option>
                                    <option value="Cumhurbaşkanlığı Millet Kütüphanesi"> Cumhurbaşkanlığı Millet
                                        Kütüphanesi
                                    </option>
                                    <option value="Çağ Üniversitesi"> Çağ Üniversitesi </option>
                                    <option value="Çanakkale Onsekiz Mart Üniversitesi"> Çanakkale Onsekiz Mart
                                        Üniversitesi
                                    </option>
                                    <option value="Çankaya Üniversitesi"> Çankaya Üniversitesi </option>
                                    <option value="Çankırı Karatekin Üniversitesi"> Çankırı Karatekin Üniversitesi
                                    </option>
                                    <option value="Çukurova Üniversitesi"> Çukurova Üniversitesi </option>
                                    <option value="Dicle Üniversitesi"> Dicle Üniversitesi </option>
                                    <option value="Doğuş Üniversitesi"> Doğuş Üniversitesi </option>
                                    <option value="Dokuz Eylül Üniversitesi"> Dokuz Eylül Üniversitesi </option>
                                    <option value="Düzce Üniversitesi"> Düzce Üniversitesi </option>
                                    <option value="Ege Üniversitesi"> Ege Üniversitesi </option>
                                    <option value="Erciyes Üniversitesi"> Erciyes Üniversitesi </option>
                                    <option value="Erzincan Binali Yıldırım Üniversitesi"> Erzincan Binali Yıldırım
                                        Üniversitesi </option>
                                    <option value="Eskişehir Osmangazi Üniversitesi"> Eskişehir Osmangazi Üniversitesi
                                    </option>
                                    <option value="Eskişehir Teknik Üniversitesi"> Eskişehir Teknik Üniversitesi
                                    </option>
                                    <option value="Erzurum Teknik Üniversitesi"> Erzurum Teknik Üniversitesi </option>
                                    <option value="Faruk Saraç Tasarım Meslek Yüksekokulu	"> Faruk Saraç Tasarım Meslek
                                        Yüksekokulu
                                    </option>
                                    <option value="Fatih Sultan Mehmet Vakıf Üniversitesi"> Fatih Sultan Mehmet Vakıf
                                        Üniversitesi </option>
                                    <option value="Fenerbahçe Üniversitesi"> Fenerbahçe Üniversitesi </option>
                                    <option value="Fırat Üniversitesi"> Fırat Üniversitesi </option>
                                    <option value="Galatasaray Üniversitesi"> Galatasaray Üniversitesi </option>
                                    <option value="Gazi Üniversitesi"> Gazi Üniversitesi </option>
                                    <option value="Gaziantep Bilim ve Teknoloji Üniversitesi"> Gaziantep Bilim ve
                                        Teknoloji
                                        Üniversitesi
                                    </option>
                                    <option value="Gaziantep Üniversitesi"> Gaziantep Üniversitesi </option>
                                    <option value="Gebze Teknik Üniversitesi"> Gebze Teknik Üniversitesi </option>
                                    <option value="Giresun Üniversitesi"> Giresun Üniversitesi </option>
                                    <option value="Gümüşhane Üniversitesi"> Gümüşhane Üniversitesi </option>
                                    <option value="Hacettepe Üniversitesi"> Hacettepe Üniversitesi </option>
                                    <option value="Hakkari Üniversitesi"> Hakkari Üniversitesi </option>
                                    <option value="Haliç Üniversitesi"> Haliç Üniversitesi </option>
                                    <option value="Harran Üniversitesi"> Harran Üniversitesi </option>
                                    <option value="Hasan Kalyoncu Üniversitesi"> Hasan Kalyoncu Üniversitesi </option>
                                    <option value="Hatay Mustafa Kemal Üniversitesi"> Hatay Mustafa Kemal Üniversitesi
                                    </option>
                                    <option value="Hitit Üniversitesi"> Hitit Üniversitesi </option>
                                    <option value="Iğdır Üniversitesi"> Iğdır Üniversitesi </option>
                                    <option value="Isparta Uygulamalı Bilimler Üniversitesi"> Isparta Uygulamalı
                                        Bilimler
                                        Üniversitesi
                                    </option>
                                    <option value="Işık Üniversitesi"> Işık Üniversitesi </option>
                                    <option value="International Balkan University"> International Balkan University
                                    </option>
                                    <option value="Işık Üniversitesi"> Işık Üniversitesi </option>
                                    <option value="İbn Haldun Üniversitesi"> İbn Haldun Üniversitesi </option>
                                    <option value="İhsan Doğramacı Bilkent Üniversitesi"> İhsan Doğramacı Bilkent
                                        Üniversitesi </option>
                                    <option value="İnönü Üniversitesi"> İnönü Üniversitesi </option>
                                    <option value="İskenderun Teknik Üniversitesi"> İskenderun Teknik Üniversitesi
                                    </option>
                                    <option value="İstanbul 29 Mayıs Üniversitesi"> İstanbul 29 Mayıs Üniversitesi
                                    </option>
                                    <option value="İstanbul Arel Üniversitesi"> İstanbul Arel Üniversitesi </option>
                                    <option value="İstanbul Atlas Üniversitesi"> İstanbul Atlas Üniversitesi </option>
                                    <option value="İstanbul Aydın Üniversitesi"> İstanbul Aydın Üniversitesi </option>
                                    <option value="İstanbul Ayvansaray Üniversitesi"> İstanbul Ayvansaray Üniversitesi
                                    </option>
                                    <option value="İstanbul Bilgi Üniversitesi"> İstanbul Bilgi Üniversitesi </option>
                                    <option value="İstanbul Bilim Üniversitesi"> İstanbul Bilim Üniversitesi </option>
                                    <option value="İstanbul Esenyurt Üniversitesi"> İstanbul Esenyurt Üniversitesi
                                    </option>
                                    <option value="İstanbul Gedik Üniversitesi"> İstanbul Gedik Üniversitesi </option>
                                    <option value="İstanbul Gelişim Üniversitesi"> İstanbul Gelişim Üniversitesi
                                    </option>
                                    <option value="İstanbul Kent Üniversitesi"> İstanbul Kent Üniversitesi </option>
                                    <option value="İstanbul Kültür Üniversitesi"> İstanbul Kültür Üniversitesi </option>
                                    <option value="İstanbul Medeniyet Üniversitesi"> İstanbul Medeniyet Üniversitesi
                                    </option>
                                    <option value="İstanbul Medipol Üniversitesi"> İstanbul Medipol Üniversitesi
                                    </option>
                                    <option value="İstanbul Rumeli Üniversitesi"> İstanbul Rumeli Üniversitesi </option>
                                    <option value="İstanbul Sabahattin Zaim Üniversitesi"> İstanbul Sabahattin Zaim
                                        Üniversitesi </option>
                                    <option value="İstanbul Şişli Meslek Yüksekokulu"> İstanbul Şişli Meslek Yüksekokulu
                                    </option>
                                    <option value="İstanbul Teknik Üniversitesi"> İstanbul Teknik Üniversitesi </option>
                                    <option value="İstanbul Ticaret Üniversitesi"> İstanbul Ticaret Üniversitesi
                                    </option>
                                    <option value="İstanbul Okan Üniversitesi"> İstanbul Okan Üniversitesi </option>
                                    <option value="İstanbul Yeni Yüzyıl Üniversitesi"> İstanbul Yeni Yüzyıl Üniversitesi
                                    </option>
                                    <option value="İstanbul Üniversitesi"> İstanbul Üniversitesi </option>
                                    <option value="İstanbul Üniversitesi - Cerrahpaşa"> İstanbul Üniversitesi -
                                        Cerrahpaşa
                                    </option>
                                    <option value="İstinye Üniversitesi"> İstinye Üniversitesi </option>
                                    <option value="İzmir Bakırçay Üniversitesi"> İzmir Bakırçay Üniversitesi </option>
                                    <option value="İzmir Demokrasi Üniversitesi"> İzmir Demokrasi Üniversitesi </option>
                                    <option value="İzmir Ekonomi Üniversitesi"> İzmir Ekonomi Üniversitesi </option>
                                    <option value="İzmir Katip Çelebi Üniversitesi"> İzmir Katip Çelebi Üniversitesi
                                    </option>
                                    <option value="İzmir Tınaztepe Üniversitesi	"> İzmir Tınaztepe Üniversitesi
                                    </option>
                                    <option value="İzmir Yüksek Teknoloji Enstitüsü"> İzmir Yüksek Teknoloji Enstitüsü
                                    </option>
                                    <option value="Kadir Has Üniversitesi"> Kadir Has Üniversitesi </option>
                                    <option value="Kafkas Üniversitesi"> Kafkas Üniversitesi </option>
                                    <option value="Kahramanmaraş İstiklal Üniversitesi "> Kahramanmaraş İstiklal
                                        Üniversitesi </option>
                                    <option value="Kahramanmaraş Sütçü İmam Üniversitesi"> Kahramanmaraş Sütçü İmam
                                        Üniversitesi </option>
                                    <option value="Kapadokya Üniversitesi"> Kapadokya Üniversitesi </option>
                                    <option value="Karabük Üniversitesi"> Karabük Üniversitesi </option>
                                    <option value="Karadeniz Teknik Üniversitesi"> Karadeniz Teknik Üniversitesi
                                    </option>
                                    <option value="Karamanoğlu Mehmetbey Üniversitesi"> Karamanoğlu Mehmetbey
                                        Üniversitesi
                                    </option>
                                    <option value="Kastamonu Üniversitesi"> Kastamonu Üniversitesi </option>
                                    <option value="Kavram Meslek Yüksekokulu"> Kavram Meslek Yüksekokulu </option>
                                    <option value="Kayseri Üniversitesi"> Kayseri Üniversitesi </option>
                                    <option value="Kırıkkale Üniversitesi"> Kırıkkale Üniversitesi </option>
                                    <option value="Kırklareli Üniversitesi"> Kırklareli Üniversitesi </option>
                                    <option value="Kırşehir Ahi Evran Üniversitesi"> Kırşehir Ahi Evran Üniversitesi
                                    </option>
                                    <option value="Kilis 7 Aralık Üniversitesi"> Kilis 7 Aralık Üniversitesi </option>
                                    <option value="Kocaeli Üniversitesi"> Kocaeli Üniversitesi </option>
                                    <option value="Koç Üniversitesi"> Koç Üniversitesi </option>
                                    <option value="Konya Gıda ve Tarım Üniversitesi"> Konya Gıda ve Tarım Üniversitesi
                                    </option>
                                    <option value="Konya Teknik Üniversitesi"> Konya Teknik Üniversitesi </option>
                                    <option value="KTO Karatay Üniversitesi"> KTO Karatay Üniversitesi </option>
                                    <option value="Kütahya Dumlupınar Üniversitesi"> Kütahya Dumlupınar Üniversitesi
                                    </option>
                                    <option value="Kütahya Sağlık Bilimleri Üniversitesi"> Kütahya Sağlık Bilimleri
                                        Üniversitesi </option>
                                    <option value="Lokman Hekim Üniversitesi"> Lokman Hekim Üniversitesi </option>
                                    <option value="Malatya Turgut Özal Üniversitesi"> Malatya Turgut Özal Üniversitesi
                                    </option>
                                    <option value="Maltepe Üniversitesi"> Maltepe Üniversitesi </option>
                                    <option value="Manisa Celal Bayar Üniversitesi"> Manisa Celal Bayar Üniversitesi
                                    </option>
                                    <option value="Mardin Artuklu Üniversitesi"> Mardin Artuklu Üniversitesi </option>
                                    <option value="Marmara Üniversitesi"> Marmara Üniversitesi </option>
                                    <option value="MEF Üniversitesi"> MEF Üniversitesi </option>
                                    <option value="Mersin Üniversitesi"> Mersin Üniversitesi </option>
                                    <option value="Milli Eğitim Bakanlığı"> Milli Eğitim Bakanlığı </option>
                                    <option value="Milli Savunma Üniversitesi"> Milli Savunma Üniversitesi </option>
                                    <option value="Mimar Sinan Güzel Sanatlar Üniversitesi"> Mimar Sinan Güzel Sanatlar
                                        Üniversitesi
                                    </option>
                                    <option value="Muğla Sıtkı Koçman Üniversitesi"> Muğla Sıtkı Koçman Üniversitesi
                                    </option>
                                    <option value="Munzur Üniversitesi"> Munzur Üniversitesi </option>
                                    <option value="Muş Alparslan Üniversitesi"> Muş Alparslan Üniversitesi </option>
                                    <option value="Nevşehir Hacı Bektaş Veli Üniversitesi"> Nevşehir Hacı Bektaş Veli
                                        Üniversitesi </option>
                                    <option value="Necmettin Erbakan Üniversitesi"> Necmettin Erbakan Üniversitesi
                                    </option>
                                    <option value="Niğde Ömer Halisdemir Üniversitesi"> Niğde Ömer Halisdemir
                                        Üniversitesi
                                    </option>
                                    <option value="Nişantaşı Üniversitesi"> Nişantaşı Üniversitesi </option>
                                    <option value="Nuh Naci Yazgan Üniversitesi"> Nuh Naci Yazgan Üniversitesi </option>
                                    <option value="Ondokuz Mayıs Üniversitesi"> Ondokuz Mayıs Üniversitesi </option>
                                    <option value="Ordu Üniversitesi"> Ordu Üniversitesi </option>
                                    <option value="Orta Doğu Teknik Üniversitesi"> Orta Doğu Teknik Üniversitesi
                                    </option>
                                    <option value="Osmaniye Korkut Ata Üniversitesi"> Osmaniye Korkut Ata Üniversitesi
                                    </option>
                                    <option value="Ostim Teknik Üniversitesi"> Ostim Teknik Üniversitesi </option>
                                    <option value="Özyeğin Üniversitesi"> Özyeğin Üniversitesi </option>
                                    <option value="Pamukkale Üniversitesi"> Pamukkale Üniversitesi </option>
                                    <option value="Piri Reis Üniversitesi"> Piri Reis Üniversitesi </option>
                                    <option value="Recep Tayyip Erdoğan Üniversitesi"> Recep Tayyip Erdoğan Üniversitesi
                                    </option>
                                    <option value="Sabancı Üniversitesi"> Sabancı Üniversitesi </option>
                                    <option value="Sağlık Bilimleri Üniversitesi"> Sağlık Bilimleri Üniversitesi
                                    </option>
                                    <option value="Sakarya Uygulamalı Bilimler Üniversitesi"> Sakarya Uygulamalı
                                        Bilimler
                                        Üniversitesi
                                    </option>
                                    <option value="Sakarya Üniversitesi"> Sakarya Üniversitesi </option>
                                    <option value="Samsun Üniversitesi"> Samsun Üniversitesi </option>
                                    <option value="Sanko Üniversitesi"> Sanko Üniversitesi </option>
                                    <option value="Selçuk Üniversitesi"> Selçuk Üniversitesi </option>
                                    <option value="Semerkand Bilim ve Medeniyet Üniversitesi"> Semerkand Bilim ve
                                        Medeniyet
                                        Üniversitesi
                                    </option>
                                    <option value="Siirt Üniversitesi"> Siirt Üniversitesi </option>
                                    <option value="Sinop Üniversitesi"> Sinop Üniversitesi </option>
                                    <option value="Sivas Bilim ve Teknoloji Üniversitesi"> Sivas Bilim ve Teknoloji
                                        Üniversitesi </option>
                                    <option value="Sivas Cumhuriyet Üniversitesi"> Sivas Cumhuriyet Üniversitesi
                                    </option>
                                    <option value="Sobiad Üniversitesi"> Sobiad Üniversitesi </option>
                                    <option value="Süleyman Demirel Üniversitesi"> Süleyman Demirel Üniversitesi
                                    </option>
                                    <option value="Şırnak Üniversitesi"> Şırnak Üniversitesi </option>
                                    <option value="Tarsus Üniversitesi"> Tarsus Üniversitesi </option>
                                    <option value="TED Üniversitesi"> TED Üniversitesi </option>
                                    <option value="Tekirdağ Namık Kemal Üniversitesi"> Tekirdağ Namık Kemal Üniversitesi
                                    </option>
                                    <option value="TOBB Ekonomi ve Teknoloji Üniversitesi"> TOBB Ekonomi ve Teknoloji
                                        Üniversitesi </option>
                                    <option value="Tokat Gaziosmanpaşa Üniversitesi"> Tokat Gaziosmanpaşa Üniversitesi
                                    </option>
                                    <option value="Toros Üniversitesi"> Toros Üniversitesi </option>
                                    <option value="Trabzon Üniversitesi"> Trabzon Üniversitesi </option>
                                    <option value="Trakya Üniversitesi"> Trakya Üniversitesi </option>
                                    <option value="Türk-Alman Üniversitesi"> Türk-Alman Üniversitesi </option>
                                    <option value="Türk-Japon Bilim ve Teknoloji Üniversitesi"> Türk-Japon Bilim ve
                                        Teknoloji Üniversitesi
                                    </option>
                                    <option value="Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi	">
                                        Türkiye
                                        Uluslararası
                                        İslam, Bilim ve Teknoloji Üniversitesi </option>
                                    <option value="Türk Hava Kurumu Üniversitesi"> Türk Hava Kurumu Üniversitesi
                                    </option>
                                    <option value="Ufuk Üniversitesi"> Ufuk Üniversitesi </option>
                                    <option value="Uluslararası Final Üniversitesi"> Uluslararası Final Üniversitesi
                                    </option>
                                    <option value="Uşak Üniversitesi"> Uşak Üniversitesi </option>
                                    <option value="Üsküdar Üniversitesi"> Üsküdar Üniversitesi </option>
                                    <option value="Van Yüzüncü Yıl Üniversitesi"> Van Yüzüncü Yıl Üniversitesi </option>
                                    <option value="Yakın Doğu Üniversitesi"> Yakın Doğu Üniversitesi </option>
                                    <option value="Yalova Üniversitesi"> Yalova Üniversitesi </option>
                                    <option value="Yaşar Üniversitesi"> Yaşar Üniversitesi </option>
                                    <option value="Yeditepe Üniversitesi"> Yeditepe Üniversitesi </option>
                                    <option value="Yıldız Teknik Üniversitesi"> Yıldız Teknik Üniversitesi </option>
                                    <option value="Yüksek İhtisas Üniversitesi"> Yüksek İhtisas Üniversitesi </option>
                                    <option value="Yozgat Bozok Üniversitesi"> Yozgat Bozok Üniversitesi </option>
                                    <option value="Zonguldak Bülent Ecevit Üniversitesi"> Zonguldak Bülent Ecevit
                                        Üniversitesi </option>
                                    <option value="Serbest Çalışan"> Serbest Çalışan </option>
                                </select>
                            </div>
                        </div>
                        <!--Email Adres -->
                        <div class="col-lg-8 container">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email adresiniz <span class="text-danger">
                                        *
                                    </span></label>

                            </div>

                        </div>

                        <!--Tel Numaranız -->
                        <div class="col-lg-8 container">
                            <div class="form-floating mb-3">

                                <input type="tel" class="form-control" id="floatingInput"
                                    placeholder="((000) 000-0000 )">
                                <label for="floatingInput">Telefon Numaranız <span class="text-danger">
                                        *
                                    </span>
                                </label>

                            </div>

                        </div>

                        <!--Katılım belgesi talebiniz Numaranız -->
                        <div class="col-lg-8 container">

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Katılım belgesi istiyorum.</label>
                            </div>

                        </div>


                        <!-- Button kısmı-->
                        <div class="col-lg-6 container">

                            <div class="form-row">
                                <div class="col-lg-12 ">
                                    <button type="button" class="btn1 mt-3 mb-5">KAYIT OL</button>
                                </div>
                            </div>

                        </div>
                    </form>


 





                </div>
            </div>

        </div>


    </section>
     <!-- en alt kısımdaki uzun ince bölüm footer/altbilgi  -->
   
    <?php  require_once  'footer.php' ?>