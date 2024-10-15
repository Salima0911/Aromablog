<?php

// namespace App\Controllers;

// use App\Config\Controller;

// class LoginController extends Controller
// {
//     public function login()
//     {
//         var_dump('Salut je suis la login');
//     }
// }



require '../models/User.php';

function generateCsrfToken()
{
    // Générer un token unique (32 caractères ici)
    return bin2hex(random_bytes(32));
}

$errors = [];
$success = false;

if (isset($_SESSION['user'])) {
    header('location: /membre');
}

if (isset($_POST['login'])) {
    extract($_POST);
    $idIsCorrect = $coupleEmailPasswordExist($email, $password);

    // Récupérer les données du formulaire avec un minimum de nettoyage
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation des champ
    if (empty($email)) {
        $errors['email'] = "L'email est requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse email n'est pas valide.";
    }

    if (empty($password)) {
        $errors['password'] = "Le mot de passe est requis.";
    }

    // Si aucune erreur, on tente la connexion
    if (empty($errors)) {
        if ($idIsCorrect['success']) {
            // Connexion réussie
            $_SESSION['user'] = $idIsCorrect['user'];
            $_SESSION['user']['csrf_token'] = generateCsrfToken();
            if (isset($_SESSION['required_auth'])) {
                // die(var_dump($_SESSION['required_auth']));
                header("location: $_SESSION[required_auth]");
            } else {
                // die('no');
                header('location: /membre');
            }
        } else {
            $errors['login'] = $idIsCorrect['message'];
        }
    }

    // if ($result) {
    //     $_SESSION['user'] = $getAllUserDatas($email, $password);
    //     if (isset($_SESSION['required_auth'])) {
    //         $uriRequiredAuth = $_SESSION['required_auth'];
    //         unset($_SESSION['required_auth']);
    //         header("location: $uriRequiredAuth");
    //     } else {
    //         header("location: /membre");
    //     }
    // }
}





require '../public/views/login.view.php';
