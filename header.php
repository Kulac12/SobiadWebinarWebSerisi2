<?php

    
    require_once("baglan.php");
    
   

?>


<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet"> -->

  <!-- KENDİ CSS DOSYAMIZ -->
  <link href="Css/tasarim.css" rel="stylesheet">
  <!-- <link href="/Css/tasarimlar.css" rel="stylesheet">  -->
  <!-- <script type="text/javascript" src="/Js/hareket.js" lang="javascript"></script> -->



  <title>SOBİAD WEBİNAR</title>
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