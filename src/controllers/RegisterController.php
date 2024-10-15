<?php

require '../models/User.php';


// echo 'je suis le controller';



// Initialiser les variables de message d'erreur
$errors = [];
$success = false;

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire avec un minimum de nettoyage
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);
    $role = 'visiteur'; // Par défaut, le rôle est "visiteur"

    // Validation des champs
    if (empty($name)) {
        $errors['name'] = "Le nom est requis.";
    }

    if (empty($email)) {
        $errors['email'] = "L'email est requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse email n'est pas valide.";
    }

    if (empty($password)) {
        $errors['password'] = "Le mot de passe est requis.";
    } elseif (strlen($password) < 6) {
        $errors['password'] = "Le mot de passe doit contenir au moins 6 caractères.";
    }

    if ($password !== $password_confirm) {
        $errors['password_confirm'] = "Les mots de passe ne correspondent pas.";
    }

    // S'il n'y a pas d'erreurs, tenter d'enregistrer l'utilisateur
    if (empty($errors)) {
        $result = $registerUser(['name' => $name, 'email' => $email, 'password' => $password]);

        if ($result['success']) {
            $success = true;
        } else {
            $errors['register'] = $result['message'];
        }
    }
}

// Inclure la vue
require '../public/views/register.view.php';
