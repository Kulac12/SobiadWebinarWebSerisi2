-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ağu 2021, 18:08:53
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sobiadwebinar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_anahtar` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo` tinyint(1) NOT NULL,
  `ayar_sitelinki` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_anahtar`, `ayar_logo`, `ayar_sitelinki`) VALUES
(2, 'SOBİAD WEBİNARLAR', 'Sobiad Atıf Dizini ile 400.000\'in üzerinde makalede atıf arayın. İçerikte Arama Yapın ve Makale İndirin-Anasayfa', 'sobiad, atıf dizini, index, atif, Sosyal Bilimler Atıf, Atıf Tarama, Atıf Arama, Atıf Bulma, Atıf Dizini , SOBİAD, Sosyal Bilimler, Türkiye, Türk, webinar, kayıt, ', 0, 'http://localhost/Wb/index.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(250) NOT NULL,
  `iletisim_isimsoyisim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_isimsoyisim`, `iletisim_mail`, `iletisim_mesaj`) VALUES
(1, 'Sena Yıldırım', 'kulacedanur460@gmail.com', 'DENEME:12 vtys deneme:1'),
(2, 'Sena Yıldırım', 'kulacedanur460@gmail.com', 'DENEME:13 vtys deneme:2'),
(3, 'KORAY AVCI', 'kulacedanur460@gmail.com', 'ALERT DENEME:4'),
(4, 'Sisli', 'kulacedanur460@gmail.com', 'DENEME:14'),
(5, 'Edanur Kulaç', 'kulacedanur460@gmail.com', 'İyi günler;\r\nŞu sıralar hayat nasıl?'),
(6, 'Sedanur Kulaç', 'sedanurkulac@hotmail.com', 'İyi günler;\r\nBEn SEDA');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ünvan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_parola` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_kurum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_orcid` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_alan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mailhaber` tinyint(1) NOT NULL,
  `kullanici_telhaber` tinyint(1) NOT NULL,
  `kullanici_kayitTarihi` int(10) NOT NULL,
  `kullanici_aktivasyon_kodu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_ünvan`, `kullanici_parola`, `kullanici_mail`, `kullanici_kurum`, `kullanici_tel`, `kullanici_orcid`, `kullanici_alan`, `kullanici_mailhaber`, `kullanici_telhaber`, `kullanici_kayitTarihi`, `kullanici_aktivasyon_kodu`, `durum`) VALUES
(1, 'Engin', 'Pelerin', 'Doç.Dr.', '123456789', 'edanur_664@adanabtu.edu.tr', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '5368364529', '12dr65s5d5', 'Eğitim Bilimleri ve Öğretmen Yetiştirme', 0, 0, 0, '0', 0),
(2, 'Nuriye', '', '', '45457878', 'edanur_664', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '', '111111111111111', '', 0, 0, 1627631515, '0', 0),
(3, 'info', '', '', '45454556', 'kazım', 'İstanbul Medipol Üniversitesi', '', '9945', '', 0, 0, 1627631735, '0', 0),
(4, 'info', '', '', '55555555', 'lopad', 'Gazi Üniversitesi', '', '8888888', '', 0, 0, 1627631821, '0', 0),
(5, 'Pandemi', 'PandemiSoyad', 'Prof.Dr.', '123456789', 'çankaya', 'Çankaya Üniversitesi', '777777', '7878', 'Ziraat ve Orman ve Su Ürünleri', 0, 0, 1627632135, '0', 0),
(8, 'DEneme', 'Sela', 'Dr.Öğretim Üyesi', '123456789', 'deneme', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '78787878787878', '55555555555555', 'Spor Bilimleri', 0, 0, 1627635869, '0', 1),
(9, 'DEnemeALti', 'Sela', 'Dr.Öğretim Üyesi', '123456789', '', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '78787878787878', '55555555555555', 'Spor Bilimleri', 0, 0, 1627635938, '0', 1),
(10, 'DEnemeALti', 'Sela', 'Dr.Öğretim Üyesi', '123456789', '@adanabtu.edu.tr', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '78787878787878', '55555555555555', 'Spor Bilimleri', 0, 0, 1627636043, '0', 1),
(11, 'Nuriye', 'edanur', 'Doç.Dr.', '123456789', 'edanur78', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '78787878787878', '111111111111111', 'Güzel Sanatlar', 0, 0, 1627636115, '0', 1),
(12, 'Nuriye', 'edanu', 'Doç.Dr.', '123456789', 'edanur_55', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '44444444444444', '111111111111111', 'Eğitim Bilimleri ve Öğretmen Yetiştirme', 0, 0, 1627636335, '0', 1),
(13, 'Ahemt', 'Melek', 'Okutman', '123456789', 'deneme4@adanabtu.edu.tr', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '78787878787878', '111111111111111', 'Sosyal, Beşeri ve İdari Bilimler', 0, 0, 1627636579, '0', 1),
(14, 'Akdeniz', 'AkdenizSoyad', 'Doç.Dr.', '25f9e794323b453885f5181f1b624d0b', 'kulacedanur460@adu.edu.tr', 'Akdeniz Üniversitesi', '123', '123', 'Fen Bilimleri ve Matematik', 0, 0, 1628153087, '9999-9999-9999', 1),
(15, 'Akdeniz', 'AkdenizSoyad', 'Doç.Dr.', '25f9e794323b453885f5181f1b624d0b', 'kulacedanur856@adu.edu.tr', 'Akdeniz Üniversitesi', '123', '123', 'Fen Bilimleri ve Matematik', 0, 0, 1628153232, '10000-10000-10000', 1),
(16, 'Akdeniz', 'AkdenizSoyad', 'Doç.Dr.', '25f9e794323b453885f5181f1b624d0b', 'kulacedanur45@adu.edu.tr', 'Akdeniz Üniversitesi', '123', '123', 'Fen Bilimleri ve Matematik', 0, 0, 1628153306, '11935-96640-26051', 1),
(20, 'BOZUK', 'PARA', 'Okutman', '04c0c9efb30415a7e69071491c87cbe8', 'bozuk.trenler6@gmail.com', 'Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi', '123', '55555555555555', 'Fen Bilimleri ve Matematik', 0, 0, 1628166208, '91705-15810-27843', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`),
  ADD UNIQUE KEY `kullanici_mail` (`kullanici_mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
