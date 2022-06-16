<div class="bg-light mt-5 pt-5 d-flex flex-column align-items-center">

    <div class="bienvenue border border-success mx-2 p-2 rounded w-75 d-flex flex-column align-items-center" style="background-color: #5cb874;">
        <h1>Bienvenue Mr l'administrateur</h1>
        <div>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i></i> Ajouter Annoce</button>
            <button type="button" class="btn btn-secondary"><i class="far fa-sign-out"></i> Se déconnecter</button>
        </div>
    </div>

    <!-- Modal Ajout Produit-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entres tous les annonces</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="bg-light mt-5 pt-5 d-flex flex-column align-items-center">
                        <div class="bienvenue w-50">
                            <div class="border border-success mb-2 p-2 rounded d-flex flex-column align-items-center">
                                <h1>Bonjour <?= $_SESSION['Username']; ?></h1>
                                <div>
                                    <button type="button" class="btn btn-warning"><a href="dashboard" class="text-white">Passer dans plateforme cours soutien</a></button>
                                    <button type="button" class="btn btn-muted text-white btn-hover text-white"><a href="Deconnexion" <i class="far fa-sign-out"></i> Se déconnecter</a></button>
                                </div>
                            </div>
                            <div class="border border-dark mb-2 p-2 rounded">
                                <h2>Détails du compte</h2>
                                <div>
                                    <p><b>Email :</b> <?= $_SESSION['image']; ?>"></p>
                                    <p><b>Username:</b><?= $_SESSION['Username']; ?>"></p>
                                    <p><b>Subject :</b><?= $_SESSION['Subject']; ?>"></p>
                                    <p><b> NUméreo de Télèphone :</b> <?= $_SESSION['tele']; ?></p>
                                    <p><b>Message :</b> <?= $_SESSION['Message']; ?>"></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include_once "Controllers/ProduitController.php";
                    include_once "Models/ProduitModel.php";

                    $add = new AnnonceController();
                    $add->addAnnonce();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="tables d-flex w-100 m-2 p-2">

        <div class="table1 border border-success m-2 p-2 rounded w-100">
            <h2 class="text-secondary"><u>Listes des produits</u></h2>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">img</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Subject</th>
                            <th scope="col"> Télèphone</th>
                            <th scope="col">Message</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include_once "Controllers/ProduitController.php";
                            include_once "Models/ProduitModel.php";

                            $data = new AnnonceController();
                            $produits = $data->getAllAnnonce();

                            foreach ($Annonces as $Annonce) :
                            ?>
                        <tr>
                            <td><?= $produit['id'] ?></td>
                            <td><img src="Views/assets/img/......./<?= $Annonce['Username'] ?>/<?= $Annonce['image'] ?>" style="width: 80px; height : 80px;" alt="productPicture"></td>
                            <td><?= $produit['Username'] ?></td>
                            <td><?= $produit['Subject'] ?> Dh</td>
                            <td><?= $produit['description'] ?></td>
                            <td><?= $produit['tele'] ?></td>
                            <td><?= $produit['Message'] ?></td>
                            <td></td>
                            <td>
                                <form method="post" class="mr-1" action="updateProduit">
                                    <input type="hidden" name="id_Annonce" value="<?php echo $produit['id_Annonce']; ?>">
                                    <button type="submit" name="update" class="border border-0 ">
                                        <i class="far fa-edit text-primary"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" class="mr-1" action="deleteProduit">
                                    <input type="hidden" name="id_produit" value="<?php echo $produit['id_Annonce']; ?>">
                                    <button type="submit" name="delete" class="border border-0">
                                        <i class="fal fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>