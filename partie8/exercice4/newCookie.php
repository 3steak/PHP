<?php
print_r($_POST);

if (isset($_POST['login'], $_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    $_COOKIE['login'] = $login;
    $_COOKIE['password'] = $password;
};
print_r($_COOKIE)
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
                    <li><a href="../index.php">Exercice 1</a></li>
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
            <h3 class="p-2">COOKIE A JOUR</h3>
        </div>
        </div>
    </section>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">

                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <!----------- Tableau ustilisateur  --------->
                                    <p>COOKIE MIS A JOUR</p>
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>

                                                <th scope="col">USERS</th>
                                                <th scope="col">PASSWORD</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $_COOKIE['login'] ?? '' ?></td>
                                                <td><?= $_COOKIE['password'] ?? '' ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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