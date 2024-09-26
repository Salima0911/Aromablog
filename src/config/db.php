<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect('localhost', 'root', '', 'aromablog');
mysqli_set_charset($db, 'utf8mb4');
