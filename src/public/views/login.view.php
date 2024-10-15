<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/head.partial.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/header-without-search-bar.partial.php';
?>
<header id="main-header" class="background-nav">
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
    <?php //require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/top-header-desktop.component.php'); 
    ?>
</header>
<?php if (!empty($errors)): ?>
    <div class="errors">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php elseif ($success): ?>
    <p>Connexion réussie !</p>
<?php endif; ?>

<main id="connect">
    <?php if (isset($_SESSION['message']['info'])): ?>
        <p class='message info'><?= $_SESSION['message']['info'] ?></p>
        <?php unset($_SESSION['message']['info']); ?>
    <?php endif; ?>
    <img src="./image/image (6).png" alt="" />

    <h1>Se connecter</h1>
    <div class="wrapper">
        <form id="connexion" action="#" method="post">
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <input name="login" type="submit" value="Se connecter" />
            <label class="container-checkbox">Se souvenir de moi
                <input type="checkbox" />
                <span class="check"></span>
            </label>
            <div class="link">
                <a href="/recover">Mot de passe oublié</a><br />
                <a href="#">Vous n'avez pas de compte ? Inscrivez vous !</a>
            </div>
        </form>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/footer.partial.php'; ?>