<?php 
session_start(); ob_start();

 try {
     $baglanti=new PDO('mysql:host=localhost; dbname=sobiadwebinar; charset=utf8', 'root' , '');
     
 } catch (Exception $e) {
    echo "VTYS bağlantı hatası : ". $e->getMessage();
    die();
 } 

 

 function Filtre($Deger){ 
     $Bir   =   trim($Deger);
     $Iki   =   strip_tags($Bir);
     $Uc    =   htmlspecialchars($Iki,ENT_QUOTES);
     $Sonuc =   $Uc;
     return $Sonuc;
 }

 $ZamanDamgasi = time();

 function AktivasyonKoduÜret(){
    $IlkBesli      =  rand(10000,99999);
    $IkinciBesli   =  rand(10000,99999);
    $UcuncuBesli   =  rand(10000,99999);
    $Kod           =  $IlkBesli . "-" .$IkinciBesli ."-".$UcuncuBesli;
    $Sonuc         = $Kod;
    return $Sonuc; 
 } 


 if (isset($_SESSION["Kullanici"])) {
     $UyelerSorgusu   =$baglanti->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi=?");
     $UyelerSorgusu->execute([$_SESSION["Kullanici"]]);
     $UyelerKayitSayisi=$UyelerSorgusu ->rowCount();
     $UyelerKayit=$UyelerSorgusu  ->fetch(PDO::FETCH_ASSOC);

     if ($UyelerKayitSayisi>0) {
         $UyeninAdi=$UyelerKayit["kullanici_adi"];
     }else{
         $UyeninAdi="";
     }
 }

 

?>