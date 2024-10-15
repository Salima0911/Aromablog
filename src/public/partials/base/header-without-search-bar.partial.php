<header id="main-header">
    <div id="top-header">
        <img id="logo" src="assets/images/Logo.png" />
        <ul id="main-menu">
            <?php if (isset($_SESSION['user'])): ?>
                <li>
                    <a href="/membre" class="<?= $uri === '/membre'  ? 'active' : '' ?>">Mon compte</a>
                </li>
                <li>
                    <a href="/logout">Se Deconnecter</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="/register" class="<?= $uri === '/register'  ? 'active' : '' ?>">S'inscrire</a>
                </li>
                <li>
                    <a href="/login" class="<?= $uri === '/login'  ? 'active' : '' ?>">Se connecter</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/top-header-desktop.component.php') ?>
    <span id="burger"></span>
    <nav class="menu-burger displayed hide">
        <span class="cross"></span>
        <li>
            <a href="#">Bien-être</a>
        </li>
        <li>
            <a href="#">Santé</a>
        </li>
        <li>
            <a href="#">Recettes</a>
        </li>
        <li>
            <a href='/aromatherapy'>Aromatherapy</a>
        </li>
        <li>
            <a href="#">Nos produits</a>
        </li>
    </nav>
    <?php if (isset($_SESSION['user'])): ?>
        <img class="imgProfil" src="<?= $_SESSION['user']['picture'] ?>" alt="">
    <?php endif; ?>
</header>