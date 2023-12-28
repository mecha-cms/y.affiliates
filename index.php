<?php

Asset::set(__DIR__ . D . 'bootstrap.min.css', 10.1);

Asset::set(__DIR__ . D . 'jquery.min.js', 10.1);
Asset::set(__DIR__ . D . 'popper.min.js', 10.2);
Asset::set(__DIR__ . D . 'bootstrap.min.js', 10.3);

$z = defined('TEST') && TEST ? '.' : '.min.';
Asset::set(__DIR__ . D . 'index' . $z . 'css', 20);
Asset::set(__DIR__ . D . 'index' . $z . 'js', 20);

$GLOBALS['links'] = new Anemone((static function ($links, $state, $url) {
    $index = LOT . D . 'page' . D . trim(strtr($state->route, '/', D), D) . '.page';
    $path = $url->path . '/';
    foreach (g(LOT . D . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add current state
        $v->current = 0 === strpos($path, '/' . $v->name . '/');
        $links[$k] = $v;
    }
    ksort($links);
    return $links;
})([], $state, $url));

$states = [
    'route-blog' => '/article',
    'x.comment.page.type' => isset($state->x->comment) ? 'Markdown' : null,
    'x.page.page.type' => isset($state->x->page) ? 'Markdown' : null
];

foreach ($states as $k => $v) {
    !State::get($k) && null !== $v && State::set($k, $v);
}