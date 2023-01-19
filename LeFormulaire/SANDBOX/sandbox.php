<?php

$listCountry = ['Belgique', 'Luxembourg', 'Suisse', 'Burundi', 'Cameroun', 'Comores', 'Djibouti', 'Guinée équatoriale', 'Madagascar', 'République centrafriquaine', 'Rwanda', 'Seychelles', 'Tchad', 'Canada', 'Haïti', 'Vanuatu', 'Algérie', 'Maroc', 'Tunisie', 'Mauritanie', 'Liban', 'Maurice', 'Andorre', 'Saint-Pierre-et-Miquelon', 'Guyane française', 'Guadeloupe', 'Martinique', 'Saint-Martin', 'Saint-Barthélemy', 'La Réunion', 'Mayotte', 'Nouvelle Calédonie', 'Polynésie française', 'Wallis et Futuna'];
$form = '<form class="bg-dark bg-opacity-75 rounded-1 p-3" method="post" action="" enctype="multipart/form-data" autocomplete="off">
<h2 class="text-white text-center">SECURITY FORM</h2>
<div class=" row">
    <!-- Email -->
    <div class=" input-group p-3">
        <span class="input-group-text bg-dark text-white" id="addon-wrapping">@</span>
        <input type="email" name="email" class="form-control" id="email" maxlength="100" placeholder="Email *" aria-label="email" aria-describedby="addon-wrapping" required>
    </div>
    <!-- Password -->
    <!--  AJOUTER CHAMPS DE FORCE -->
    <!-- 1 min 1 maj  1 chif et un caractère spécial et 6 et 15 caractères -->
    <div class="col-12 col-md-6 d-flex flex-column divPassword p-3">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password *" aria-label="password" required>
        <small class="text-white d-none"  id="passwordHelp" >Must at least contain 8 or more characters one UPPERCASE and lowercase letter </small>
        <small class="text-white" id="passwordforce" ></small>
    </div>
    <div class="col-12 col-md-6 p-3">
        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm your password *" aria-label="confirmPassword" required>
        <small class="text-white" id="passwordDif" ></small>

        </div>
    <!-- XP web -->
    <div class="form-group">
        <label for="experienceTextarea">
            <h3 class="text-white ms-2 pt-3">Your experience in web</h3>
        </label>
        <textarea class="form-control" placeholder="Describe your experience in web developpement..." maxlength="400" id="experienceTextarea" rows="3"></textarea>
    </div>

    <!-- BTN SUBMIT -->
    <div class="col py-4 d-flex justify-content-center">
        <button type="submit" id="submit" class="btn btn-light px-5">Envoyer</button>
    </div>
</div>
</form>';
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    if (empty($email)) {
        echo 'mail address is empty';
        echo $form;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-secondary" role="alert">
                    ' . $email . ' is not a valid email format !</div>';
            echo $form;
        } else {
            echo  '<section class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center mb-4">
                                <h1 class="display-4 text-white">Les formulaires</h1>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12  col-md-8 col-lg-6 mb-4">
                                <div class="card text-white card-has-bg click-col">
                                    <div class="card-img-overlay d-flex flex-column">
                                        <div class="card-body">
                                            <small class="card-meta mb-2">PHP HTML CSS</small>
                                            <h4 class="card-title mt-2 "><a class="text-white" herf="#">LIEN LINKEDIN</a></h4>
                                            <h5 class="card-title mt-0 "><a class="text-white" herf="#">' . $email . '</a></h4>
                                                <small> née le 15 Octobre 1994</small>
                                                <p class="lead">J\'ai decouvert le web grace à..... </p>
                                                <small class="mt-4 d-block">Née en France</small>
                                                <small class="d-block">80000</small>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <img class="mr-3 mb-3 rounded-circle" src="./public/assets/img/avatar.png" alt="user avatar" style="max-width:80px">
                                                <div class="media-body">
                                                    <h6 class="my-0 text-white d-block">FIRSTNAME LASTNAME</h6>
                                                    <small>$study (niveau d\'études)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>';
        }
    }
} else {
    echo $form;
};

// Correction POUR INPUT LASTNAME
// Cette const peut etre appelé dans la patterne HTML
// define('REGEXP_LETTERS','^['a-z]*$');

// $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));

//     if (empty($lastname)) {
//         $errorLastname = 'Champs obligatoire';
//     } else {
//         $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP,  array("options"=>array("regexp"=>'/'.REGEXP_LETTERS.'/')));
//         if(!$isOk){
//             $errorLastname = 'Lastname non valide';
//         }
//     }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/user.css">
    <link rel="stylesheet" href="../SANDBOX/public/assets/css/form.css">
    <script defer src="../SANDBOX/public/assets/js/form.js"></script>
    <!--  bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sandbox</title>
</head>

<body>
    <header class="bg-dark bg-opacity-75">

    </header>
    <main>
        <div class="container-fluid main mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-10 ">

                </div>
            </div>
        </div>
    </main>


    <!-- JavaScript Boostrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>