<?php 
include_once "Controllers/AnnonceController.php";
include_once "Models/AnnonceModel.php";

if (isset($_POST['delete'])) {
$result= new AnnonceController();
 $result-> deleteAnnonce();
}
