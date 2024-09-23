<?php

require '../config/db.php';

// Si l'email existe alors c'est que l'utilisateur est inscris, on le laisse donc procéder à sa connexion avec le mot de passe qu'il a entré
$emailExist = function (String $email) use ($db) {
    $query = mysqli_prepare($db, 'SELECT email,mdp FROM user where email = ?');
    mysqli_stmt_bind_param($query, "S", $email);
    mysqli_stmt_execute($query);

    return mysqli_stmt_num_rows($query);
};

// Ici c'est la deuxième à savoir si la combinaison email + password sont bien valide.  Si c'est le cas alors on laisse l'utilisateur se connecter

$coupleEmailPasswordExist = function ($email, $password) use ($db) {
    $query = mysqli_query($db, "SELECT * FROM user WHERE email = '$email' AND mdp = '$password'");
    return mysqli_num_rows($query);
};


$getAllUserDatas = function ($email, $password) use ($db) {
    $query = mysqli_query($db, "SELECT * FROM user WHERE email = '$email' AND mdp = '$password'");
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
};
