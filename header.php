<div class="navigation-wrap start-header start-style">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand text-dark font-weight-bold big d-flex align-items-center" href="<?= eat($url); ?>">
              <img class="mr-2" src="<?= Asset::URL(__DIR__ . D . 'logo.png'); ?>" alt="logo">
              <span class="d-none d-md-inline-block">
                  <?= $site->title; ?>
              </span>
          </a>
          <div class="d-flex align-items-center">
            <?php if ($social = $state->y->affiliates->social ?? []): ?>
              <span class="ml-3 text-muted small">
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <?= self::nav(); ?>
          </div>
        </div>
      </nav>
    </div>