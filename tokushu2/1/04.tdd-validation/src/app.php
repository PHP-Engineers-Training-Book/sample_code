<?php
$app = new Silex\Application();

$app->register(new Silex\Provider\ValidatorServiceProvider());

$app->get('/hello', function() use($app) {
    return 'Hello World';
});

return $app;

