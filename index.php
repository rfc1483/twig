<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
            'cache' => 'compilation_cache',
            'auto_reload' => TRUE
        ));

$template = $twig->loadTemplate('layout.html.twig');

$pageTitle = 'This is the index page';

$template->display(array('pageTitle' => $pageTitle));
