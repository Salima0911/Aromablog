<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/head.partial.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/header.partial.php';
$articles = $fourthLastArticles();
?>
<header id="main-header">
	<div id="top-header">
		<!-- <img id="logo" src="assets/images/Logo.png" /> -->
		<div class="splited">
			<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/sub-menu.component.php'); ?>
			<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/search-bar.component.php'); ?>
		</div>
		<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
	</div>
	<div id="top-header-desktop">
		<div id="top">
			<div class="left-header">
				<img id="logo" src="assets/images/Logo.png" />
				<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/search-bar.component.php'); ?>
			</div>
			<div class="right-header">
				<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
				<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/sub-menu.component.php'); ?>
			</div>
		</div>
		<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/nav-desktop.component.php'); ?>
	</div>
</header>

<main id="main-container">
	<h2>Les Derniers Articles</h2>
	<div class="cards-container">
		<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/components/card.component.php' ?>
	</div>
	<div id="categories" class="cards-categorie">
		<h2>Nos categories</h2>
		<div class="cards-container">
			<div class="cart">
				<div class="cart-image">
					<img src="./assets/images/chelsea-shapouri-r40EYKVyutI-unsplash 1.png" alt="Image 2" />
					<button class="btn-cat">Santé</button>
					<div class="mask-card"></div>
				</div>
			</div>
			<div class="cart">
				<div class="cart-image">
					<img src="./assets/images/content-pixie-TxBQ7yLj6JU-unsplash 1.png" height="100%" />
					<button class="btn-cat">Beauté</button>
					<div class="mask-card"></div>
				</div>
			</div>
			<div class="cart">
				<div class="cart-image">
					<img src="./assets/images/Recettes.png" alt="Image 2" />
					<button   class="btn-cat">Bien être</button>
					<div class="mask-card"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="engagement">
		<div class="engage">
			<h2 class="title-left">Nos Engagement</h2>
			<p class="text">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
				recusandae? Quae soluta fuga voluptatum est nihil cumque error, quia
				ab obcaecati, aperiam quisquam asperiores quod totam magni rem,
				facilis reiciendis.
			</p>
			<button class="btn-engag">Lire plus</button>
		</div>
		<img src="./assets/images/plantes.png" alt="" />
	</div>
</main>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/footer.partial.php'; ?>