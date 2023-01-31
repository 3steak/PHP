<!------ Formulaire ------>
<form class="bg-dark bg-opacity-75 rounded-1 p-3" method="post" enctype="multipart/form-data" autocomplete="off">
    <h2 class="text-white text-center">SECURITY FORM</h2>
    <div class=" row">
        <!-- Profil picture -->
        <div>
            <div class="d-flex justify-content-center mt-4 mb-1 ">
                <img src="../../public/assets/img/avatar.png" class="avatar" alt="avatar" />
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