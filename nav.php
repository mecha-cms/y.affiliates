<ul class="navbar-nav ml-auto font-weight-bold d-flex align-items-center">
  <?php foreach ($links as $link): ?>
    <li class="nav-item">
      <?php if ($link->link): ?>
        <a class="nav-link px-3" href="<?= eat($link->link); ?>" target="_blank">
          <?= $link->title; ?>
        </a>
      <?php else: ?>
        <a class="nav-link px-3" href="<?= eat($link->url); ?>">
          <?= $link->title; ?>
        </a>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  <li class="nav-item">
    <a class="nav-link px-3 ml-2 btn btn-dark text-white px-3" href="https://bootstrapstarter.com/template-affiliates-bootstrap-jekyll/" alt="Get this theme">Get this theme</a>
  </li>
</ul>