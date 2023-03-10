<?php
session_start();
// on se connsct à la basse
require_once '../../models/database.php';
// on recupaire la requête
require_once '../../models/book/bookModel.php';
require_once '../../models/book/typesModel.php';

$book = new book;
$bookList = $book->getBookList();

$typeBook = new types;
$type = $typeBook->getTypes();

require_once '../../views/includes/nav.php';
require_once '../../views/book/book.php';
require_once '../../views/includes/footer.php';