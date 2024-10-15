 <?php if (isset($_SESSION['user'])): ?>
     <img class="imgProfil" src="<?= $_SESSION['user']['picture'] ?>" alt="">
 <?php endif; ?>