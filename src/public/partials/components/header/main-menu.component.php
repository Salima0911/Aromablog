<!-- header de member -->
<ul id="main-menu">
    <?php if (isset($_SESSION['user'])): ?>
        <li>
            <a href="#" class="<?= $uri === '/article'  ? 'active' : '' ?>">Mes articles</a>
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