<?php
//  Fonction affichage formulaire si cookie inéxistant 


print_r($_COOKIE);
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
            <h3 class="p-2">EXERCICE 5</h3>
        </div>
        </div>
    </section>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="data:image/jpeg;base64,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" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <!----------- FORMULAIRE  --------->
                                    <form method="post" action="../exercice4/index.php">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">MODIFIER SES DONNEES</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">EXERCICE 5</h5>
                                        <!-- INPUT LOGIN -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" name="updateLogin" class="form-control form-control-lg" value="<?= $_COOKIE['login'] ?? '' ?>" />
                                            <label class="form-label" for="form2Example17">Login</label>
                                        </div>
                                        <!-- INPUT PASSWORD -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" name="updatePassword" class="form-control form-control-lg" value="<?= $_COOKIE['password'] ?? '' ?>" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
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