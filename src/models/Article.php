<?php

require '../config/db.php';

$query = mysqli_query($db, 'SELECT * FROM article LIMIT 4');
$articles = mysqli_fetch_all($query, MYSQLI_ASSOC);

// var_dump($recettes);
