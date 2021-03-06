<?php

$asynchronous = $app['controllers_factory'];

$asynchronous->get("/dashboardnews", '\Bolt\Controllers\Async::dashboardnews')
    ->before('\Bolt\Controllers\Async::before')
    ->bind('dashboardnews');

$asynchronous->get("/latestactivity", '\Bolt\Controllers\Async::latestactivity')
    ->before('\Bolt\Controllers\Async::before')
    ->bind('latestactivity');

$asynchronous->get("/filesautocomplete", '\Bolt\Controllers\Async::filesautocomplete')
    ->before('\Bolt\Controllers\Async::before');

$asynchronous->get("/readme/{extension}", '\Bolt\Controllers\Async::readme')
    ->before('\Bolt\Controllers\Async::before')
    ->bind('readme');

$asynchronous->post("/markdownify", '\Bolt\Controllers\Async::markdownify')
    ->before('\Bolt\Controllers\Async::before')
    ->bind('markdownify');

$asynchronous->get("/makeuri", '\Bolt\Controllers\Async::makeuri')
    ->before('\Bolt\Controllers\Async::before');

$app->mount('/async', $asynchronous);
