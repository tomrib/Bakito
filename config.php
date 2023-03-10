<?php
$regex = [
    'name' => '/^[A-Za-z\- áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,20}$/',
    'password' => '/^$/',
];

define('USER_LASTNAME_ERROR_EMPTY', 'Le nom de famille est obligatoire.');
define('USER_LASTNAME_ERROR_INVALID', 'Le nom de famille ne peut comporter que des lettres en majuscule et minuscule, des tirets ou des espaces. Il ne peut contenir que 20 caractères.');

define('USER_FIRSTNAME_ERROR_EMPTY', 'Le prénom est obligatoire.');

define('USER_USERNAME_ERROR_ALREADY_EXISTS', 'Ce nom d\'utilisateur existe déjà.');
define('USER_EMAIL_ERROR_ALREADY_EXISTS', 'Cette adresse mail est déjà utilisée.');

define('USER_LOGIN_ERROR',  `Nom d'utilisateur ou mot de passe incorette`);
