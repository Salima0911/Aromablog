<?php require '../models/Article.php';

if (!isset($_GET['id'])) {
    header('location: /');
} else if (!isset($_SESSION['user'])) {
    $_SESSION['message']['info'] = "Vous devez être connecter pour voir l'article";
    $_SESSION['required_auth'] = $_SERVER['REQUEST_URI']; // /article?id=1
    header('location: /login');
}




require '../public/views/article.view.php';
