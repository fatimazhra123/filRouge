


    <?php
  
  if(isset($_SESSION['logged']) && $_SESSION['role'] === 'client'){
    $data = new UsersController();
    // $users=$data->getAllUsers();
    if(isset($_POST['submit'])){
      $users=$data->checkUser($_POST['email'],$_POST['Password']);
    }
    
  ?>
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

<body class="index-page">
      <!-- start navbar -->
      <nav class="navbar  navbar-fixed-top navbar-expand-lg  shadow  bg-body rounded py-1" style="backdrop-filter: blur(14px);">
        <div class="container-fluid">
            <img src="Views/Assets/image/ccours_supplémentaires-removebg-preview.png" style="width: 80px;" alt="le logo" class="logo-navbar">
            <button class="navbar-toggler " style="color:black;" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:black;"></span>
            </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-collapse-header">

                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="homecours" class="nav-link nav-link-icon  nav-link-hover">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Apropos" class="nav-link nav-link-icon  ml-3 nav-link-hover">Apropos</a>
                </li>
                <li class="nav-item">
                    <a href="Annonce" class="nav-link nav-link-icon  ml-3 nav-link-hover">Annonce</a>
                </li>
                <li class="nav-item">
                    <a href="offer" class="nav-link nav-link-icon  ml-3 mr-3 nav-link-hover">Offer</a>
                </li>
               
                <li class="nav-item">
                    <a href="contact" class="nav-link nav-link-icon  ml-2 mr-5 nav-link-hover">Contact </a>
                </li>
            </ul>
            <div class="dropdown show text-warning fs-6 bg-white">
                <a class="btn btn- dropdown-toggle text-warning fs-6 bg-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    INSCRIPTION
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item text-warning fs-6" href="SignIn">Sign-in</a>
                    <a class="dropdown-item text-warning fs-6" href="home-cours">Home</a>
                </div>
            </div>
        </div>
        </div>
    </nav>
<div class=" mt-5 pt-5 d-flex flex-column align-items-center">
    <div class="bienvenue w-50">
        <div class="border border-success mb-2 p-2 rounded d-flex flex-column align-items-center">
            <h1>Bonjour <?= $_SESSION['Username']; ?></h1>
            <div>
                <button type="button" class="btn btn-warning"><a href="AnnonceStud" class="text-white">Passer dans plateforme cours soutien</a></button>
                <button type="button" class="btn btn-muted text-white btn-hover text-white"><a href="Deconnexion"<i class="far fa-sign-out"></i> Se déconnecter</a></button>
            </div>
        </div>
        <div class="border border-dark mb-2 p-2 rounded">
            <h2>Détails du compte</h2>
            <div>
                <p><b>Nom :</b> <?= $_SESSION['Username']; ?></p>
                <p><b>Email :</b> <?= $_SESSION['Email']; ?></p>
                <p><b>Mot de passe :</b> <?= $_SESSION['Password']; ?></p>
                <p><b>confirmation :</b> <?= $_SESSION['confirm_passw']; ?></p>
             
            </div>
        </div>
    </div>
</div>

    <!-- --------------------------footer---------------------------- -->
    <!-- Section: Links  -->
    <section>
        <div class="container-fluid text-center text-md-start mt-5 bg-dark ">
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
        <small class="text-uppercase text-white  ">©Blood Donation 2022</small>
    </div>
    <!-- Copyright -->
    </footer>
    <!--end Footer -->
</body>
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
<script src="Script/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>

</html>
<?php }else{
      
      header ("location:SignIn");
   
   
}