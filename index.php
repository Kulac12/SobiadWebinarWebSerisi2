
<?php require_once 'header.php' ?>

<?php
                if (@$_GET['durum']=="true") { 
                ?>

                    <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="far fa-check-circle mx-2"></i>
                    <div>
                        Aktivasyon İşleminiz başarılı. 
                    </div>
                    </div>

                <?php 
                } elseif(@$_GET['durum']=="false") {
                ?>

                   

                <?php 

                }
                ?>

  <!-- navbarın altında kalan kısım -->
  <section class="dark-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-column text-light justify-content-center " style="height: 100%;">
        <h1 class="display-1"> <span class="text-warning"> SOBİAD </span></h1>
        <p class="lead">Akademik olarak yayın yapan ve nerdeyse her derginin kendisine göre oluşturduğu  <span class="text-warning">kaynakça, dipnot gösterimini, atıf kullanımını </span> <strong> <u>standartlaştırmayı </u> </strong>
          
          
        <span class="text-warning">amaç</span> edinmektedir.</p>
      </div>
    </div>
  </section>
         <!--BURAYA HABERLER-->
         <section class="generic">
           <div class="container">
          <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Resimler/Bacground/webinar.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="Resimler/Bacground/webinar3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
               -->  </div>


              </div>
              
              <div class="carousel-item">
                <img src="Resimler/Bacground/webinar4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                  --> </div> 
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon " aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          
  
        </div>
      </div>
  
         </section>
     
      
  
         <!--BURAYA HABERLER Bitti-->

  

  <!-- BLOG SECTİON - GELECEK WEBİNARLAR -->
 
 <section id="blog" class="generic">
  <div class="container">
    <h2 class="display-5 text-danger mb-5">GELECEK WEBİNARLAR</h2>
    <div class="row">

      <!-- col bir tane kartı temsil ediyor -->
      <div class="col-md-6 col-lg-4 mb-3">

        <!-- Kartın özellikleri şekilleri falan -->

        <div class="card bg-light border-0">
          <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

          <div class="card-body ps-3">
            <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
            <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
              repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
              voluptatum vitae porro modi!
            </p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <small class="text-muted">

                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                      <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <span class="align-middle">
                      30.06.2021 |
                    </span>


                  </i>
                </small>
              </li>

              <li class="list-inline-item">
                <small class="text-muted align-midle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path
                      d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                  </svg>
                  <i class="align-middle">
                    20.30
                  </i>
                </small>
              </li>
              <div class="d-grid col mx-auto py-4">
                <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                
              </div>
            </ul>
          </div>

        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card bg-light border-0">
          <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

          <div class="card-body ps-3">
            <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
            <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
              repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
              voluptatum vitae porro modi!
            </p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <small class="text-muted">

                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                      <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <span class="align-middle">
                      30.06.2021 |
                    </span>


                  </i>
                </small>
              </li>

              <li class="list-inline-item">
                <small class="text-muted align-midle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path
                      d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                  </svg>
                  <i class="align-middle">
                    20.30
                  </i>
                </small>
              </li>
              <div class="d-grid col mx-auto py-4">
                <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                
              </div>
            </ul>
          </div>

        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card bg-light border-0">
          <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

          <div class="card-body ps-3">
            <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
            <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
              repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
              voluptatum vitae porro modi!
            </p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <small class="text-muted">

                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                      <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <span class="align-middle">
                      30.06.2021 |
                    </span>


                  </i>
                </small>
              </li>

              <li class="list-inline-item">
                <small class="text-muted align-midle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-alarm-fill" viewBox="0 0 16 16">
                    <path
                      d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                  </svg>
                  <i class="align-middle">
                    20.30
                  </i>
                </small>
              </li>
              <div class="d-grid col mx-auto py-4">
                <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                
              </div>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto py-4">
    <button class="btn btn-outline-warning" type="button">DAHA FAZLA GÖSTER</button>
    
  </div>

</section>

  <!-- BLOG SECTİON - GEÇMİŞ WEBİNARLAR -->
  <section id="blog" class="generic">
    <div class="container">
      <h2 class="display-5 text-danger mb-5">GEÇMİŞ WEBİNARLAR</h2>
      <div class="row">

        <!-- col bir tane kartı temsil ediyor -->
        <div class="col-md-6 col-lg-4 mb-3">

          <!-- Kartın özellikleri şekilleri falan -->

          <div class="card bg-light border-0">
            <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

            <div class="card-body ps-3">
              <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
              <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
                repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
                voluptatum vitae porro modi!
              </p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <small class="text-muted">

                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                        <path
                          d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                      </svg>
                      <span class="align-middle">
                        30.06.2021 |
                      </span>


                    </i>
                  </small>
                </li>

                <li class="list-inline-item">
                  <small class="text-muted align-midle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-alarm-fill" viewBox="0 0 16 16">
                      <path
                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                    </svg>
                    <i class="align-middle">
                      20.30
                    </i>
                  </small>
                </li>
                <div class="d-grid col mx-auto py-4">
                  <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                  
                </div>
              </ul>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card bg-light border-0">
            <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

            <div class="card-body ps-3">
              <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
              <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
                repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
                voluptatum vitae porro modi!
              </p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <small class="text-muted">

                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                        <path
                          d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                      </svg>
                      <span class="align-middle">
                        30.06.2021 |
                      </span>


                    </i>
                  </small>
                </li>

                <li class="list-inline-item">
                  <small class="text-muted align-midle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-alarm-fill" viewBox="0 0 16 16">
                      <path
                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                    </svg>
                    <i class="align-middle">
                      20.30
                    </i>
                  </small>
                </li>
                <div class="d-grid col mx-auto py-4">
                  <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                  
                </div>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card bg-light border-0">
            <img src="Resimler/Bacground/noslifactory-3gkyK1eDbbU-unsplash.jpg" class="card-img-top rounded-0">

            <div class="card-body ps-3">
              <h5 class="lead text-uppercase text-danger mb-4"> LOREM İPSUM COORE DOORE KOLAUEJ</h5>
              <h6 class="card-title text-danger">ARMANDA DİEGO</h6>

              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nobis molestiae perferendis veritatis
                repellendus blanditiis ab molestias porro. Fugiat eligendi rerum harum error? Animi tempore repellendus
                voluptatum vitae porro modi!
              </p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <small class="text-muted">

                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                        <path
                          d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                      </svg>
                      <span class="align-middle">
                        30.06.2021 |
                      </span>


                    </i>
                  </small>
                </li>
                

                <li class="list-inline-item">
                  <small class="text-muted align-midle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-alarm-fill" viewBox="0 0 16 16">
                      <path
                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                    </svg>
                    <i class="align-middle">
                      20.30
                    </i>
                    
                  </small>
                  
                </li>

                <!--webinara git butonu -->
                <div class="d-grid col mx-auto py-4">
                  <button class="btn btn-outline-info btn-sm" type="button">Webinara Git</button>
                  
                </div>

              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--Daha fazlası butonu-->
    <div class="d-grid gap-2 col-6 mx-auto py-4">
      <button class="btn btn-outline-warning" type="button">DAHA FAZLA GÖSTER</button>
      
    </div>
  </section>
  <!-- TEAM SECTİON -->

  <section id="team" class="generic">
    <div class="container">
      <h2 class="display-5 text-danger mb-5"> EKİP </h2>
    </div>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-6 col-lg-3 p-0">

          <div class="d-grid bg-danger py-5">
            <!--Button triger Modal-->
            <button type="button" class="btn btn-danger rounded-0 py-5" data-bs-toggle="modal"
              data-bs-target="#exampleModal0">
              <span class="lead">MÜHENDİS</span>
            </button>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3  p-0">
          <div class="d-grid bg-success py-5">
            <!--Button triger Modal-->
            <button type="button" class="btn btn-success rounded-0 py-5" data-bs-toggle="modal"
              data-bs-target="#exampleModal1">
              <span class="lead">ARAŞTIRMACI</span>
            </button>
          </div>
        </div>


        <div class="col-sm-6 col-lg-3  p-0">
          <div class="d-grid bg-warning py-5">
            <!--Button triger Modal-->
            <button type="button" class="btn btn-warning rounded-0 py-5" data-bs-toggle="modal"
              data-bs-target="#exampleModal2">
              <span class="lead">TAKIM LİDERİ</span>
            </button>
          </div>
        </div>


        <div class="col-sm-6 col-lg-3  p-0">
          <div class="d-grid bg-info py-5">
            <!--Button triger Modal-->
            <button type="button" class="btn btn-info rounded-0 py-5" data-bs-toggle="modal"
              data-bs-target="#exampleModal3">
              <span class="lead">TASARIMCI</span>
            </button>
          </div>
        </div>


      </div>
    </div>
    <!--MODALLAR-->
    <!--MODAL 1 açılır pencere-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <div class="modal-body">
            <img src="Resimler/Bacground/janko-ferlic-sfL_QOnmy00-unsplash.jpg" class="img-fluid">
            <h5 class="lead text-danger mt-2"> JANE MAYAKOVSKİ</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores laudantium libero magnam magni
              adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus at cum asperiores
              laboriosam cupiditate exercitationem repellat!</p>
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
              </ul>
              <li>adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus</li>

            </ul>
            <!--
                    BUTTONLAR
                  -->
            <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
              <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
              <button type="button" class="btn btn-info rounded-0">TWITTER</button>
            </div>




          </div>




        </div>
      </div>
    </div>


    <!--MODAL 2 açılır pencere-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <div class="modal-body">
            <img src="Resimler/Bacground/okeykat-tgxqpsVG-0A-unsplash.jpg" class="img-fluid">
            <h5 class="lead text-danger mt-2"> JANE MAYAKOVSKİ</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores laudantium libero magnam magni
              adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus at cum asperiores
              laboriosam cupiditate exercitationem repellat!</p>
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
              </ul>
              <li>adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus</li>

            </ul>
            <!--
                    BUTTONLAR
                  -->
            <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
              <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
              <button type="button" class="btn btn-info rounded-0">TWITTER</button>
            </div>




          </div>




        </div>
      </div>
    </div>

    <!--MODAL 3 açılır pencere-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <div class="modal-body">
            <img src="Resimler/Bacground/mikolaj-DCzpr09cTXY-unsplash.jpg" class="img-fluid">
            <h5 class="lead text-danger mt-2"> MARTİN LİNER</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores laudantium libero magnam magni
              adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus at cum asperiores
              laboriosam cupiditate exercitationem repellat!</p>
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
              </ul>
              <li>adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus</li>

            </ul>
            <!--
                    BUTTONLAR
                  -->
            <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
              <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
              <button type="button" class="btn btn-info rounded-0">TWITTER</button>
            </div>




          </div>




        </div>
      </div>
    </div>


    <!--MODAL 4 açılır pencere-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <div class="modal-body">
            <img src="Resimler/Bacground/sincerely-media-DgQf1dUKUTM-unsplash.jpg" class="img-fluid">
            <h5 class="lead text-danger mt-2"> LİNA MORKA</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores laudantium libero magnam magni
              adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus at cum asperiores
              laboriosam cupiditate exercitationem repellat!</p>
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
              </ul>
              <li>adipisci impedit voluptates corrupti, ad temporibus reiciendis recusandae possimus</li>

            </ul>
            <!--
                    BUTTONLAR
                  -->
            <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
              <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
              <button type="button" class="btn btn-info rounded-0">TWITTER</button>
            </div>




          </div>




        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto py-4">
      <button class="btn btn-outline-danger" type="button">DAHA FAZLA GÖSTER</button>
      
    </div>








  </section> 


<?php  require_once  'footer.php' ?>

 <?php 
  $baglanti =null;
 ?>