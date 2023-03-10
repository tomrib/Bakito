<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['id_useradmin'] !== 2 || $_SESSION['user']['id_useradmin'] !== 3) {
    // $_SERVER('HTTP_REFERER') = renvoit sur la page presedante
    header('Location:'.$_SERVER('HTTP_REFERER'));
    exit;
}
require_once '../../models/database.php';
require_once '../../models/bookModel.php';
require_once '../models';


require_once '../views/includes/nav.php';
require_once '../views/book/addBook.php';
require_once '../views/includes/footer.php';