<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/head.partial.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/header-without-search-bar.partial.php'; 
?>

<header id="main-header">
    <div id="top-header">
        <img id="logo" src="assets/images/Logo.png" />
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
    </div>
    <div id="top-header-desktop">
        <div id="top">
            <div class="left-header">
                <img id="logo" src="assets/images/Logo.png" />
            </div>
            <div class="right-header">
                <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
            </div>
        </div>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/image-profil.component.php'); ?>
</header>

<?php if (!empty($errors)): ?>
    <div class="errors">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php elseif ($updated): ?>
    <p class="success">Vos infos ont bien été actualisé</p>
<?php endif; ?>
<div class="wrapper">
    <form action="" id="form" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <!-- <input type="text" name="lastname" placeholder="Nom" /> -->
            <input type="hidden" name="id" value="<?= $_SESSION['user']['id']; ?>">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['user']['csrf_token']; ?>">
            <label for="name">Nom</label>
            <input type="text" name="name" value="<?= $_SESSION['user']['name']; ?>" />
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $_SESSION['user']['email']; ?>" />
        </div>
        <div class=" form-control">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" />
        </div>
        <div class="form-control">
            <label for="password">Photo de profil</label>
            <input type="file" name="picture" />
        </div>
        <div class="form-control">
            <button name="update">Modifier mes informations</button>
        </div>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/footer.partial.php'; ?>