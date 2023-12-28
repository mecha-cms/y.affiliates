<div class="navigation-wrap start-header start-style">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="align-items-center big d-flex font-weight-bold navbar-brand text-dark" href="<?= eat($url); ?>">
        <img class="mr-2" src="<?= Asset::URL(__DIR__ . D . 'logo.png'); ?>" alt="logo">
        <span class="d-md-inline-block d-none">
          <?= $site->title; ?>
        </span>
      </a>
      <div class="align-items-center d-flex">
        <?php if ($social = $state->y->affiliates->social ?? []): ?>
          <span class="ml-3 small text-muted">
            <?= i('Follow'); ?>
          </span>
          <?php foreach ((array) $social as $k => $v): ?>
            <?php if (empty($v->active)) continue; ?>
            <a class="d-block social-icon" href="<?= eat($v->link ?? '#'); ?>" target="_blank">
              <svg class="bi bi-<?= eat($k); ?> d-block" fill="currentColor" height="19" viewBox="0 0 16 16" width="19">
                <path d="<?= eat($v->icon ?? ''); ?>"></path>
              </svg>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="<?= eat(i('Toggle navigation')); ?>" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
        <svg class="bi bi-three-dots-vertical" fill="currentColor" height="26" viewBox="0 0 16 16" width="26">
          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?= self::nav(); ?>
      </div>
    </div>
  </nav>
</div>