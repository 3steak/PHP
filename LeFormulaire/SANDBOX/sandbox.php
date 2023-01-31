<?php

// $error = [];
$listCountry = ['Belgique', 'Luxembourg', 'Suisse', 'Burundi', 'Cameroun', 'Comores', 'Djibouti', 'Guinée équatoriale', 'Madagascar', 'République centrafriquaine', 'Rwanda', 'Seychelles', 'Tchad', 'Canada', 'Haïti', 'Vanuatu', 'Algérie', 'Maroc', 'Tunisie', 'Mauritanie', 'Liban', 'Maurice', 'Andorre', 'Saint-Pierre-et-Miquelon', 'Guyane française', 'Guadeloupe', 'Martinique', 'Saint-Martin', 'Saint-Barthélemy', 'La Réunion', 'Mayotte', 'Nouvelle Calédonie', 'Polynésie française', 'Wallis et Futuna'];

require(__DIR__ .  '/config/constants.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //============================= EMAIL ================
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)); // Double nettoyage de l'email récupéré 
    if (empty($email)) { //Si $email est vide
        $error["email"] = '<small class="text-white">L\'email n\'est pas renseigné</small>'; //Message d'erreur EMAIL
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Sinon si $email ne correspond pas à un format d'adresse email
        $error["email"] = "<small>L'email ne correspond pas au format requis pour un email</small>"; //Message d'erreur EMAIL format
    }


    // ===================== Lastname : Clean and check =======================
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
    // On vérifie que ce n'est pas vide
    if (empty($lastname)) {
        $error["lastname"] = "<small>Vous devez entrer un nom!!</small>";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["lastname"] = "<small>Le nom n'est pas au bon format!!</small>";
        } else {
            // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
            if (strlen($lastname) <= 2 || strlen($lastname) >= 70) {
                $error["lastname"] = "<small>La longueur du nom n'est pas bon</small>";
            }
        }
    }


    // ===================== Firstname : Clean and check =======================
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
    // On vérifie que ce n'est pas vide
    if (empty($firstname)) {
        $error["firstname"] = "<small>Vous devez entrer un prénom !!</small>";
    } else { // Pour les champs obligatoires, on retourne une erreur
        $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if (!$isOk) {
            $error["firstname"] = "<small>Le prénom n'est pas au bon format!!</small>";
        } else {
            // Dans ce cas précis, on vérifie aussi la longueur de chaine (on aurait pu le faire aussi direct dans la regex)
            if (strlen($firstname) <= 2 || strlen($firstname) >= 70) {
                $error["firstname"] = "<small>La longueur du prénom n'est pas bonne</small>";
            }
        }
    }
    //  ======================= Linkedin ==================
    $url = trim(filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL));

    if (!empty($url)) { //Si $url est vide
        $isOk = (!filter_var($url, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_LINKEDIN . '/')))); //Sinon si $url ne correspond pas à un format url
        if (!$isOk) {
            $error["url"] = "<small>L'url ne correspond pas au format requis pour un url linkedin</small>"; //Message d'erreur url format
        }
    }

    // ============= ZIPCODE ==========
    // Nettoyage de tout les caractères ASCII 1 à 32
    $postalcode = trim(filter_input(INPUT_POST, 'postalcode', FILTER_SANITIZE_NUMBER_INT));

    if (!empty($postalcode)) {
        $isOk = filter_var($postalcode, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_ZIPCODE . '/')));
        if (!$isOk) {
            $error["postalcode"] = "<small>Vous devez entrer un code postal valide</small>";
        }
    }

    // ========== COUNTRY ========
    $country = trim(filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS));
    if (!empty($country)) {
        if (!in_array($country, $listCountry)) {
            $error["country"] = "<small>Le pays entré n'est pas valide!</small>";
        }
    }

    //  ========== BIRTHDAY =========

    $birthday = trim(filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_NUMBER_INT));

    if (!empty($birthday)) { //Si $birthday est vide
        // $isOk = (!filter_var($birthday, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_BIRTHDAY . '/'))));  //Sinon si $url ne correspond pas à un format url
        $year = date('Y', strtotime($birthday));
        if (date("Y") - $year < 18 || date('Y') - $year > 120) {
            $error['birthday'] = "<small>La date de naissance n'est pas valide</small>"; //Message d'erreur url format
        }
    }

    // ========= LANGUAGES WEB =============

    $languages = filter_input(INPUT_POST, 'languages', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
    foreach ($languages as $language) {
        if ($language < 0 || $language > 4) {
            $error['language'] = "Incorrect language ";
        }
    }
    // =========== Password ========== 
    $password = filter_input(INPUT_POST, 'password');
    $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

    if (empty($password) || empty($confirmPassword)) {
        $error['password'] = '<small class="text-white">Veuillez renseigner un mot de passe</small>';
    } else {
        if ($password != $confirmPassword) {
            $error['password'] = '<small class="text-white">Veuillez entrer le même mot de passe</small>';
        } else {
            // VERIF PAR REGEX
        }
        // Encodage du MDP
        $paswordHash = password_hash($password, PASSWORD_DEFAULT);
    }




    // ========== TEXTAERA ======================

    $experience = trim((string) filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_SPECIAL_CHARS));

    // ========== FILE AVATAR ======================

    // if (isset($_FILES['avatar'])) {
    //     $file = $_FILES['avatar']['name'];
    //     $filetype = $_FILES['avatar']['type'];

    //     if (!empty($file)) {
    //         if ($_FILES['avatar']['error'] != 0) {
    //             $error['file'] = '<small class="text-white">Une erreur est survenue</small>';
    //         } else {
    //             // Si l'extension n'est pas dans le format renseigner dans le tableau EXTENSION
    //             if (!in_array($filetype, EXTENSION)) {
    //                 $error['type'] = '<small class="text-white">Fichier non valide</small>';
    //             } else {
    //                 $extenstion = pathinfo($file, PATHINFO_EXTENSION);
    //                 $fileName = 'avatarUser.' . $extenstion;
    //                 $from = $_FILES['avatar']['tmp_name'];
    //                 $to = '/public/assets/uploads/profilPicture/' . $fileName;
    //                 move_uploaded_file($from, $to);
    //             }
    //         }
    //     } else {
    //         $error['file'] = '<small class="text-white">Fichier non renseigné</small>';
    //     }
    // }


    // fin du premier if
}



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
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($error)) { ?>
                        <!------ Formulaire ------>
                        <form class="bg-dark bg-opacity-75 rounded-1 p-3" method="post" enctype="multipart/form-data" autocomplete="off">
                            <h2 class="text-white text-center">SECURITY FORM</h2>
                            <div class=" row">
                                <!-- Profil picture -->
                                <div>
                                    <div class="d-flex justify-content-center mt-4 mb-1 ">
                                        <img src="./public/assets/img/avatar.png" class="avatar" alt="avatar" />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-light mb-4">
                                            <label class="form-label text-dark m-1 " for="avatar">Choose your avatar</label>
                                            <input type="file" name="avatar" class="form-control d-none" id="avatar" accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fistname -->
                                <div class="col-12 col-md-6 p-3">
                                    <input type="text" class="form-control" name="firstname" id="firstname" pattern="[A-Za-zÀ-ÿ' `\-]{2,20}" placeholder="Firstname *" aria-label="First name" required>
                                </div>
                                <?= $error['firstname'] ?? '' ?>
                                <!-- Lastname -->
                                <div class="col-12 col-md-6 p-3">
                                    <input type="text" class="form-control" name="lastname" id="lastname" pattern="[A-Za-zÀ-ÿ' `\-]{2,20}" placeholder="Last name *" aria-label="Lastname" required>
                                </div>
                                <?= $error['lastname'] ?? '' ?>
                                <!-- Country -->
                                <div class="col-12 col-md-6 p-3">
                                    <select class="form-select " id="nativeCountry" name="country" aria-label="Native country ">
                                        <option selected>Native country *</option>
                                        <?php
                                        foreach ($listCountry as $country) {
                                            echo  "<option>$country</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?= $error['country'] ?? '' ?>
                                <!-- PostalCode -->
                                <div class="col-12 col-md-4  p-3">
                                    <input type="text" name="postalcode" class="form-control" size="5" id="postalcode" placeholder="PostalCode *" pattern="[0-9]{5,5}" aria-label="Postal Code" required>
                                </div>
                                <?= $error['postalcode'] ?? '' ?>
                                <div class=" input-group p-3">
                                    <span class="input-group-text bg-dark text-white" id="addon-wrapping">@</span>
                                    <input type="email" name="email" class="form-control" id="email" maxlength="100" placeholder="Email *" aria-label="email" aria-describedby="addon-wrapping" required>
                                </div>
                                <?= $error['email'] ?? '' ?>

                                <!-- Password -->
                                <div class="col-12 col-md-6 d-flex flex-column divPassword p-3">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password *" aria-label="password" required>
                                    <small class="text-white d-none" id="passwordHelp">Must at least contain 8 or more characters one UPPERCASE and lowercase letter </small>
                                    <small class="text-white" id="passwordforce"></small>
                                </div>
                                <div class="col-12 col-md-6 p-3">
                                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm your password *" aria-label="confirmPassword" required>
                                    <small class="text-white" id="passwordDif"></small>
                                </div>
                                <!-- Birthday -->
                                <div class="col-12 col-md-6 px-3">
                                    <h3 class="text-white ms-2 pt-3">Your Birthday</h3>
                                    <input type="date" name="birthday" class="form-control" id="birthday" placeholder="" aria-label="birthday">
                                </div>
                                <?= $error['birthday'] ?? '' ?>
                                <!-- Url -->
                                <div class="col-12 col-md-6 px-3">
                                    <h3 class="text-white ms-2 pt-3">Your linkedin</h3>
                                    <input type="url" class="form-control" name="url" id="url" placeholder="https://linkedin.com" pattern="https?://.+" aria-label="url">
                                </div>
                                <?= $error['url'] ?? '' ?>

                                <!-- Study -->
                                <div class="btn-group col-12 col-md-6 d-flex flex-column  p-3">
                                    <h3 class="text-white ms-2 pt-3 mb-2">Your study</h3>
                                    <input type="radio" class="btn-check" value="0" name="studyLvl" id="studyBac" checked />
                                    <label class="btn btn-dark mx-auto w-75" for="studyBac">Bac</label>

                                    <input type="radio" class="btn-check" value="1" name="studyLvl" id="studyBac2" />
                                    <label class="btn btn-dark mx-auto w-75" for="studyBac2">Bac+2</label>

                                    <input type="radio" class="btn-check" value="2" name="studyLvl" id="studyBac3" />
                                    <label class="btn btn-dark mx-auto w-75" for="studyBac3">Bac+3</label>

                                    <input type="radio" class="btn-check" value="3" name="studyLvl" id="studySup" />
                                    <label class="btn btn-dark mx-auto w-75" for="studySup">Supérior</label>
                                </div>

                                <!-- Web language -->
                                <div class="col-12 col-md-6 p-3 ">
                                    <h3 class="text-white ms-2 pt-3">Web languages you know? </h3>
                                    <div class="bg-dark rounded-2 text-white p-4 d-flex flex-column ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="0" id="htmlCheck">
                                            <label class="form-check-label" for="htmlCheck">
                                                HTML/CSS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="1" id="phpCheck">
                                            <label class="form-check-label" for="phpCheck">
                                                PHP
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="2" id="javascriptCheck">
                                            <label class="form-check-label" for="javascriptCheck">
                                                Javascript
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="3" id="pythonCheck">
                                            <label class="form-check-label" for="pythonCheck">
                                                Python
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="languages[]" value="4" id="autresCheck">
                                            <label class="form-check-label" for="autresCheck">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- XP web -->
                            <div class="form-group">
                                <label for="experienceTextarea">
                                    <h3 class="text-white ms-2 pt-3">Your experience in web</h3>
                                </label>
                                <textarea class="form-control" placeholder="Describe your experience in web developpement..." name='experience' maxlength="400" id="experienceTextarea" rows="3"></textarea>
                            </div>

                            <!-- BTN SUBMIT -->
                            <div class="col py-4 d-flex justify-content-center">
                                <button type="submit" id="submit" class="btn btn-light px-5">Envoyer</button>
                            </div>
                </div>
                </form>
            <?php } else { ?>

                <!-- Affichage -->
                <section class="wrapper">
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
                                            <h4 class="card-title mt-2 "><a class="text-white" herf="#"><?= $url ?? '' ?></a></h4>
                                            <h5 class="card-title mt-0 "><a class="text-white" herf="#"><?= $email ?? '' ?></a></h4>
                                                <small><?= $birthday ?? '' ?></small>
                                                <p class="lead">J\'ai decouvert le web grace à..... </p>
                                                <small class="mt-4 d-block">Née en <?= $country ?? '' ?></small>
                                                <small class="d-block"><?= $postalcode ?? '' ?></small>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <img class="mr-3 mb-3 rounded-circle" src="./public/assets/img/avatar.png" alt="user avatar" style="max-width:80px">
                                                <div class="media-body">
                                                    <h6 class="my-0 text-white d-block"><?php echo "$firstname ?? '' ,  $lastname ?? ''" ?></h6>
                                                    <small>$study (niveau d\'études)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section> <?php  } ?>
            </div>
        </div>
        </div>
    </main>


    <!-- JavaScript Boostrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>