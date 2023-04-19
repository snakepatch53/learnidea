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
$radapter->post('/services/email/sendConfirmEmailByCode', fn (...$args) => EmailService::sendCode(...$args));


// // INFO
// $radapter->post('/services/info/select', fn (...$args) => InfoService::select(...$args));
// $radapter->post('/services/info/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => InfoService::update(...$args));

// USER
$radapter->post('/services/users/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/services/users/logout', fn () => UserService::logout());
// need to be logged
$radapter->post('/services/users/select', fn (...$args) => UserService::select(...$args));
$radapter->post('/services/users/register', fn (...$args) => UserService::register(...$args));
// $radapter->post('/services/users/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::select(...$args));
// $radapter->post('/services/users/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
// $radapter->post('/services/users/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
// $radapter->post('/services/users/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));
