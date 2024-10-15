<!-- menu mebrem connecter  -->
<?php if (isset($_SESSION['user']['picture'])): ?>

    <div class="sub-menu">
        <img class="imgProfil" src="<?= $_SESSION['user']['picture'] ?>" alt="">
        <ul class="author">
            <li><a href="/membre">Mon compte</a></li>
            <li><a href="/logout">Déconnexion</a></li>
        </ul>
    </div>

<?php endif; ?>