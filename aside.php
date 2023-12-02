<div class="sidebar sticky-top">
  <?php if (is_file($f = __DIR__ . D . 'newsletter.html')): ?>
    <?php ob_start(); ?>
    <?php require $f; ?>
    <?php $content = ob_get_clean(); ?>
    <?php if ($content): ?>
      <?= self::widget([
          'content' => $content,
          'title' => i('Newsletter')
      ]); ?>
    <?php endif; ?>
  <?php endif; ?>
  <?php if (is_file($f = __DIR__ . D . 'ad.png')): ?>
    <?= self::widget([
        'content' => '<img alt="" src="' . eat(Asset::URL($f)) . '">',
        'title' => i('Advertisement')
    ]); ?>
  <?php endif; ?>
</div>