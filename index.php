<?php
require_once 'vendor/autoload.php';
require_once 'src/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './cache',
//    'debug' => true,
));

$template = $twig->load('index.html.twig');

$types = include 'types.php';

echo $template->render(compact('types'));
