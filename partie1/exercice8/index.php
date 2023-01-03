<?php
$sum = 3 + 4;
$multiply = 5 * 20;
$divide = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercice5/public/assets/css/style.css">
    <title>EXERCICES 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <h1 class="bg-dark text-white text-center p-2">Exercice 8</h1>
    <div class="text-white text-center bg-dark p-4">
        <p>La première variable est l'addition de 3 + 4 qui vaut <?= $sum ?>.</p>
        <p>La seconde variable est la multiplication de 5 * 20 qui vaut <?= $multiply ?>.</p>
        <p> La dernière variable est la division de 45 par 5 et vaut donc <?= $divide ?>.</p>
    </div>


    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="/index.php" role="button">Retour à l'accueil</a>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>