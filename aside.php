<div class="sidebar sticky-top">
  <?php if (is_file($form = __DIR__ . D . 'newsletter.html')): ?>
    <div class="sidebar-section">
      <h5>
        <span>
          <?= i('Newsletter'); ?>
        </span>
      </h5>
      <?php require $form; ?>
    </div>
  <?php endif; ?>
  <div class="sidebar-section">
    <h5>
      <span>
        <?= i('Advertisement'); ?>
      </span>
    </h5>
    <img alt="" src="<?= eat(Asset::URL(__DIR__ . D . 'ad.png')); ?>">
  </div>
</div>