<main class="loginContainer">
    <div class="titleLogin">
    <h2>Connexion</h2>
    </div>
    <form action="">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" placeholder="pauldupont@gmal.com" value="<?= @$_POST['email'] ?>" class="<?= isset($formErrors['email']) ? 'inputError' : '' ?>">
        <p class="errorMessage"><?= @$formErrors['email'] ?></p>
        <label for="password">mot de passe</label>

        <input type="password" name="password" id="password" placeholder="**************" class="<?= isset($formErrors['password']) ? 'inputError' : '' ?>">
        <p class="errorMessage"><?= @$formErrors['password'] ?></p>
        
        <input type="submit" class="button" name="submit" value="Connexion">
    </form>
</main>