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
session_start();

if (isset($_SESSION['user'])) {
    header('location: /membre');
}

if (isset($_POST['login'])) {
    extract($_POST);
    $result = $coupleEmailPasswordExist($email, $password);
    if ($result) {
        session_start();
        $_SESSION['user'] = $getAllUserDatas($email, $password);
        header("location: /membre");
    }

    // var_dump($result);
}


require '../public/views/login.view.php';
