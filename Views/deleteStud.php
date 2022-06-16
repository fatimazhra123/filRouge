<?php
if (isset($_POST['delete'])) {
    $Etudiant = new étudiantsController();
    $Etudiant->deleteétudiant();
}