<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.partial.php';
?>


<main id="connect">
    <img src="./image/image (6).png" alt="" />

    <div class="wrapper">
        <h1>Se connecter</h1>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <button name="login">Se connecter</button>
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