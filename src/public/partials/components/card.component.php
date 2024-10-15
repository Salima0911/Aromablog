<?php
$images = [
    "./assets/images/lavand.png",
    "./assets/images/orange.png",
    "./assets/images/argan (2).png",
    "./assets/images/citron (2).png",
    "l’huile de jojoba (2).png",
    "./assets/images/recin (3).png",
    "./assets/images/cammomille.png",
    "./assets/images/AMANDE.png",
    "./assets/images/eucalyptus (2).png",
    "./assets/images/geranim A.png",
    "./assets/images/GINEMBRE.png",
    "./assets/images//menth-poivree (3).png",
    "./assets/images/romarin (2).png",
];
?>

<?php foreach ($articles as $key => $article): ?>
    <div class="card">
        <img src="<?= $images[$key] ?>" alt="Image 1" />
        <div class="card-content">
            <div class="card-header">
                <h3><?= $article['title'] ?></h3>
                <div class="btn-fav"></div>
            </div>
            <p>
                <?= substr($article['content'], 0, 100) . '...'; ?>
            </p>
            <a class="btn-read-more" href="/article?id=<?= $article['id'] ?>">Lire plus</a>
            <div class="card-tags">
                <button class="btn-tag">Santé</button>
                <button class="btn-tag">Bien-être</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>