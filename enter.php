<!DOCTYPE html>
<html class>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <?php if ($w = w($page->description ?? $site->description ?? "")): ?>
      <meta content="<?= $w; ?>" name="description">
    <?php endif; ?>
    <?php if ('archive' === $page->x): ?>
      <!-- Prevent search engines from indexing pages with `archive` state -->
      <meta content="noindex" name="robots">
    <?php endif; ?>
    <meta content="<?= eat($page->author); ?>" name="author">
    <title>
      <?= w($t->reverse); ?>
    </title>
    <link href="<?= eat($url . '/favicon.ico'); ?>" rel="icon">
    <link href="<?= eat($url->current(false, false)); ?>" rel="canonical">
  </head>
  <body class="layout-<?= $site->is('page') ? ($site->has('parent') ? 'post' : 'page') : 'default'; ?>">
    <?= self::header(); ?>
    <main class="container">
      <?php if ($site->is('home')): ?>
        <div class="hero mb-5 rounded">
          <div class="align-items-center justify-content-between row">
            <div class="col-md-6">
              <?php if ($intro_title = $state->y->affiliates->intro->title ?? ""): ?>
                <h1 class="font-weight-bold mb-4 serif-font">
                  <?= i($intro_title); ?>
                </h1>
              <?php endif; ?>
              <?php if ($intro_description = $state->y->affiliates->intro->description ?? ""): ?>
                <p class="lead mb-4">
                  <?= i($intro_description); ?>
                </p>
              <?php endif; ?>
              <?php if ($intro_link = $state->y->affiliates->intro->link ?? ""): ?>
                <a class="btn btn-dark btn-lg px-5 text-white" href="<?= eat(long($intro_link)); ?>">
                  <?= i($state->y->affiliates->intro->{'link-title'} ?? 'More'); ?>
                </a>
              <?php endif; ?>
            </div>
            <div class="col-md-6 pl-0 pl-lg-4 text-right">
              <?php if ($intro_image = $state->y->affiliates->intro->image ?? ""): ?>
                <img class="intro" height="500" src="<?= eat(Asset::URL(PATH . $intro_image)); ?>">
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>