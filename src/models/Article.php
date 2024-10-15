<?php

require '../config/db.php';


$fourthLastArticles = function () use ($db) {
    // Prépare une requête SQL pour sélectionner les 4 derniers articles en utilisant une clause ORDER BY
    $stmt = mysqli_prepare($db, 'SELECT * FROM article ORDER BY id DESC LIMIT 4');

    // Exécute la requête préparée
    mysqli_stmt_execute($stmt);

    // Récupère le résultat de la requête exécutée
    $result = mysqli_stmt_get_result($stmt);

    // Récupère toutes les lignes du résultat sous forme de tableau associatif
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Ferme la déclaration pour libérer les ressources associées
    mysqli_stmt_close($stmt);

    // Retourne le tableau contenant les articles
    return $articles;
};

$getArticleById = function ($id) use ($db) {
    // Prépare une requête SQL pour sélectionner un article en fonction de son id
    $stmt = mysqli_prepare($db, 'SELECT * FROM article WHERE id = ?');

    // Associe le paramètre $id à la requête préparée, en s'assurant qu'il s'agit d'un entier (i pour integer)
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Exécute la requête préparée
    mysqli_stmt_execute($stmt);

    // Récupère le résultat de la requête exécutée
    $result = mysqli_stmt_get_result($stmt);

    // Récupère la première ligne du résultat sous forme de tableau associatif
    $article = mysqli_fetch_assoc($result);

    // Ferme la déclaration pour libérer les ressources associées
    mysqli_stmt_close($stmt);

    // Retourne l'article sous forme de tableau associatif
    return $article;
};

$registerArticle = function () use ($db) {
    // @TODO Enregister un article
};
