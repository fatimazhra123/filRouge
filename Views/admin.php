
<?php
if ($_SESSION['logged'] == true && $_SESSION['role'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="Views/Assets/image/favion.png" type="image/x-icon">
    <link rel="stylesheet" href="Views/Assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Views/Assets/css/dashboard.css">
    <title>Parents</title>
</head>

<body>
    <div>
        <div>
            <?php require_once "Includes/navbar.php"; ?>
            <?php require_once "Includes/sidebar.php"; ?>
        </div>


<div class="bg-light mt-5 pt-5 d-flex flex-column align-items-center">

    <div class="bienvenue border border-secondary   pt-5   p-2 rounded w-75 d-flex flex-column align-items-center mt-1 " class="d-none md-bg"  style="background-color:#B0C8E2;">
        <h2>Bienvenue Mr l'administrateur</h2>
        <div>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i></i> Ajouter Annoce</button>
            <a    href="dashboard "  type="button" class="btn btn-secondary "><i class="fas fa-sign-out"></i> Go To dashboard</a>
        </div>
    </div>

   
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
       

   
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrer les infos du Annoce</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" method="post"   enctype="multipart/form-data">
                                <div class="form-group">

                                    <input type="text" class="form-control" name="Username" placeholder="Votre Nome" value="">

                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control" name="Subject" placeholder="Subject" value="">

                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" placeholder="Ajouter une photo" value="">

                                </div>
                                <div class="form-group">
                                    <input name="tele" id="" type="number" class="form-control" placeholder="Télèphone" value="">

                                </div>

                                <div class="form-group">
                                    <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message" value=""></textarea>
                                </div>


                                <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-dark" data-bs-dismiss="modal">
                                    Ajouter un Annonce
                                </button>
                            </div>
                            </form>
                       
            </div>
        </div>
    </div>
</div>
    <?php
                  

                  $Annonce = new AnnonceController();
                  $Annonce->add();
                  ?>
                   <h2 class="text-secondary  mt-5">Détaille des annonce<u></u></h2>
                 
                   <div class=" prof table-responsive" style="width:85%;margin-left:15%">
            <table class="table table-striped table  table-hover">
                        <thead>
                        <tr>
                            <!-- <th scope="col">id-Annonce</th> -->
                            <th >image<i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th>Nom <i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th >Subject<i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th > Télèphone<i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th >Message<i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th >Action<i class="fas fa-sort fs-4 ms-auto"></i></th>
                            <th ></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                           

                            $data = new AnnonceController();
                            $Annonces = $data->getAllAnnonce();

                            foreach ($Annonces as $Annonce) :
                            ?>
                        <tr>
                            <!-- <td><?= $Annonce['id_Annonce'] ?></td> -->
                            <td><img src="Views/Assets/image/<?= $Annonce['image'];?>" style="width: 80px; height : 80px; align-items-center" alt="image"></td>
                            <td><?= $Annonce['Username'] ?></td>
                            <td><?= $Annonce['Subject'] ?></td>
                            <td><?= $Annonce['tele'] ?></td>
                            <td><?= $Annonce['Message'] ?></td>
                            <td>
                                <form method="post" class="mr-1" action="updatteAnnonce">
                                    <input type="hidden" name="id_Annonce" value="<?php echo $Annonce['id_Annonce']; ?>">
                                    <button type="submit" name="update" class="border border-0 ">
                                        <i class="fas fa-edit text-primary"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" class="mr-1" action="deleteAnnonce">
                                    <input type="hidden" name="id_Annonce" value="<?php echo['id_Annonce']; ?>">
                                    <button type="submit" name="delete" class="border border-0">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        
    </div>

  <!-- SCRIPT -->
  <script src="./Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php } else {
  
   
  header ("location:homecours");
}