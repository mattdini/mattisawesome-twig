<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './cache',
    'debug' => true
));

echo $twig->render('project.html', array('name' => 'Matt'));


?>
