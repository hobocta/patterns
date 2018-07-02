<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './cache',
//    'debug' => true,
));

try {
    $template = $twig->load('index.html.twig');
} catch (\Twig_Error $e) {
    die(sprintf('Exception message: %s (%s:%s)', $e->getMessage(), $e->getFile(), $e->getLine()));
}

$types = include 'types.php';

echo $template->render(compact('types'));
