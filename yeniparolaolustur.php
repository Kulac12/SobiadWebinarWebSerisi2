
<?php 
require_once 'baglan.php';
require_once 'header.php' 

?>

    


    <title>Login Form</title>
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
            padding-top: 10px;

        }

        .link a {
            text-decoration: none;
            color: #aaa;
            font-size: 15px;

        }

        #sl {
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


<?php 
       require_once("baglan.php");
    
       if (isset($_GET["AktivasyonKodu"])) {
           $GelenAktivasyonKodu = Filtre($_GET["AktivasyonKodu"]);
       }else{
           $GelenAktivasyonKodu = "";
       }
   
       if (isset($_GET["Email"])) {
           $GelenEMail = Filtre($_GET["Email"]);
       }else{
           $GelenEMail = "";
       }
       
      
       if (($GelenAktivasyonKodu!="")and ($GelenEMail!="")) {
            $KontrolSorgusu     = $baglanti->prepare("SELECT*FROM kullanicilar WHERE kullanici_mail=? AND kullanici_aktivasyon_kodu=?");
    
            $KontrolSorgusu ->execute([$GelenEMail,$GelenAktivasyonKodu ]);  
            $KontrolSayisi  =$KontrolSorgusu->rowCount();
            $KullaniciKaydi=$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

        
            if ($KontrolSayisi >0) {
        
   
?>           <section class="Form my-4 mx-5">
<div class="container">
    <div class="row g-0">

        <div class="col-lg-12 col-xl-5 ">
            <img src="Resimler/Bacground/sarı.jpg" class="img-fluid" alt="logo resmi">
        </div>
        <div class="col-lg-12 col-xl-7 px-5 pt-5">
            <h1 class="text-warning display-1">SOBİAD </h1>
            <div class="alt display-1">PAROLA SIFIRLAMA  </div>
            <P></P>
            <h4 class="font-weight-blod py-2"></h4>
            
            <form target="_self" enctype="application/x-www-form-urlencoded" autocomplete="on" action="yeniparolaolustursonuc.php?Email=<?php echo $GelenEMail;?>"
                accept-charset="utf-8" method="POST" >

                
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="yparola">Yeni Parola Giriniz</label>
                        <input type="password" required autofocus id="mail" placeholder="Yeni Parola Giriniz*"
                            name="yparola" class="form-control my-3 p-4">
                    </div>
                </div>

                <!-- Password kısmı-->
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="yparolat">Yeni Parola Tekrarı Giriniz</label>
                        <input type="password" required id="pasw" placeholder="Yeni Parola Tekrarı Giriniz*" maxlength="15"
                            minlength="8" name="yparolat" class="form-control my-3 p-4">

                    </div>
                </div>
                

               
                <div class="form-row">
                    <div class="col-lg-12 ">
                        <button type="submit" class="btn1 mt-3 mb-5">PAROLAMI SIFIRLA</button>
                    </div>
                </div>




            </form>
            
        </div> 

    </div>

</div>


</section>
    <?php 
            }else{
                header("Location:index.php");
                exit();
            }
        }else{
            header("Location:index.php");
            exit();
        }
    
     ?>     



   
   
   
       
   


        


<?php   require_once  'footer.php' ?>