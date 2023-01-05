<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICES 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class=".bg-light-subtle">
    <h1 class="bg-dark text-white text-center p-2">Exercice 3</h1>
    <div class="card p-4 m-4 bg-dark text-center text-white">
        <div class="text-center m-2">
            <a class="btn btn-light w-25 mx-auto" href="index.php?startDate=2/05/2016&endDate=27/11/2016" role="button">CLIQUE !</a>
        </div>

        <div class="exercice text-center m-2">
            <?php
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
                $startDate = $_GET['startDate'];
                $endDate = $_GET['endDate'];
                echo "La durée d'une ancienne formation commencée le  $startDate et finissait le $endDate.<hr>";
            } else {
                echo 'L\'un des deux paramètres est manquant, clique au dessus peu être..';
            }
            ?>
        </div>

    </div>
    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="../exercice4/index.php" role="button">Exercice suivant</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="../index.php" role="button">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>