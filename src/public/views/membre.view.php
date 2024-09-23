<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.partial.php';

?>
<img src="<?= $_SESSION['user'][0]['picture'] ?>" alt="" height="100">

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.partial.php'; ?>