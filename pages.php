<?= self::enter(); ?>
<section class="row">
  <div class="col-sm-8">
    <div class="row">
      <?php foreach ($pages as $page): ?>
        <div class="col-md-6 mb-5">
          <div class="card">
            <a class="d-block mb-4" href="<?= eat($page->link ?? $page->url); ?>" style="height: 0; overflow: hidden; padding-top: 56.25%; position: relative;">
              <?php if ($image = $page->image): ?>
                <img alt="<?= eat($page->title); ?>" class="d-block rounded" src="<?= eat($image); ?>" style="min-height: 100%; position: absolute; top: 0; right: 0;">
              <?php else: ?>
                <span class="bg-secondary d-block rounded text-white" role="img" style="bottom: 0; left: 0; position: absolute; right: 0; top: 0;">
                  <svg class="bi bi-card-image" fill="currentColor" height="26" style="height: 80px; position: absolute; top: 50%; left: 50%; margin-left: -40px; margin-top: -40px; width: 80px;" viewBox="0 0 16 16" width="26">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0z"></path>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71l-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                  </svg>
                </span>
              <?php endif; ?>
            </a>
            <div class="card-block">
              <h2 class="card-title h4 serif-font">
                <a href="<?= eat($page->link ?? $page->url); ?>">
                  <?= $page->title; ?>
                </a>
              </h2>
              <p class="card-text text-muted">
                <?= To::description($page->description, 80); ?>
              </p>
              <div class="metafooter">
                <div class="wrapfooter small d-flex align-items-center">
                  <span class="author-meta">
                    <?= i('By'); ?> <span class="post-name"><?= $page->author; ?>, </span>
                    <?= i('on'); ?> <span class="post-date"><?= $page->time('%d %b %Y'); ?></span>
                  </span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="bottompagination">
      <span class="navigation" role="navigation">
        <?= self::pager(); ?>
      </span>
    </div>
  </div>
  <div class="col-sm-4">
    <?= self::aside(); ?>
  </div>
</section>
<?= self::exit(); ?>