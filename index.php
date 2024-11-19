<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

try {
    $loader = new FilesystemLoader('./templates');

    $twig = new Environment($loader, [
        'cache' => './cache',
        'debug' => true,
    ]);

    $template = $twig->load('index.html.twig');

    echo $template->render([
        'types' => include 'types.php',
    ]);
} catch (Exception $e) {
    die(sprintf('Exception message: %s (%s:%s)', $e->getMessage(), $e->getFile(), $e->getLine()));
}
