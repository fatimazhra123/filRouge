
<?php
$data = new étudiantsController();
$étudiant = $data->getOneId();

if (isset($_POST['updateétudiant'])) {
    $upétudiant = new étudiantsController();
    $upétudiant->updateétudiant();
}
?>   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/Assets/style.css">
    <title>update étudiants</title>
</head>
     <body>


     <div>*
          <h1 class="text-center text-secondary mt-3">Students informations :</h1>
          <h2 class="text-center text-primary">Saisissez les informations des étudiants</h2>
     </div>
    <div class="d-flex justify-content-center p-5">
        <form method="post" class="d-flex flex-column w-75">
            <label class="mb-1">Matricule</label>
            <input class="mb-1" type="text" name="Matricule" value="<?php echo ($étudiant['Matricule']) ?>">

            <label class="mb-1">Nom_complet</label>
            <input class="mb-1" type="text" name="Nom_complet" value="<?php echo ($étudiant['Nom_complet']) ?>">

            <label class="mb-1">Genre</label>
            <input type="text" name="Class" value="<?php echo ($étudiant['Class']) ?>">

            <label class="mb-1">Class</label>
            <input type="text" name="Genre" value="<?php echo ($étudiant['Genre']) ?>">
              

            <label class="mb-1">Parent_Id</label>
            <input class="mb-1" type="text" name="Parent_Id" value="<?php echo ($étudiant['Parent_Id']) ?>">

            <label class="mb-1">Address</label>
            <input class="mb-1" type="text" name="Address" value="<?php echo ($étudiant['Address']) ?>">

            <label class="mb-1">Date_de_naissance</label>
            <input class="mb-1" type="text" name="Date_de_naissance" value="<?php echo ($étudiant['Date_de_naissance']) ?>">
            <label class="mb-1">Email</label>
            <input class="mb-1" type="text" name="Email" value="<?php echo ($étudiant['Email']) ?>">

            <input type="hidden" name="id" value="<?php echo ($étudiant['id']) ?>">

            <button type="submit" name="updateétudiant" class="btn btn-primary">
                Modifer
            </button>
        </form>
    </div>
</body>
</html>