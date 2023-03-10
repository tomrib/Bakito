<?php
require_once '../../models/database.php';
require_once '../../models/user/usersModel.php';
require_once '../../config.php';

$formErrors = [];

$user = new users;

if (!empty($_GET['loginEmail'])) {
    $user->email = $_GET['loginEmail'];
    if ($user->checkIfUserExists('email') > 0) {
        $password = $user->getPassword();
    } else {
        $formErrors['loginEmail'] = 'Nom d\'utilisateur ou mot de passe incorette';
    }
} else {
    $formErrors['loginEmail'] = 8;
}
if (!empty($_GET['loginPassword'])) {
    if (isset($password)) {
        if (password_verify($_GET['loginPassword'], $password)) {
            $_SESSION['user'] = $user->getIds();
        } else {
            $formErrors['loginEmail'] = 'Nom d\'utilisateur ou mot de passe incorette';
        }
    }else{
        $formErrors['loginEmail'] = 'Nom d\'utilisateur ou mot de passe incorette';
    }
} else {
    $formErrors['loginEmail'] = 'Nom d\'utilisateur ou mot de passe incorette';
}

echo json_encode($formErrors);