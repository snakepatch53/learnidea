<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/services/configuration', 'configuration');


// SLIDER IMG
$radapter->post('/services/slider_imgs/select', fn (...$args) => SliderImgService::select(...$args));
$radapter->post('/services/slider_imgs/insert', fn (...$args) => SliderImgService::insert(...$args));
$radapter->post('/services/slider_imgs/update', fn (...$args) => SliderImgService::update(...$args));
$radapter->post('/services/slider_imgs/delete', fn (...$args) => SliderImgService::delete(...$args));


// // INFO
// $radapter->post('/services/info/select', fn (...$args) => InfoService::select(...$args));
// $radapter->post('/services/info/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => InfoService::update(...$args));

// // USER
// $radapter->post('/services/user/login', fn (...$args) => UserService::login(...$args));
// $radapter->post('/services/user/logout', fn () => UserService::logout());
// // need to be logged
// $radapter->post('/services/user/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::select(...$args));
// $radapter->post('/services/user/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
// $radapter->post('/services/user/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
// $radapter->post('/services/user/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));
