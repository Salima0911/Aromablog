<?php

require '../models/Register.php';


// echo 'je suis le controller';

if (isset($_POST['register'])) {
    var_dump($_POST);
}


require '../public/views/register.view.php';
