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


$radapter->getHTML('/login', 'login');
$radapter->getHTML('/register', 'register');
$radapter->getHTML('/confirmacion/{user_code}', 'confirmacion', function ($DATA, $user_code) {
    $userDao = new UserDao($DATA['mysqlAdapter']);
    $user = $userDao->selectByCode($user_code);
    if (!$user) {
        include('./src/templates/public.pages/404.php');
        return  ['autoinclude' => false];
    }
    $userDao->confirm($user['user_id']);
    return ['user' => $user];
});

$radapter->getHTML('/cursos', 'cursos');
$radapter->getHTML(
    '/test',
    'test',
    function ($DATA) {
        include('./src/templates/general.pages/emailConfirmCode.php');
        echo $html_content;
    },
    null,
    false
);

$radapter->getHTML('/cursos/{curso_id}', 'curso', function ($DATA, $curso_id) {
    // search curso by ID or NAME
    return ['curso_id' => $curso_id];
});

$radapter->getHTML('/nosotros', 'nosotros');

$radapter->getHTML('/contactos', 'contactos');

$radapter->set404('404');
