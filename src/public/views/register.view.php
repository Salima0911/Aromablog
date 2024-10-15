<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/head.partial.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/header-without-search-bar.partial.php';
?>

<header id="main-header">
    <div id="top-header">
        <!-- <img id="logo" src="assets/images/Logo.png" /> -->
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
<main id="register">
    <img src="../assets/image/4.jpg" alt="" />
    <h1>Inscription</h1>

    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($success): ?>
        <p>Votre inscription a été réussie !</p>
    <?php endif; ?>
    <div class="wrapper">
        <div class="link">
            <a href="#">Déjà inscrit ? Connectez-vous sur votre compte</a>
        </div>
        <p class="info-register">
            Pour une sécurité optimale de votre mot de passe, nous vous
            conseillons 8 caractères minimum composés d’au moins une minuscule,
            une majuscule, un chiffre (0-9) et une ponctuation.
        </p>
        <form action="" id="form" method="post">
            <div class="form-control">
                <!-- <input type="text" name="lastname" placeholder="Nom" /> -->
                <input type="text" name="name" placeholder="Prenom" />
            </div>
            <div class="form-control">
                <input type="email" name="email" placeholder="E-mail" />
            </div>
            <div class="form-control">
                <input type="password" name="password" placeholder="Mot de passe" />
                <input
                    type="password"
                    name="password_confirm"
                    placeholder="Répétez votre mot de passe" />
            </div>
            <!-- <input type="submit" name="register" value="S'inscrire"> -->
            <div class="form-control">
                <button name="register">S'inscrire</button>
            </div>
        </form>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/footer.partial.php'; ?>