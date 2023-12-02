<footer class="footer container text-center">
  <!-- If you want to support my work, please donate to remove the credits. This helps me keep it up and running: https://www.wowthemes.net/donate -->
  <div class="credits mx-auto text-center mb-3">
    <a class="hover-opacity font-weight-bold" href="https://bootstrapstarter.com/template-affiliates-bootstrap-jekyll/">
      <img src="<?= eat(Asset::URL(__DIR__ . D . 'credits.png')); ?>" alt="powered by WowThemes">
    </a>
  </div>
  <ul class="p-0 mb-1 small">
    <?php foreach ($links as $link): ?>
      <li>
        <?php if ($link->link): ?>
          <a<?= $link->current ? ' aria-current="page"' : ""; ?> href="<?= eat($link->link); ?>">
            <?= $link->title; ?>
          </a>
        <?php else: ?>
          <a href="<?= eat($link->url); ?>">
            <?= $link->title; ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
    </ul>
    <div class="copyright small">
      Copyright &copy; <?= $site->title; ?>. All rights reserved.
    </div>
</footer>