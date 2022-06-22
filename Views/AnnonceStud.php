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

<body class="réserve index-page">

    <!-- start navbar -->
    <?php require_once "Includes/navbardestroy.php"; ?>
    
    <!-- end nav -->
    <div class="bg-white pt-5 d-flex flex-column align-items-center">

        <div class="bienvenue border border-secondary   pt-5   p-2 rounded w-75 d-flex flex-column align-items-center mt-1 " style="background-color:#B0C8E2;">
            <h2>Bienvenue,l'étudiant</h2>
            <div>
                <a  href="offer"><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i></i>INSCRIPTION</button></a>
                <a href="dashboard " type="button" class="btn btn-secondary "><i class="fas fa-sign-out"></i> Go To dashboard</a>
            </div>
        </div>


        <div class="container-fluid bg-white index-page pt-5 my-5">

            <div class="row">
                <?php


                if (isset($_POST['submit'])) {
                    $result = AnnonceModel::getOne($_POST['id_Annonce']);
                    return $result;
                }
                $data = new AnnonceController();
                $Annonce = $data->getOneId();
                ?>
                <div class="container-fluid">
                    <div class="d-flex flex-wrap">
                        <?php


                        if (isset($_POST['submit'])) {
                            $result = AnnonceModel::getOne($_POST['id_Annonce']);
                            return $result;
                        }
                        $data = new AnnonceController();
                        $Annonce = $data->getOneAnnonce();


                        foreach ($Annonce as $Annonce) {
                        ?>
                            <div class="cards bg-white rounded-top  w-30 p-2" style="height: 300px;" >
                                <div class="text-center" style="height: 100%;">
                                    <form method="post" action="" style="height: 70%; height : 70%;">
                                        <input type="hidden" name="id_Annonce" value="<?php echo $Annonce['id_Annonce']; ?>">
                                        <button class="btn border border-dark " style="width:100%; height : 90%; background:#B0C8E2 " ">
                                            <img  class="border border-dark font-weight-bold"    src="Views/assets/image//<?= $Annonce['image'] ?>" alt="Annonce" style="width:80%; height : 80%;">
                                            <div class="text-dark font-weight-bold" >   <?= $Annonce['Username'] ?></div>
                                            <div class="justify-content-between text-dark font-weight-bold"><p><b>Subject</b> <?=$Annonce['Subject']; ?></p>
                                            <p><b><hsmall>Numéro</h6></b> <?=$Annonce['tele']; ?></p></div>
                                            <div>   <?= $Annonce['Message'] ?></div>
                                            
                                            
                                        </button>
                                      

                                    </form>
                                    
                                      
                                        
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
         
            </div>
        </div>
    
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
        <script src="Script/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>