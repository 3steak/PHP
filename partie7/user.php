<?php
// ------------ Exo 1 ----------------
if (($_GET['lastname'] != null) && ($_GET['firstname'] != null)) {
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];
} else {
    echo 'Vous n\'avez rien renseigné dans le formulaire';
}
// ----------- Exo 2 ------------
if (($_POST['lastname2'] != null) && ($_POST['firstname2'] != null)) {
    $lastname2 = $_POST['lastname2'];
    $firstname2 = $_POST['firstname2'];
} else {
    echo 'Vous n\'avez rien renseigné dans le formulaire';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css">
    <title>Page user.php </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center pokemon text-dark p-4">
                <div class="rounded-1 bg-opacity-50">
                    <h1 class="p-2">USER PAGE</h1>
                    <div class="input-group p-3">
                        <input type="text" class="form-control text-center" placeholder="LES FORMULAIRES" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="card p-4 m-4 bg-dark text-white text-center">
        <!-- Exo 1 -->
        <div>
            <h1>Exo 1</h1>
            <p>
                <?php
                if (isset($lastname) && isset($firstname)) {
                    echo "Salut $lastname $firstname ! Bienvenue !";
                }
                ?>
            </p>
        </div>
        <!-- Exo 2 -->
        <div>
            <h1>Exo 2</h1>
            <p>
                <?php
                if (isset($lastname2) && isset($firstname2)) {
                    echo "Salut $lastname2 $firstname2 ! Bienvenue !";
                }
                ?>
            </p>
        </div>
    </div>
    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="../exercice1/index.php" role="button">Revenir à l'Exercice 1</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="../exercice2/index.php" role="button">Revenir à l'Exercice 2</a>
    </div>
    <div class="text-center m-4"><a class="btn btn-info w-50 mx-auto" href="../index.php" role="button">Accueil</a>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>