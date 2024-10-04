<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header-other.partial.php';
?>
<main id="register">
    <img src="../assets/image/4.jpg" alt="" />
    <h1>Inscription</h1>
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
                <input type="text" name="name" placeholder="Nom" />
                <input type="text" name="firstname" placeholder="Prenom" />
            </div>
            <div class="form-control">
                <input type="email" name="email" placeholder="E-mail" />
            </div>
            <div class="form-control">
                <input type="password" name="password" placeholder="Mot de passe" />
                <input
                    type="password"
                    name="repeatpassword"
                    placeholder="Répétez votre mot de passe" />
            </div>
            <!-- <input type="submit" name="register" value="S'inscrire"> -->
            <div class="form-control">
                <button name="register">S'inscrire</button>
            </div>
        </form>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.partial.php'; ?>