<?php
$app = new Silex\Application();

$app->get('/hello', function() use($app) {
    return 'Hello World';
});

return $app;

