<?= self::enter(); ?>
<?php if ($site->has('parent')): ?>
<div class="row">
  <div class="col-sm-8">
    <?php if ($page['image'] && $image = $page->image): ?>
      <img alt="<?= eat($page->title); ?>" class="featured-image img-fluid rounded" src="<?= eat($image); ?>">
    <?php endif; ?>
    <div class="mainheading">
      <?php if ($tags = $page->tags): ?>
        <div class="after-post-tags">
          <ul class="tags">
            <?php foreach ($tags as $tag): ?>
              <li>
                <a href="<?= eat($tag->link); ?>" rel="tag">
                  <?= $tag->title; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <h1 class="posttitle">
        <?= $page->title; ?>
      </h1>
    </div>
    <div class="article-post serif-font">
      <?= $page->content; ?>
      <div class="clearfix"></div>
    </div>
    <p>
      <small>
        <span class="post-date">
          <time class="post-date" datetime="<?= eat($page->time->format('c')); ?>">
            <?= $page->time('%d %b %Y'); ?>
          </time>
        </span>
      </small>
    </p>
    <?= self::pager(); ?>
    <?php if ($author = $page->author): ?>
      <?php if (is_object($author) && $author instanceof User): ?>
        <div class="row post-top-meta">
          <div class="col-md-2">
            <img alt="<?= eat((string) $author); ?>" class="author-thumb" src="<?= eat($author->avatar(80)); ?>">
          </div>
          <div class="col-md-10">
            <a class="link-dark" href="<?= eat($author->link ?? $author->url); ?>" target="_blank">
              <?= $author; ?>
            </a><?php if ($follow = $author->follow): ?><a class="btn follow" href="<?= eat($follow); ?>" target="_blank">
              <?= i('Follow'); ?>
            </a><?php endif; ?>
            <span class="author-description">
              <?= $author->description ?? To::description($author->content); ?>
            </span>
          </div>
        </div>
      <?php else: ?>
      <?php endif; ?>
    <?php endif; ?>
    <section>
      <?= self::comments(); ?>
    </section>
  </div>
  <div class="col-sm-4">
    <?= self::aside(); ?>
  </div>
</div>
<?php else: ?>
  <?php if ($page['image'] && $image = $page->image): ?>
    <div class="text-center mx-auto mb-5">
      <img alt="<?= eat($page->title); ?>" class="featured-image text-center mx-auto rounded" src="<?= eat($image); ?>">
    </div>
  <?php endif; ?>
  <div class="col-lg-8 mx-auto">
    <div class="mainheading">
      <h1 class="posttitle">
        <?= $page->title; ?>
      </h1>
    </div>
    <div class="article-post serif-font">
      <?= $page->content; ?>
    </div>
  </div>
<?php endif; ?>
<?= self::exit(); ?>