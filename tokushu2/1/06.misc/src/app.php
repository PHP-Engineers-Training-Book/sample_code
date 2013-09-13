<?php
$app = new Silex\Application();

$app->register(new Silex\Provider\ValidatorServiceProvider());

$app['peopleDAO'] = function() use($app) {
    $dao = new PeopleDAO();
    // まだ db はないのでコメントアウト
    // $dao->setDb($app['db']);
    return $dao;
};

$app['peopleListingService'] = function() use($app) {
    $service = new PeopleListingService();
    $service->setDao($app['peopleDAO']);
    return $service;
};

$app->get('/hello', function() use($app) {
    // 取得例 (取得結果は未使用)
    $result = $app['peopleListingService']->getGenerationGroupedList();

    return 'Hello World';
});

return $app;

