    <div class="formContainer">
        <div class="formTitle">
            <h2>Inscrition</h2>
        </div>
        <form action="" method="POST" class="formDeco">
            <div class="clf">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility" value="<?= @$_POST['civility'] ?>" class="<?= isset($formErrors['civility']) ? 'inputError' : '' ?>">
                    <option selected disabled>---</option>
                    <option value="Monsieur" <?= @$_POST['civility'] == 'Monsieur' ? 'selected' : ' ' ?>>Monsieur</option>
                    <option value="Madame" <?= @$_POST['civility'] == 'Madame' ? 'selected' : ' ' ?>>Madame</option>
                </select>
                <p class="errorMessage"><?= @$formErrors['civility'] ?></p>
                <!--Nom-->
                <label for="lastname">Nom de famille</label>
                <input type="text" name="lastname" id="lastname" placeholder="Dupont" value="<?= @$_POST['lastname'] ?>" class="<?= isset($formErrors['lastname']) ? 'inputError' : '' ?>">
                <p class="errorMessage"><?= @$formErrors['lastname'] ?></p>
                <!--prenom-->
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="paul" value="<?= @$_POST['firstname'] ?>" class="<?= isset($formErrors['firstname']) ? 'inputError' : '' ?>">
                <p class="errorMessage"><?= @$formErrors['firstname'] ?></p>
            </div>
            <div class="cityPostal">
                <!--Adresse-->
                <label for="address">Adresse</label>
                <input type="text" id="address" name="address" placeholder="259 rue paul du pont ">
                <p class="errorMessage">
                    <?= @$formErrors['address'] ?>
                </p>
                <!--code pastel-->
                <label for="postalCcode">Code postal</label>
                <select name="postalCcode" id="postalCcode">
                    <option selected disabled>---</option>
                    <option value=""></option>
                </select>
                <p class="errorMessage"><?= @$formErrors['postalCcode'] ?></p>
                <!--ville-->
                <label for="city">ville</label>
                <input type="text" id="city" name="city" placeholder="paris">
                <p class="errorMessage"><?= @$formErrors['city'] ?></p>
            </div>
            <div class="passMail">
                <!--mail-->
                <label for="email">Adresse email</label>
                <input type="email" name="email" id="email" placeholder="pauldupont@gmal.com" value="<?= @$_POST['email'] ?>" class="<?= isset($formErrors['email']) ? 'inputError' : '' ?>">
                <p class="errorMessage"><?= @$formErrors['email'] ?></p>
                <!--mot de passe-->
                <label for="password">mot de passe</label>
                <input type="password" name="password" id="password" placeholder="**************" class="<?= isset($formErrors['password']) ? 'inputError' : '' ?>">
                <p class="errorMessage"><?= @$formErrors['password'] ?></p>
                <!--confimation du mot de pass-->
                <div id="textPassWord" class="noBoxPass">
                <ul>
                    <li id="lower">Au moin 1 minuscule<span></span><span></span></li>
                    <li id="upper">Au moin 1 majuscule<span></span><span></span></li>
                    <li id="number">Au moin 1 chiffre<span></span><span></span></li>
                    <li id="special">Au moin un caractére spécial<span></span><span></span></li>
                    <li id="stringLength">Au moin 8 caractéres<span></span><span></span></li>
                </ul>
            </div>
                <label for="confirmPassword">confimet le mot de passe</label>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="**************" class="<?= isset($formErrors['password']) ? 'inputError' : '' ?>">
                <p class="errorMessage"><?= @$formErrors['confirmPassword'] ?></p>
                <!--liste des condition des carataire des mot de passe 
vous pour plus de securete-->
            </div>
            
            <input type="submit" class="button" name="submit" value="Enregistrer">
        </form>
    </div>