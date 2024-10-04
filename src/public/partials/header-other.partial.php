<header id="main-header">
    <div id="top-header">
        <img id="logo" src="assets/images/Logo.png" />
        <!-- <div id="search-bar">
            <input type="text" placeholder="Recherchez un produit" />
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="content-search"></div>
        </div> -->
        <ul id="main-menu">
            <li>
                <a href="">S'inscrire</a>
            </li>
            <li>
                <a href="">Se connecter</a>
            </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><img src="<?= $_SESSION['user'][0]['picture'] ?>" alt=""></li>
            <?php endif; ?>
        </ul>
    </div>
    <div id="top-header-desktop">
        <div id="top">
            <div class="left-header">
                <!-- <div id="search-bar">
                    <input type="text" placeholder="Recherchez un produit" />
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="content-search"></div>
                </div> -->
                <img id="logo" src="assets/images/Logo.png" />
            </div>
            <div class="right-header">
                <ul id="main-menu">
                    <li>
                        <a href="/register">S'inscrire</a>
                    </li>
                    <li>
                        <a href="/login">Se connecter</a>
                    </li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li><img class="imgProfil" src="<?= $_SESSION['user'][0]['picture'] ?>" alt=""></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <nav class="menu-desktop">
            <li>
                <a href="#categories">Catégories</a>
            </li>
            <li>
                <a href="#">Nos Recettes</a>
            </li>
            <li>
                <a href="#">Aromathérapie</a>
            </li>
        </nav>
    </div>
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
            <a href="#">Nos produits</a>
        </li>
    </nav>
</header>