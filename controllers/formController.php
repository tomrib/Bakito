<?php

$formErrors = [];
$regex = [
    'lastname' => '/^[A-Za-z \-\'áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,30}$/',
    'mail' => "/^[A-Za-z0-9+_.-]+@(.+)$/",
    'cellphone'  => "/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/",
    'address' => '/[^!<>?\/$£%§*µ+-=@\\|[{~&\]}°$]/',
];

if (isset($_POST['submit'])) {
    //!civility
    if (!empty($_POST['civility'])) {

        if ($_POST['civility'] == 'Monsieur' || $_POST['civility'] == 'Madame') {

            $civility = $_POST['civility'];
        } else {

            $formErrors['civility'] = 'Séclectionner la civilité dans le liste.';
        }
    } else {

        $formErrors['civility'] = 'la civilité est obligatoire.';
    }
    //!lastname
    if (!empty($_POST['lastname'])) {

        if (preg_match($regex['lastname'], $_POST['lastname'])) {

            $lastname = strip_tags(strtoupper($_POST['lastname']));
            //retire les balic html

        } else {

            $formErrors['lastname'] = 'Le nom de famille ne peut contenir que des lettres, et des carataire spesiel';
        }
    } else {

        $formErrors['lastname'] = 'Le nom de famille et obligatoire';
    }

    //!firstname
    if (!empty($_POST['firstname'])) {

        if (preg_match($regex['firstname'], $_POST['firstname'])) {

            $lastname = strip_tags(strtoupper($_POST['firstname']));
        } else {

            $formErrors['firstname'] = 'Le prénom de famille ne peut contenir que des lettres, et des carataire spesiel';
        }
    } else {

        $formErrors['firstname'] = 'Le prénom et obligatoire';
    }
    //!adress
    if (!empty($_POST['address'])) {
        if (preg_match($regex['address'], $_POST['address'])) {

            $address = strip_tags(strtoupper($_POST['address']));
        } else {

            $formErrors['address'] = 'L\'adresse ne peut contenir que des lettres, et des carataire spesiel';
        }
    } else {
        $formErrors['address'] = 'L\'adresse et obligatoire';
    }

    //!code postal
    if (!empty($_POST['postalCcode'])) {

        if ($_POST['postalCcode']) {

            $postalCcode = strip_tags(strtoupper($_POST['postalCcode']));
        } else {

            $formErrors['postalCcode'] = 'Séclectionner le code postal dans le liste.';
        }
    } else {

        $formErrors['postalCcode'] = 'le code postel est obligatoire.';
    }
    //!ville

    if (!empty($_POST['city'])) {

        if (preg_match($regex['address'], $_POST['city'])) {

            $city = strip_tags(strtoupper($_POST['city']));
        } else {

            $formErrors['city'] = 'Le nom de la ville ne peut contenir que des lettres, et des carataire spesiel';
        }
    } else {

        $formErrors['city'] = 'Le nom de la ville et obligatoire';
    }
    //!email
    if (!empty($_POST['email'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $formErrors['email'] = 'l\'adresse mail nes pas valide';
        }
    } else {
        $formErrors['email'] = 'l\'adresse mail est obligatoir';
    }
    //!password
    if (!empty($_POST['password'])) {
        if (strlen($_POST['password'])) {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        } else {
            $formErrors['password'] = 'le mot de passe doit conporte 8 carataires obligatoir';
        }
    } else {
        $formErrors['password'] = 'me mot de passe est obligatoire';
    }
    //!confirmPassword
    if (!empty($_POST['confirmPassword'])) {
        if ($_POST['confirmPassword'] === $_POST['password']) {
            $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_BCRYPT);
        } else {
            $formErrors['confirmPassword'] = 'les mot de passe neus son pas identique';
        }
    } else {
        $formErrors['confirmPassword'] = 'me mot de passe est obligatoire';
    }
}
require_once '../views/includes/nav.php';
require_once '../views/form.php';
require_once '../views/includes/footer.php';
