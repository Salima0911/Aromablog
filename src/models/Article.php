<?php

require '../config/db.php';


$fourthLastArticles = function () use ($db) {
    $query = mysqli_query($db, 'SELECT * FROM article LIMIT 4');
    $articles = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $articles;
};

$getArticleById = function ($id) use ($db) {

    $query = mysqli_query($db, "SELECT * FROM article WHERE id = '$id'");
    $article = mysqli_fetch_assoc($query, MYSQLI_ASSOC);

    return $article;
};

// var_dump($recettes);
