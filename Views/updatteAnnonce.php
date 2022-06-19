<?php
include_once "Controllers/AnnonceController.php";
include_once "Models/AnnonceModel.php";

$data = new AnnonceController();
$result = $data->getOneId();

if (isset($_POST['updateAnnonce'])) {
    echo 'WHAT THE HELLLLLLLLL';
    $upAnnonce = new AnnonceController();
    $upAnnonce->updateAnnonce();
}
?>