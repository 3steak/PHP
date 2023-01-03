<?php
$name = 'Norris';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICES 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class=".bg-light-subtle">
    <h1 class="bg-dark text-white text-center p-2">Exercice 1</h1>
    <div class="card p-4 m-4 bg-dark text-white">
        <p class="text-center p-2"> Son nom est <?= $name; ?>
        </p>
        <div class="imgChuck text-center "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbmG-s9ORyDwIR4s2mfJ9pi6UuoPiFBblG2OraWH2cenweJPgOAhFD&s" alt="photo de Chuck">
        </div>
    </div>
    <div class="text-center m-4"> <a class="btn btn-dark w-50 mx-auto" href="/exercice2/index.php" role="button">Exercice suivant</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="/index.php" role="button">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>