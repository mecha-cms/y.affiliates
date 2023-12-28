<div class="row PageNavigation mt-4 prevnextlinks d-flex justify-content-between">
  <div class="col-md-6 rightborder pl-0">
    <?php if ($prev = $pager->prev): ?>
      <a class="thepostlink" href="<?= eat($prev->link ?? $prev->url); ?>">
        &laquo; <?= $prev->title; ?>
      </a>
    <?php endif; ?>
  </div>
  <div class="col-md-6 text-right pr-0">
    <?php if ($next = $pager->next): ?>
      <a class="thepostlink" href="<?= eat($next->link ?? $next->url); ?>">
        <?= $next->title; ?> &raquo;
      </a>
    <?php endif; ?>
  </div>
</div>