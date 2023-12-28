<footer class="container footer text-center">
  <!-- If you want to support my work, please donate to remove the credits. This helps me keep it up and running: https://www.wowthemes.net/donate -->
  <div class="credits mb-3 mx-auto text-center">
    <a class="font-weight-bold hover-opacity" href="https://bootstrapstarter.com/template-affiliates-bootstrap-jekyll/">
      <img src="<?= eat(Asset::URL(__DIR__ . D . 'credits.png')); ?>" alt="powered by WowThemes">
    </a>
  </div>
  <ul class="mb-1 p-0 small">
    <?php foreach ($links as $link): ?>
      <li>
        <?php if ($link->link): ?>
          <a<?= $link->current ? ' aria-current="page"' : ""; ?> href="<?= eat($link->link); ?>">
            <?= $link->title; ?>
          </a>
        <?php else: ?>
          <a class="hover-opacity" href="<?= eat($link->url); ?>">
            <?= $link->title; ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="copyright small">
    <?= i('Copyright'); ?> &#x00a9; <a class="d-inline-block hover-opacity" href="<?= eat($url); ?>">
      <?= $site->title; ?>
    </a>. <?= i('Powered by %s', '<a class="d-inline-block hover-opacity" href="' . eat($url) . '">Mecha ' . VERSION . '</a>'); ?>.
  </div>
</footer>