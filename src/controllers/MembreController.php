<?php
session_start();

if (empty($_SESSION['user']) && !isset($_SESSION['user'])) {
    header('location: /login');
}

require '../public/views/membre.view.php';
