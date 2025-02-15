<?php

Asset::set(__DIR__ . D . 'bootstrap.min.css', 10.1);

Asset::set(__DIR__ . D . 'jquery.min.js', 10.1);
Asset::set(__DIR__ . D . 'popper.min.js', 10.2);
Asset::set(__DIR__ . D . 'bootstrap.min.js', 10.3);

$z = defined('TEST') && TEST ? '.' : '.min.';
Asset::set(__DIR__ . D . 'index' . $z . 'css', 20);
Asset::set(__DIR__ . D . 'index' . $z . 'js', 20);

lot('links', $links = new Anemone((static function ($links, $state, $url) {
    $index = LOT . D . 'page' . D . trim(strtr($state->route ?? 'index', '/', D), D) . '.page';
    $route = $url->path . '/';
    foreach (g(LOT . D . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add current state
        $v->current = 0 === strpos($route, $v->route . '/');
        $links[$k] = $v;
    }
    ksort($links);
    return $links;
})([], $state, $url)));

$states = [
    'route-blog' => '/article',
    'x.comment.page.type' => isset($state->x->comment) ? 'Markdown' : null,
    'x.page.page.type' => isset($state->x->page) ? 'Markdown' : null
];

foreach ($states as $k => $v) {
    !State::get($k) && null !== $v && State::set($k, $v);
}

if (isset($state->x->alert)) {
    Hook::set('y.alert', function ($y) {
        $y[0] = 'div';
        foreach ($y[1] as &$v) {
            $v[2]['class'] = 'alert alert-' . (['error' => 'danger'][$v['type'] ?? $v[2]['type']] ?? 'info');
        }
        $y[2]['class'] = 'mb-3';
        return $y;
    });
}

if (isset($state->x->comment)) {
    Hook::set('y.form.comment', function ($y) {
        foreach ([
            'author' => 'input',
            'content' => 'textarea',
            'email' => 'input',
            'link' => 'input'
        ] as $k => $v) {
            if ($v === ($y[1][$k][1][2][1][0][0] ?? P)) {
                $y[1][$k][1][2][1][0][2]['class'] = 'form-control';
            }
            if ('label' === ($y[1][$k][1][0][0] ?? P)) {
                $y[1][$k][1][0][2]['class'] = 'col-form-label';
            }
            if ('small' === ($y[1][$k][1][2][1][2][0] ?? P)) {
                $y[1][$k][1][2][1][2][2]['class'] = 'text-muted';
            }
        }
        if ('button' === ($y[1]['tasks'][1][2][1]['publish'][0] ?? P)) {
            $y[1]['tasks'][1][2][1]['publish'][2]['class'] = 'btn btn-primary';
        }
        if ('a' === ($y[1]['tasks'][1][2][1]['cancel'][0] ?? P)) {
            if (!empty($y[1]['tasks'][1][2][1]['cancel'][2]['class'])) {
                $y[1]['tasks'][1][2][1]['cancel'][2]['class'] = 'btn btn-danger ' . ($y[1]['tasks'][1][2][1]['cancel'][2]['class']);
            }
        }
        return $y;
    });
}

if (isset($state->x->pass)) {
    Hook::set('y.form.pass', function ($y) {
        foreach ([
            'pass' => 'input',
        ] as $k => $v) {
            if ($v === ($y[1][$k][1][2][1][0][0] ?? P)) {
                $y[1][$k][1][2][1][0][2]['class'] = 'form-control';
            }
            if ('label' === ($y[1][$k][1][0][0] ?? P)) {
                $y[1][$k][1][0][2]['class'] = 'col-form-label';
            }
            if ('small' === ($y[1][$k][1][2][1][2][0] ?? P)) {
                $y[1][$k][1][2][1][2][2]['class'] = 'text-muted';
            }
        }
        if ('button' === ($y[1]['tasks'][1][2][1]['enter'][0] ?? P)) {
            $y[1]['tasks'][1][2][1]['enter'][2]['class'] = 'btn btn-primary';
        }
        return $y;
    });
}

if (isset($state->x->user)) {
    Hook::set('y.form.user', function ($y) {
        foreach ([
            'pass' => 'input',
            'user' => 'input'
        ] as $k => $v) {
            if ($v === ($y[1][$k][1][2][1][0][0] ?? P)) {
                $y[1][$k][1][2][1][0][2]['class'] = 'form-control';
            }
            if ('label' === ($y[1][$k][1][0][0] ?? P)) {
                $y[1][$k][1][0][2]['class'] = 'col-form-label';
            }
            if ('small' === ($y[1][$k][1][2][1][2][0] ?? P)) {
                $y[1][$k][1][2][1][2][2]['class'] = 'text-muted';
            }
        }
        if ('button' === ($y[1]['tasks'][1][2][1]['enter'][0] ?? P)) {
            $y[1]['tasks'][1][2][1]['enter'][2]['class'] = 'btn btn-primary';
        }
        return $y;
    });
}