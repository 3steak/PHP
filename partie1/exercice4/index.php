<?php
$firstname = 'Clarence';
$age = 66;
$ageFloat = 66.5;
$actor = true;
?>
<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercice4/public/assets/css/style.css">
    <title>EXERCICES 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <h1 class="bg-dark text-white text-center p-2">Exercice 4</h1>
    <div class="clarence"></div>
    <div class="text-white text-center bg-dark p-4">
        <p>
            Il s'appelle <?= $firstname ?> et avait <?= $age ?> ans, enfin plus présicément <?= $ageFloat ?> ans.
        </p>
        <p>Etait-il acteur ?</p>
        <p><?= $actor ?><?php

                        if ($actor = true) {
                            echo 'oui';
                        };
                        ?>
        </p>


    </div>

    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="/exercice5/index.php" role="button">Exercice suivant</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="/index.php" role="button">Accueil</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>