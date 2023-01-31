<?php

$listCountry = ['Belgique', 'Luxembourg', 'Suisse', 'Burundi', 'Cameroun', 'Comores', 'Djibouti', 'Guinée équatoriale', 'Madagascar', 'République centrafriquaine', 'Rwanda', 'Seychelles', 'Tchad', 'Canada', 'Haïti', 'Vanuatu', 'Algérie', 'Maroc', 'Tunisie', 'Mauritanie', 'Liban', 'Maurice', 'Andorre', 'Saint-Pierre-et-Miquelon', 'Guyane française', 'Guadeloupe', 'Martinique', 'Saint-Martin', 'Saint-Barthélemy', 'La Réunion', 'Mayotte', 'Nouvelle Calédonie', 'Polynésie française', 'Wallis et Futuna'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/form.css">
    <script defer src="./public/assets/js/form.js"></script>
    <!--  bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Le formulaire</title>
</head>

<body>
    <header class="bg-dark bg-opacity-75">

    </header>
    <main>
        <div class="container-fluid main mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-10 ">

                    <!------ Formulaire ------>
                    <form class="bg-dark bg-opacity-75 rounded-1 p-3" method="post" action="" enctype="multipart/form-data" autocomplete="off">
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
                            <!-- Lastname -->
                            <div class="col-12 col-md-6 p-3">
                                <input type="text" class="form-control" name="lastname" id="lastname" pattern="[A-Za-zÀ-ÿ' `\-]{2,20}" placeholder="Last name *" aria-label="Lastname" required>
                            </div>

                            <!--  Créer un tableau PHP avec tous les pays -->
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
                            <!-- PostalCode -->
                            <div class="col-12 col-md-4  p-3">
                                <input type="text" name="postalcode" class="form-control" size="5" id="postalcode" placeholder="PostalCode *" pattern="[0-9]{5,5}" aria-label="Postal Code" required>
                            </div>
                            <!-- Email -->
                            <div class=" input-group p-3">
                                <span class="input-group-text bg-dark text-white" id="addon-wrapping">@</span>
                                <input type="email" name="email" class="form-control" id="email" maxlength="100" placeholder="Email *" aria-label="email" aria-describedby="addon-wrapping" required>
                            </div>
                            <!-- Password -->
                            <!--  AJOUTER CHAMPS DE FORCE -->
                            <!-- pattern="^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[!@#$%^&*_=+-]).{6,15}$" -->
                            <!-- 1 min 1 maj  1 chif et un caractère spécial et 6 et 15 caractères -->
                            <div class="col-12 col-md-6 p-3">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password *" aria-label="password" required>
                                <small class="text-white help">Must contain 8 or more characters, one number, one special character and one UPPERCASE and lowercase letter </small>
                                <small class="text-white passwordforce">Password can be better</small>
                                <small class="text-white passwordforce">Password is great</small>
                                <small class="text-white passwordforce">Perfect Password</small>
                            </div>
                            <div class="col-12 col-md-6 p-3">
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm your password *" aria-label="confirmPassword" required>
                            </div>
                            <!-- Birthday -->
                            <div class="col-12 col-md-6 px-3">
                                <h3 class="text-white ms-2 pt-3">Your Birthday</h3>
                                <input type="date" name="birthday" class="form-control" id="birthdayUser" placeholder="" aria-label="birthdayUser" required>
                            </div>
                            <!-- Url -->
                            <div class="col-12 col-md-6 px-3">
                                <h3 class="text-white ms-2 pt-3">Your linkedin</h3>
                                <input type="url" class="form-control" name="url" id="url" placeholder="https://linkedin.com" pattern="https?://.+" aria-label="url">
                            </div>
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
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="html" id="htmlCheck">
                                        <label class="form-check-label" for="htmlCheck">
                                            HTML/CSS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="php" id="phpCheck" checked>
                                        <label class="form-check-label" for="phpCheck">
                                            PHP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="javascript" id="javascriptCheck" checked>
                                        <label class="form-check-label" for="javascriptCheck">
                                            Javascript
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="python" id="pythonCheck" checked>
                                        <label class="form-check-label" for="pythonCheck">
                                            Python
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="autres" id="autresCheck" checked>
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
                            <textarea class="form-control" placeholder="Describe your experience in web developpement..." maxlength="400" id="experienceTextarea" rows="3"></textarea>
                        </div>

                        <!-- BTN SUBMIT -->
                        <div class="col py-4 d-flex justify-content-center">
                            <button type="submit" id="submit" class="btn btn-light px-5">Envoyer</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>


    <!-- JavaScript Boostrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>