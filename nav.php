<ul class="align-items-center d-flex font-weight-bold ml-auto navbar-nav">
  <li class="<?= $site->is('home') ? 'active ' : ""; ?>nav-item">
    <a<?= $site->is('home') ? ' aria-current="page"' : ""; ?> class="nav-link px-3" href="<?= eat($url); ?>">
      <?= i('Home'); ?>
    </a>
  </li>
  <?php foreach ($links as $link): ?>
    <li class="<?= $link->current ? 'active ' : ""; ?>nav-item">
      <?php if ($link->link): ?>
        <a class="nav-link px-3" href="<?= eat($link->link); ?>" target="_blank">
          <?= $link->title; ?>
        </a>
      <?php else: ?>
        <?php $children = $link->children ?? false; ?>
        <a<?= $link->current ? ' aria-current="page"' : ""; ?> class="nav-link px-3" href="<?= eat($link->url . ($children && $children->count ? '/1' : "")); ?>">
          <?= $link->title; ?>
        </a>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  <!-- <li class="nav-item">
    <a class="btn btn-dark ml-2 nav-link px-3 px-3 text-white" href="https://bootstrapstarter.com/template-affiliates-bootstrap-jekyll">Get this theme</a>
  </li> -->
</ul>