<?= self::enter(); ?>
<section class="row">
  <div class="col-sm-8">
    <div class="row">
      <?php foreach ($pages as $page): ?>
      <div class="col-md-6 mb-5">
      <div class="card">
          <a href="<?= eat($page->link ?? $page->url); ?>">
              <?php if ($image = $page->image): ?>
              <img alt="<?= eat($page->title); ?>" class="rounded mb-4" src="<?= eat($image); ?>">
              <?php endif; ?>
        </a>
    <div class="card-block">
        <h2 class="card-title h4 serif-font"><a href="<?= eat($page->link ?? $page->url); ?>"><?= $page->title; ?></a></h2>
        <p class="card-text text-muted"><?= $page->description; ?></p>
        <div class="metafooter">
            <div class="wrapfooter small d-flex align-items-center">
                <span class="author-meta">
                    By  <span class="post-name"><?= $page->author; ?>, </span>
                    on <span class="post-date"><?= $page->time('%d %b %Y'); ?></span>
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