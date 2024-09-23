<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.partial.php';

?>

<main>
    <section class="hero">
        <div class="container">
            <h2>Récupération mot de passe</h2>
            <p>Pour récuperer votre mot de passe, veuillez saisir votre adresse électronique. Vous recevrez un mail si vous avez un compte.</p>
            <form action="#">
                <input type="email" placeholder="E-mail" required>
                <button type="submit" class="btn">Valider</button>
            </form>
            <p>Vous n'avez pas de compte ? <a href='/register'>Inscrivez-vous.</a></p>
        </div>
    </section>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.partial.php'; ?>