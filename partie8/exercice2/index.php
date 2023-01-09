<?php

session_start();
$lastname = 'Bon';
$firstname = 'Jean';
$age = 42;

$_SESSION['lastname'] = $lastname;
$_SESSION['firstname'] = $firstname;
$_SESSION['age'] = $age;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/partie8/style8.css">
    <title>EXERCICES PHP</title>
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="../index.php">PARTIE 8</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="/partie8/index.php">Exercice 1</a></li>
                    <li><a href="../exercice2/index.php">Exercice 2</a></li>
                    <li><a href="../exercice3/index.php">Exercice 3</a></li>
                    <li><a href="../exercice4/index.php">Exercice 4</a></li>
                    <li><a href="../exercice5/index.php">Exercice 5</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
        <div class="text-center oui text-white bg-dark p-4 bg-opacity-75">
            <h1 class="p-2">EXERCICES PHP PARTIE 8</h1>
            <h2 class="p-2">VARIABLES SUPERGLOBALES, SESSIONS, COOKIES</h2>
            <h3 class="p-2">EXERCICE 2</h3>
        </div>
        </div>
    </section>
    <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->

        <div class="container-fluid p-4 text-center text-white">
            <div class="row">
                <div class="">
                    <a href="/partie8/exercice2/session.php" class="btn btn-lg btn-light" role="button">GO</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/partie8/script.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>

</html>