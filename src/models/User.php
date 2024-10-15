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
    // Préparer la requête SQL pour sélectionner l'utilisateur par email
    $stmt = mysqli_prepare($db, 'SELECT * FROM user WHERE email = ?');
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Vérifier si l'utilisateur existe
    $user = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if (!$user) {
        return ['success' => false, 'message' => "L'adresse email n'existe pas."];
    }

    // Vérifier le mot de passe
    if (password_verify($password, $user['mdp'])) {
        return ['success' => true, 'user' => $user];
    } else {
        return ['success' => false, 'message' => "Le mot de passe est incorrect."];
    }
};


$getUserByEmail = function ($email) use ($db) {
    // Préparer la requête SQL pour sélectionner l'utilisateur par email
    $stmt = mysqli_prepare($db, 'SELECT * FROM user WHERE email = ?');

    // Lier l'email à la requête
    mysqli_stmt_bind_param($stmt, 's', $email);

    // Exécuter la requête
    mysqli_stmt_execute($stmt);

    // Récupérer le résultat
    $result = mysqli_stmt_get_result($stmt);

    // Obtenir les données de l'utilisateur
    $user = mysqli_fetch_assoc($result);

    // Fermer la requête préparée
    mysqli_stmt_close($stmt);

    // Retourner les données de l'utilisateur ou null si non trouvé
    return $user ? $user : null;
};

// Fonction pour enregistrer un utilisateur
$registerUser = function ($datas = ['firstName' => '', 'name' => '', 'email' => '', 'password' => '']) use ($db) {
    extract($datas);
    // Vérifier si l'email existe déjà
    $stmt = mysqli_prepare($db, 'SELECT id FROM user WHERE email = ?');
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($result)) {
        // Si l'email existe déjà
        return ['success' => false, 'message' => "L'adresse email est déjà utilisée."];
    }

    mysqli_stmt_close($stmt);

    // Hacher le mot de passe avec BCRYPT
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Préparer la requête SQL pour insérer le nouvel utilisateur
    $stmt = mysqli_prepare($db, 'INSERT INTO user (name, email, mdp) VALUES (?, ?, ?)');

    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $hashed_password);

    // Exécuter la requête
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        return ['success' => true];
    } else {
        mysqli_stmt_close($stmt);
        return ['success' => false, 'message' => "Une erreur s'est produite lors de l'enregistrement. Veuillez réessayer."];
    }
};

// Fonction pour mettre à jour les données d'un utilisateur
$updateUser = function ($id, $name, $email, $password = null, $picture = null) use ($db) {

    // Vérifier si l'email existe déjà pour un autre utilisateur
    $stmt = mysqli_prepare($db, 'SELECT id FROM user WHERE email = ? AND id != ?');
    mysqli_stmt_bind_param($stmt, 'si', $email, $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($result)) {
        // Si l'email existe déjà pour un autre utilisateur
        return ['success' => false, 'message' => "L'adresse email est déjà utilisée."];
    }

    mysqli_stmt_close($stmt);

    // Préparer la requête de mise à jour
    $stmt = mysqli_prepare($db, 'UPDATE user SET name = ?, email = ?' . ($password ? ', mdp = ?' : '') . ($picture ? ', picture = ?' : '') . ' WHERE id = ?');

   

    if ($picture && $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        mysqli_stmt_bind_param($stmt, 'ssssi', $name, $email, $hashed_password, $picture, $id);
    } elseif ($picture) {
        mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $picture, $id);
    } elseif ($password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $hashed_password, $id);
    } else {
        mysqli_stmt_bind_param($stmt, 'ssi', $name, $email, $id);
    }

    // Exécuter la requête
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        return ['success' => true];
    } else {
        mysqli_stmt_close($stmt);
        return ['success' => false, 'message' => "Une erreur s'est produite lors de la mise à jour. Veuillez réessayer."];
    }
};
