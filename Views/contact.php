<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="Views/Assets/image/apple-icon.png">
  <link rel="icon" type="image/png" href="Views/Assets/image/favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="Views/Assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="Views/Assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="Views/Assets/css/font-awesome.css" rel="stylesheet" />
  <link href="Views/Assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="Views/Assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
  <link rel="stylesheet" href="Views/Assets/css/style.css">
  <!-- link animate css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>


<body class="contact index-page">
    <!-- start navbar -->
    <?php require_once "Includes/navbar.php"; ?>
    <!-- end nav -->
    

  <section class="hero-wrap hero-wrap-2  p-4" style="background-image: url('./images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contactez-nous</h1>
          <p class="breadcrumbs  font-weight-bold"><span class="mr-2 "><a href="homecours">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <div class="contact container shadow p-3 mb-5 bg-body rounded mt-5 border border-dark">
    <h1 class=" text-center font-weight-bold mb-5 mt-3">CONTACT
    </h1>
    <?php


    $contact = new contactController();
    $contact->addcontact();
    ?>
    <section>
      <div class="container-fluid ">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="réserve  col-md-6 p-4 p-md-5 order-md-last  border border-dark ">
            <form method="POST" action="#">
              <div class="form-group  border border-dark">
                <input type="text" name="name" class="form-control" placeholder="Votre nom">
              </div>
              <div class="form-group  border border-dark">
                <input type="text" name="email" class="form-control" placeholder="Votre e-mail">
              </div>
              <div class="form-group  border border-dark">
                <input type="number" name="telephone" class="form-control" placeholder="votre numéro">
              </div>

              <div class="form-group  border border-dark">
                <input type="text" name="adresse" class="form-control" placeholder="Objet">
              </div>

              <div class="form-group  border border-dark">
                <textarea name="Message" type="text" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class=" text-center bg-light border border-dark shadow">
                <button name="submit" type="submit" value="Send Message" class="btn py-3 px-5 " type="button" class="btn btn-primary nav-link-hover  text-dark ">Envoyer</button>
              </div>
            </form>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <img class="card-img-top" src="Views/Assets/image/Contact us-amico.png" alt="image ">
          </div>
        </div>
      </div>
    </section>



  </div>


  <section class="ftco-section contact-section p-4">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Address</h3>
            <p>Rue FIRDAOUS ,MIDELTE ,MAROC</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://1234567920">06-21-40-00-00</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:info@yoursite.com">
                Fati@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Website</h3>
            <p><a href="mailto:info@yoursite.com">cours-sup@gmail.com</a></p>
          </div>
        </div>


      </div>
    </div>
  </section>




  <!-- --------------------------footer---------------------------- -->
  <!-- Section: Links  -->
  <section>
    <div class="container-fluid text-center text-md-start mt-5 bg-dark  ">
      <!-- Grid row -->
      <div class="row mt-5 d-flex flex-row justify-content-center">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-5 ">
          <!-- Content -->

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5">
            <!-- Links -->
            <p>
            <h4 href="#! " class="text-white ">Apropos</h4>

            </p>
            <p>
            <h6 href="#! " class="text-white ">qui sommes-nous?</h6>
            </p>


          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5">
          <!-- Links -->
          <p>
          <h4 href="#! " class="text-white ">Ressources</h4>

          </p>
          <p>
            <a href="#! " class="text-white "> cours supplémentaires Ressources</a>
          </p>


        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-5 ">
          <!-- Links -->
          <p>
          <h4 href="#! " class="text-white ">Assistance</h4>
          </p>
          <p>
            <a href="#! " class="text-white ">Centre d'aide</a>
          </p>
          <p>
            <a href="#! " class="text-white ">contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5 ">
          <!-- Links -->

          <h4 href="#! " class="text-white ">Suivez-nous</h4>
          <div class=" container row">
            <div class="col-sm" style="color: #f2e30b;"><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/voscours.fr"><img src="https://d1reana485161v.cloudfront.net/img/icons/facebook.svg" style="visibility: visible;"></a></div>
            <div class="col-sm" style="color: #f2e30b;"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/voscours"><img src="https://d1reana485161v.cloudfront.net/img/icons/instagram.svg" style="visibility: visible;"></a></div>
            <div class="col-sm" style="color: #f2e30b;"><a target="_blank" rel="noopener noreferrer" href="https://www.twitter.com/voscours_fr"><img src="https://d1reana485161v.cloudfront.net/img/icons/twitter.svg" style="visibility: visible;"></a></div>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-1 " style="background-color:var(--Rouge); ">
    <small class="text-uppercase text-white  ">©cours sup 2022</small>
  </div>
  <!-- Copyright -->
  </footer>
  <!-- end Footer -->
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js " type="text/javascript "></script>
  <script src="./assets/js/core/popper.min.js " type="text/javascript "></script>
  <script src="./assets/js/core/bootstrap.min.js " type="text/javascript "></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js "></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js "></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js " type="text/javascript "></script>
  <script src="./assets/js/plugins/moment.min.js "></script>
  <script src="./assets/js/plugins/datetimepicker.js " type="text/javascript "></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js "></script>
  <script src="./Script/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>

</html>