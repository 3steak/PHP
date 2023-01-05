<?php

//  Function to display form if value null
function displayForm()

{
    // Je declare mon formulaire dans une variable 
    $form = '<!-- form exo 5 -->
<form enctype="multipart/form-data" method="post" action="index.php">
    <select class="form-select my-2" aria-label="select" name="civility">
        <option value="">Choose your civility</option>
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>
    <div class="mb-3">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="lastnameHelp">
        <div id="lastnameHelp" class="form-text text-white">Enter your lastname</div>
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="firstnameHelp">
        <div id="firstnameHelp" class="form-text  text-white">Enter your firstname</div>
    </div>
    <div class="input-group mb-3">
  <input type="file" class="form-control" accept=".pdf" name="file" id="file">
  <label class="input-group-text" for=" file">Upload</label>
</div>
    <div class="text-center">
        <button type="submit" class="btn btn-light">Submit</button>
    </div>
    
</form>';

    //  Je contrôle les getteur
    if (!isset($_POST['civility'], $_POST['lastname'], $_POST['firstname'], $_FILES['file'])) {
        echo $form;
    } elseif (
        isset($_POST['civility'], $_POST['lastname'], $_POST['firstname'], $_FILES['file'])
        && ($_POST['civility'] != '' && $_POST['lastname'] != '' && $_POST['firstname'] != '' && $_FILES['file']['type'] === 'application/pdf')
    ) {
        $civility = $_POST['civility'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $file = $_FILES['file']['name'];

        echo "Bonjour $civility $lastname $firstname, comment allez vous ?<br>Votre fichier est $file <br>";
    } else {
        echo '<div class="alert alert-success" role="alert">
        Il manque une ou plusieurs données !<br><hr> Le fichier doit être au format PDF !
      </div><br>' . $form;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css">
    <title>EXERCICES PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center pokemon text-dark p-4">
                <div class="rounded-1 bg-opacity-50">
                    <h1 class="p-2">EXERCICES PHP PARTIE 7</h1>
                    <div class="input-group p-3">
                        <input type="text" class="form-control text-center" placeholder="LES FORMULAIRES" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                </div>
            </div>

            <div class="col-12 d-flex gap-4 flex-column justify-content-center bg-primary-subtle p-4">
                <a class="btn btn-primary  w-75 mx-auto" href="./exercice1/index.php" role="button">
                    <div class="text-white mx-auto bg-dark bg-opacity-75 rounded-1 w-25">Exercice 1</div>
                </a>
                <a class="btn btn-primary  w-75 mx-auto" href="./exercice2/index.php" role="button">
                    <div class="text-white mx-auto bg-dark bg-opacity-75 rounded-1 w-25">Exercice 2</div>
                </a>
                <a class="btn btn-primary  w-75 mx-auto" href="./exercice3/index.php" role="button">
                    <div class="text-white mx-auto bg-dark bg-opacity-75 rounded-1 w-25">Exercice 3</div>
                </a>
                <a class="btn btn-primary  w-75 mx-auto" href="./exercice4/index.php" role="button">
                    <div class="text-white mx-auto bg-dark bg-opacity-75 rounded-1 w-25">Exercice 4</div>
                </a>
                <a class="btn btn-primary  w-75 mx-auto" href="./exercice5/index.php" role="button">
                    <div class="text-white mx-auto bg-dark bg-opacity-75 rounded-1 w-25">Exercice 5 6 7 et 8</div>
                </a>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card bg-dark text-white p-4">

                    <?php
                    echo displayForm();
                    ?>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>