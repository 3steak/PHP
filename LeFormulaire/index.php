<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/form.css">
    <script defer src="./public/assets/js/script.js"></script>
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

                    <!-- Formulaire -->
                    <form class="bg-dark bg-opacity-75 rounded-1 p-3" method="post" action="user.php" enctype="multipart/form-data">
                        <h2 class="text-white text-center">SECURITY FORM</h2>
                        <div class=" row">
                            <!-- Profil picture -->
                            <div>
                                <div class="d-flex justify-content-center mt-4 mb-1">
                                    <img src="./public/assets/img/avatar.png" class="" alt="avatar" style="width:  150px;" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-dark mb-4">
                                        <label class="form-label text-white m-1 " for="avatar">Choose your avatar</label>
                                        <input type="file" name="file" class="form-control d-none" id="avatar" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 p-3">
                                <input type="text" class="form-control" name="firstname" id="firstname" minlength="2" maxlength="25" pattern="\w{2,25}" placeholder="Firstname *" aria-label="First name" required>
                            </div>
                            <div class="col-12 col-md-6 p-3">
                                <input type="text" class="form-control" name="lastname" id="lastname" minlength="2" maxlength="25" pattern="\w{2,25}" placeholder="Last name *" aria-label="Lastname" required>
                            </div>
                            <div class="col-12 col-md-8 p-3">
                                <select class="form-select " name="country" aria-label="Native country ">
                                    <option selected>Native country *</option>
                                    <option>France</option>
                                    <option>Angleterre</option>
                                    <option>Danemark</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 p-3">
                                <input type="text" name="postalcode" class="form-control" size="5" id="postalcode" placeholder="PostalCode *" aria-label="Postal Code" required>
                            </div>

                            <div class=" input-group p-3">
                                <span class="input-group-text bg-dark text-white" id="addon-wrapping">@</span>
                                <input type="mail" name="mail" class="form-control" id="email" pattern="" maxlength="100" placeholder="Email *" aria-label="email" aria-describedby="addon-wrapping" required>
                            </div>

                            <div class="col-12 col-md-6 px-3">
                                <h3 class="text-white ms-2 pt-3">Your Birthday</h3>
                                <input type="date" name="birthday" class="form-control" id="birthdayUser" placeholder="" aria-label="birthdayUser" required>
                            </div>
                            <div class="col-12 col-md-6 px-3">
                                <h3 class="text-white ms-2 pt-3">Your Study</h3>
                                <select class="form-select" name="study" aria-label="Level of study">
                                    <option selected>Level of study </option>
                                    <option>Without</option>
                                    <option>Bac</option>
                                    <option>Bac +2</option>
                                    <option>Bac +3</option>
                                    <option>Superior</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 p-3">
                                <h3 class="text-white ms-2 pt-3">Your linkedin</h3>
                                <input type="url" class="form-control" name="url" id="url" placeholder="https://linkedin.com" pattern="https://.*" aria-label="url">
                            </div>
                            <div class="col-12 col-md-6 p-3 ">
                                <h3 class="text-white ms-2 pt-3">Web languages you know? </h3>
                                <div class="bg-dark rounded-2 text-white p-4 d-flex flex-column justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="choix[]" value="html" id="htmlCheck">
                                        <label class="form-check-label" for="htmlCheck">
                                            HTML/CSS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="choix[]" value="php" id="phpCheck" checked>
                                        <label class="form-check-label" for="phpCheck">
                                            PHP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="choix[]" value="javascript" id="javascriptCheck" checked>
                                        <label class="form-check-label" for="javascriptCheck">
                                            Javascript
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="choix[]" value="python" id="pythonCheck" checked>
                                        <label class="form-check-label" for="pythonCheck">
                                            Python
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="choix[]" value="autres" id="autresCheck" checked>
                                        <label class="form-check-label" for="autresCheck">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="experienceTextarea">
                                    <h3 class="text-white ms-2 pt-3">Your experience in web</h3>
                                </label>
                                <textarea class="form-control" placeholder="Describe your experience in web developpement..." maxlength="400" id="experienceTextarea" rows="3"></textarea>
                            </div>
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