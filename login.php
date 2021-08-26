
<?php 
require_once 'baglan.php';
?>
<!DOCTYPE html>
<html lang="tr">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- bu kısım yazı fontumuzun linki -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <!--  html sayfasını css sayfasına bğaldık. -->
    <script type="text/php" src="/PHP/login.php" lang="php" ></script>

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

</head>


<body>
    </head>

    <body>
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light py-3">
      <div class="container-sm">
        <a class="navbar-brand" href="index.php">SOBİAD WEBİNARLAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Html/home.html">Home</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="hakkinda.php">Hakkında</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="webinarlar.php">Webinarlar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="sss.php">S.S.S.</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="iletisim.php">İletişim</a>
            </li>
            
            <!-- Kullanıcı girişi varsa headerda çıkış yap gözükür yoksa giriş yap kayıt ol -->

            <?php if (isset($_SESSION["Kullanici"])) { ?>

              <li class="nav-item">
              <a class="nav-link" href="cikis.php">Çıkış Yap</a>
            </li>
             <?php } else {?> 
            
            <li class="nav-item">
              <a class="nav-link" href="login.php">Giriş Yap</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="sign.php">Kayıt Ol</a>
            </li>

           <?php }?>



        </div>
      </div>
    </nav>
  </header>
        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-12 col-xl-5 ">
                        <img src="Resimler/Bacground/sarı.jpg" class="img-fluid" alt="logo resmi">
                    </div>
                    <div class="col-lg-12 col-xl-7 px-5 pt-5">
                        <h1 class="text-warning display-1">SOBİAD</h1>
                        <div class="alt display-1">KULLANICI GİRİŞİ</div>
                        <P></P>
                        <h4 class="font-weight-blod py-2"></h4>
                        <!-- action="http://www.tipjar.com/cgi-bin/test" -->
                        <form target="_self" enctype="application/x-www-form-urlencoded" autocomplete="on" action="uyegiris.php"
                            accept-charset="utf-8" method="POST" >

                            <!-- Email kısmı-->
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <label for="eposta">E-Posta</label>
                                    <input type="email" required autofocus id="mail" placeholder="Email-Address"
                                        name="eposta" class="form-control my-3 p-4">
                                </div>
                            </div>
                            <!-- Password kısmı-->
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <label for="password">Parola</label>
                                    <input type="password" required id="pasw" placeholder="Parola" maxlength="15"
                                        minlength="8" name="password" class="form-control my-3 p-4">

                                </div>
                            </div>
                            

                            <!-- Check kısmı-->
                            <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="Check1" id="Check1">
                                <label class="form-check-label" for="Check1">Beni Hatırla</label>
                            </div> -->

                            <!-- Button kısmı-->
                            <div class="form-row">
                                <div class="col-lg-12 ">
                                    <button type="submit" class="btn1 mt-3 mb-5">GİRİŞ YAP</button>
                                </div>
                            </div>




                        </form>
                        <div class="link">
                            <a id="sl" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Parolamı
                                Unuttum</a>
                            <p>Hesabınız yok mu? <a href="sign.php">Buraya Tıklayınız</a> </p>
 

                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Parolamı Unuttum</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form target="_self" 
                                            autocomplete="off" accept-charset="utf-8" method="POST"
                                            action="parolamiunuttumislem.php">
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="eposta2">E-Posta</label>
                                                        <input type="email" required autofocus id="mail2"
                                                            placeholder="Email-Address" name="eposta2"
                                                            class="form-control my-3 p-2">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Parolamı Sıfırla</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </section>

        <footer>
    <div class="container-fluid bg-warning text-center py-4 lead-text-light">
      NO &copy; 2015-<?php echo date("Y") ?> SOBİAD ATIF DİZİNİ
    </div>
  </footer>


    </body>

</html>