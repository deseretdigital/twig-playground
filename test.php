<?php
/**
 * Created by PhpStorm.
 * User: jcarmony
 * Date: 6/12/14
 * Time: 1:22 PM
 */

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    /* 'cache' => '/tmp/twig' */
));


$template = $twig->loadTemplate('index.twig');
/* @var $template Twig_Template */


$run = true;
echo "<pre>";

while($template != false)
{
    echo $template->getTemplateName()."\n\n";
    var_dump($template->getBlockNames());
    $template = $template->getParent([]);
    echo "\n\n";
}
echo "</pre>";
