<?php
include(__DIR__ . '/../config/constants.php');

$listCountry = ['Belgique', 'Luxembourg', 'Suisse', 'Burundi', 'Cameroun', 'Comores', 'Djibouti', 'Guinée équatoriale', 'Madagascar', 'République centrafriquaine', 'Rwanda', 'Seychelles', 'Tchad', 'Canada', 'Haïti', 'Vanuatu', 'Algérie', 'Maroc', 'Tunisie', 'Mauritanie', 'Liban', 'Maurice', 'Andorre', 'Saint-Pierre-et-Miquelon', 'Guyane française', 'Guadeloupe', 'Martinique', 'Saint-Martin', 'Saint-Barthélemy', 'La Réunion', 'Mayotte', 'Nouvelle Calédonie', 'Polynésie française', 'Wallis et Futuna'];

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

include_once(__DIR__ . '/../views/templates/header.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($error)) {
    include(__DIR__ . '/../views/home.php');
} else {
    include(__DIR__ . '/../views/userData.php');
};
include_once(__DIR__ . '/../views/templates/footer.php');
