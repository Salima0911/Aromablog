<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/head.partial.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/header-without-search-bar.partial.php';
?>

<header id="main-header">
    <div id="top-header">
        <!-- <img id="logo" src="assets/images/Logo.png" /> -->
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/search-bar.component.php'); ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
    </div>
    <div id="top-header-desktop">
        <div id="top">
            <div class="left-header">
                <img id="logo" src="assets/images/Logo.png" />
            </div>
            <div class="right-header">
                <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/components/header/main-menu.component.php'); ?>
            </div>
        </div>
    </div>
</header>

<!-- <div class="editor">
    <div class="toolbar"> -->
<!-- <button class="bold" title="Gras"><i class="fas fa-bold"></i></button>
        <button class="italic" title="Italique">
            <i class="fas fa-italic"></i>
        </button> -->
<!-- <button class="underline" title="Souligné">
            <i class="fas fa-underline"></i>
        </button> -->

<!-- <input type="file" id="file-input" />
        <label for="file-input" class="file-button"><i class="fas fa-image"></i></label>
        <button id="emoji">Emoji</button>
    </div> -->

<!-- <div id="editor" contenteditable="true"></div> -->

<!-- <div class="emoji-container"> -->
<!-- Emojis pour les fleurs et les herbes -->
<!-- <button onclick="insertEmoji('🌸')">🌸</button>
        <button onclick="insertEmoji('🌺')">🌺</button>
        <button onclick="insertEmoji('🌻')">🌻</button>
        <button onclick="insertEmoji('🌹')">🌹</button>
        <button onclick="insertEmoji('🌷')">🌷</button>
        <button onclick="insertEmoji('🌿')">🌿</button>
        <button onclick="insertEmoji('☘️')">☘️</button>
        <button onclick="insertEmoji('🍃')">🍃</button>
        <button onclick="insertEmoji('🌾')">🌾</button>
        <button onclick="insertEmoji('🌳')">🌳</button>
        <button onclick="insertEmoji('🌲')">🌲</button>
        <button onclick="insertEmoji('🌵')">🌵</button>
        <button onclick="insertEmoji('🌱')">🌱</button>
        <button onclick="insertEmoji('🌎')">🌎</button>
        <button onclick="insertEmoji('🌈')">🌈</button>
        <button onclick="insertEmoji('☀️')">☀️</button>
        <button onclick="insertEmoji('🌙')">🌙</button>
        <button onclick="insertEmoji('✨')">✨</button>
        <button onclick="insertEmoji('🌟')">🌟</button> -->

<!-- Emojis pour les expressions humaines -->
<!-- <button onclick="insertEmoji('😊')">😊</button>
        <button onclick="insertEmoji('😄')">😄</button>
        <button onclick="insertEmoji('😆')">😆</button>
        <button onclick="insertEmoji('😎')">😎</button>
        <button onclick="insertEmoji('😍')">😍</button>
        <button onclick="insertEmoji('😘')">😘</button>
        <button onclick="insertEmoji('😗')">😗</button>
        <button onclick="insertEmoji('😙')">😙</button>
        <button onclick="insertEmoji('😚')">😚</button>
        <button onclick="insertEmoji('😛')">😛</button>
        <button onclick="insertEmoji('😜')">😜</button>
        <button onclick="insertEmoji('😝')">😝</button>
        <button onclick="insertEmoji('😞')">😞</button>
        <button onclick="insertEmoji('😟')">😟</button>
        <button onclick="insertEmoji('😠')">😠</button>
        <button onclick="insertEmoji('😡')">😡</button>
        <button onclick="insertEmoji('😢')">😢</button>
        <button onclick="insertEmoji('😭')">😭</button>
        <button onclick="insertEmoji('😳')">😳</button>
        <button onclick="insertEmoji('😴')">😴</button>
        <button onclick="insertEmoji('😵')">😵</button>
        <button onclick="insertEmoji('😶')">😶</button>
        <button onclick="insertEmoji('😷')">😷</button>
    </div> -->
<form method="POST">
    <textarea class="text-area" contenteditable="true" name="text"></textarea>
    <button class="reply" title="Répondre">Mise en ligne</button>
</form>


<!-- <script
			src="https://kit.fontawesome.com/your-fontawesome-kit-id.js"
			crossorigin="anonymous"
		></script> -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/base/footer.partial.php'; ?>