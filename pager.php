<div class="row PageNavigation mt-4 prevnextlinks d-flex justify-content-between">
  <?php if ($prev = $pager->prev): ?>
    <div class="col-md-6 rightborder pl-0">
      <a class="thepostlink" href="<?= eat($prev->link ?? $prev->url); ?>">
        &laquo; <?= $prev->title; ?>
      </a>
    </div>
  <?php endif; ?>
  <?php if ($next = $pager->next): ?>
    <div class="col-md-6 text-right pr-0">
      <a class="thepostlink" href="<?= eat($next->link ?? $next->url); ?>">
        <?= $next->title; ?> &raquo;
      </a>
    </div>
  <?php endif; ?>
</div>