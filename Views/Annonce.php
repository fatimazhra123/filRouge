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


    <title>
        cours supplémentaires
    </title>
</head>

<body class="Annonce">

    <!-- start navbar -->
    <?php require_once "Includes/navbardestroy.php"; ?>
    <!-- end nav -->
    <!-- <section class="hero-wrap hero-wrap-2  p-4" style="background-image: url('Views/Assets/image/bg_1.jpg');"> -->
    <div class="logo bg-white"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">DÉPOSER UNE ANNONCE GRATUITEMENT</h1>
                <p class="breadcrumbs "><span class="mr-2  text-info  font-weight-bold"><a href="homecours">Home <i class="ion-ios-arrow-forward "></i></a></span class="mr-2  text-info  font-weight-bold"> <span>Annonce <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
    </section>
    <section>

    <?php
                  

                  $Annonce = new AnnonceController();
                  $Annonce->add();
                  ?>
        <div class="shadow mb-5 rounded mt-1">
            <p class=" text-center font-weight-bold mb-5 mt-3 text-dark  " style="font-size:20px ;">vous avez le moindre problème dans le dépôt de votre annonce, n'hésitez pas à nous contacter.
            <p class=" text-center text-dark- font-weight-bold  fs-5 mb-5 mt-3  ">GRATUIT, renseignez le formulaire ci-dessous pour publier votre annonce
                toute annonce doublon <br> ou ne respectant pas nos règles de diffusion sera supprimée
                le dépôt de 3 photos<br> est également gratuit. L'option est payante pour avoir plus de photos.<br>
            </p>

            <section>
                <div class="container-fluid">
                    <div class="row d-flex align-items-stretch no-gutters">
                        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light  border border-dark">

                        <h1 class="text-center font-weight-bold mb-5 mt-3">Annonce</h1>
                        <form action="" method="post"   enctype="multipart/form-data">
                                <div class="form-group  border border-dark">

                                    <input type="text" class="form-control" name="Username" placeholder="Votre Nome" value="">

                                </div>
                                <div class="form-group  border border-dark">

                                    <input type="text" class="form-control" name="Subject" placeholder="Subject" value="">

                                </div>
                                <div class="form-group  border border-dark">
                                    <input type="file" name="image" class="form-control" placeholder="Ajouter une photo" value="">

                                </div>
                                <div class="form-group  border border-dark">
                                    <input name="tele" type="number" class="form-control" placeholder="Télèphone" value="">

                                </div>

                                <div class="form-group border border-dark">
                                    <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message" value=""></textarea>
                                </div>


                                <div class="frm-group ">
                                <button type="submit" name="submit" class="btn btn-dark justify-content-center" data-bs-dismiss="modal">
                                    Ajouter un Annonce
                                </button>
                            </div>
                            </form>
                        </div>

                        <div class="col-md-6 mt-5 align-items-stretch">
                            <h2 class="text-center font-weight-bold mb-4 mt-3 text-muted ;">Donner des cours,
                                vivre de sa passion !!</h2>
                            <div>
                                <h5 class="text-center font-weight-bold text-dark"> Libre et sans intermédiaire, enseignez près de chez vous pour rencontrer des élèves géniaux.
                                    Langues, Sports, Musique, Arts, Loisirs, Scolaire, plus de 1000 connaissances à partager.

                                    Étudiants, enseignants, autodidactes, passionnés, diplômés, professionnels... Rejoignez la communauté des Super Professeurs ! On vous attend 😍
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
      
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
            <small class="text-uppercase text-white  ">©Blood Donation 2022</small>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html> 