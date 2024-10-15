  <?php if ($_SESSION['user']['role'] === 'auteur'): ?>
      <li>
          <a href="/write">Ecrire</a>
      </li>
  <?php endif; ?>
  <li>
      <a href="/logout">Se Deconnecter</a>
  </li>
  <?php
    if ($uri !== '/membre'):
    ?>
      <li>
          <a href="/membre">Mon compte</a>
      </li>

  <?php endif;
