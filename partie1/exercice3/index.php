<?php
$km = 1;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercice3/public/assets/css/style.css">
    <title>EXERCICES 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <h1 class="bg-dark text-white text-center p-2 mb-0">Exercice 3</h1>
    <div class="car mt-0">

    </div>
    <div class="text-white text-center bg-dark p-4">
        <p>
            Il a roulé <?= $km ?> km.
        </p>
        <p> Puis l'année suivante il a roulé <?php $km = 3;
                                                echo "$km km." ?>
        </p>
        <p>Pour enfin rouler <?php $km =    125;
                                echo "$km km." ?></p>
    </div>

    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="/exercice4/index.php" role="button">Exercice suivant</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="/index.php" role="button">Accueil</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>