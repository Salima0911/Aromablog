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

if (isset($_SESSION['user'])) {
    header('location: /membre');
}

if (isset($_POST['login'])) {
    extract($_POST);
    $result = $coupleEmailPasswordExist($email, $password);
    var_dump($result);
    var_dump($_POST);
    if ($result) {
        $_SESSION['user'] = $getAllUserDatas($email, $password);
        if (isset($_SESSION['required_auth'])) {
            $uriRequiredAuth = $_SESSION['required_auth'];
            unset($_SESSION['required_auth']);
            header("location: $uriRequiredAuth");
        } else {
            header("location: /membre");
        }
    }

    // var_dump($result);
}





require '../public/views/login.view.php';
