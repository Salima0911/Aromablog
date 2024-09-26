<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.partial.php';
?>


<main id="connect">
    <?php if (isset($_SESSION['message']['info'])): ?>
        <p class='message info'><?= $_SESSION['message']['info'] ?></p>
        <?php unset($_SESSION['message']['info']); ?>
    <?php endif; ?>
    <img src="./image/image (6).png" alt="" />

    <div class="wrapper">
        <h1>Se connecter</h1>
        <form action="#" method="post">
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

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.partial.php'; ?>