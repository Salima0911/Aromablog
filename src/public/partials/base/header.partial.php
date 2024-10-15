<?php
// die(var_dump($_SESSION));
?>

<header id="main-header">
    <div id="top-header">
        <img id="logo" src="assets/images/Logo.png" />
        <div id="search-bar">
            <input type="text" placeholder="Recherchez un produit" />
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="content-search"></div>
        </div>
        <ul id="main-menu">
            <?php if (isset($_SESSION['user'])): ?>
                <li class=" <?= $uri === '/membre'  ? 'active' : '' ?>">

                    <a href="/membre">Mon compte</a>
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
            <?php if (isset($_SESSION['user'])): ?>
                <div class="menu-toggle">
                    <!-- <li id="profil"><img src="<?php //$_SESSION['user']['picture'] 
                                                    ?>" alt=""></li> -->
                    <ul class="menu-toggle-profil">
                        <li><a href="">Mon compte</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </ul>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/top-header-desktop.partial.php') ?>
</header>