<?php

require '../models/User.php';


// echo 'je suis le controller';

if (isset($_POST['recover'])) {
    var_dump($_POST);
}


require '../public/views/recover.view.php';
