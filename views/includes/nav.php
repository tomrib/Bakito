<?php var_dump($_SESSION); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>BAKITO</title>
</head>

<body>
    <nav class="navBar">
        <!--dans la div delivered sa contien les livre les cat&égorie mis a gauche de la nav-->
        <div class="delivered">
            <a href="/manga"><button>Manga</button></a>
            <button>Catégorie </button>
            <button>Nouveautés</button>
        </div>
        <form action="/manga" method="GET" name="research">
            <input type="search" name="keyword" placeholder="Recherche...">
            <button name="valid">Valide</button>
        </form>
        <div class="connect">
            <?php if (isset($_SESSION['user'])) {?>
                <?php if (isset($_SESSION['user']['id_useradmin']) === 2) {?>
                    <a href="/ajout"><button>Ajoute un livre</button></a>
                    <?php } ?>
                    <a href="/Deconnexion"><button>Déconnexion</button></a>
                    <a href="/Profil"><button>Profil</button></a>
            <?php } else { ?>
                <a href="/inscription"><button>Inscription</button></a>
                <button id="boxuser">Connexion</button>
            <?php } ?>
        </div>
    </nav>

    <main id="loginContainer" class="norowuser">
        <div id="formErrorsEmail"></div>
            <label for="loginEmail">Adresse email</label>
            <input type="email" name="loginEmail" id="loginEmail" placeholder="pauldupont@gmal.com" class="<?= isset($formErrors['email']) ? 'inputError' : '' ?>">
            <label for="loginPassword">mot de passe</label>
            <input type="password" name="loginPassword" id="loginPassword" placeholder="**************" class="<?= isset($formErrors['loginPassword']) ? 'inputError' : '' ?>">
            <button type="submit" id="login">Connexion</button>
    </main>
    
        <h1><a href="/accueil" class="acceuil">BAKITO </a></h1>
