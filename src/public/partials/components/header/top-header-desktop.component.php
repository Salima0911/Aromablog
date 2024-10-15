
<div id="top-header-desktop">
    <div id="top">
        <div class="left-header">
            <?php if ($uri === '/'): ?>
                <div id="search-bar">
                    <input type="text" placeholder="Recherchez un produit" />
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="content-search"></div>
                </div>
            <?php endif; ?>
            <img id="logo" src="assets/images/Logo.png" />
        </div>
        <div class="right-header">
            <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
        </div>
    </div>
</div>