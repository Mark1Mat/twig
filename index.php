<?php
/**
 * Created by PhpStorm.
 * User: Matisse
 * Date: 21/10/14
 * Time: 18:05
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache =>null,
]);

$article = [
    'name' => 'Le Twig',
    'content' => 'Page en Twig',
];



echo $twig->render('article.html.twig', [
    'article' => $article,
]);