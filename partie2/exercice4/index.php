<?php
$magnitude = 4;
?>
<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercice3/public/assets/css/style3.css">
    <title>EXERCICES 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <h1 class="bg-dark text-white text-center p-2">Exercice 4</h1>
    <div class="text-white text-center bg-dark p-4">
        <p>Le Séisme était d'une magnitude de <?= $magnitude ?>.</p>
        <?php
        switch ($magnitude) {
            case 1:
                echo "	Micro-séisme impossible à ressentir.";
                break;
            case 2:
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
    ";
                break;
            case 3:
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
    ";
                break;
            case 4:
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;
            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
            case 6:
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;
            case 7:
                echo "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
            case 8:
                echo "	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone.";
                break;
        }

        ?>
    </div>
    <div class="ouh"></div>
    <div class="text-center mb-4"> <a class="btn btn-dark w-50 mx-auto" href="/exercice5/index.php" role="button">Exercice suivant</a>
    </div>
    <div class="text-center m-4"> <a class="btn btn-info w-50 mx-auto" href="/index.php" role="button">Accueil</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>