<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
$radapter->getHTML('/index.php', 'home', function ($DATA) {
    // $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    // $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    // $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    // $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    // $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    // $basic_plan_price = (new PlanDao($DATA['mysqlAdapter']))->selectBasicPlan_price();
    // return [
    //     'info' => $info,
    //     'planes' => $planes,
    //     'links' => $links,
    //     'social' => $social,
    //     'slider' => $slider,
    //     'basic_plan_price' => $basic_plan_price
    // ];
});

$radapter->getHTML('/', 'home', function ($DATA) {
    // $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    // $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    // $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    // $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    // $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    // $basic_plan_price = (new PlanDao($DATA['mysqlAdapter']))->selectBasicPlan_price();
    // return [
    //     'info' => $info,
    //     'planes' => $planes,
    //     'links' => $links,
    //     'social' => $social,
    //     'slider' => $slider,
    //     'basic_plan_price' => $basic_plan_price
    // ];
});


$radapter->getHTML('/cursos', 'cursos');

$radapter->getHTML('/cursos/{curso_id}', 'curso', function ($DATA, $curso_id) {
    // search curso by ID or NAME
    return ['curso_id' => $curso_id];
});

$radapter->getHTML('/nosotros', 'nosotros');

$radapter->getHTML('/contactos', 'contactos');
