<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>
    <?= eat($t->reverse); ?>
</title>
</head>

<body class="layout-<?= $site->is('page') ? ($site->has('parent') ? 'post' : 'page') : 'default'; ?>">
  <?= self::header(); ?>
  <main class="container">
    <?php if ($site->is('home')): ?>
      <div class="rounded mb-5 hero">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <h1 class="font-weight-bold mb-4 serif-font">Let me teach you how to become successful online</h1>
            <p class="lead mb-4">My name is Lyam and I'm here to share with you my knowledge and experience of over 10 years of monetizing my blog.</p>
            <a href="/affiliates-jekyll-theme/about" class="btn btn-dark text-white px-5 btn-lg">About me</a>
          </div>
          <div class="col-md-6 text-right pl-0 pl-lg-4">
            <img class="intro" height="500" src="<?= eat(Asset::URL(__DIR__ . D . 'intro.svg')); ?>">
          </div>
        </div>
      </div>
    <?php endif; ?>