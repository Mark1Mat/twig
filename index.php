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


//PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
} catch(PDOException $e) {
    mail('matissevlp@gmail.com' , 'BDD Error' , $e->getMessage());
    throw new PDOException('BDD Error');
}

$sql = 'SELECT * FROM article';
$pdoStmt = $pdo->query($sql);
$articles = $pdoStmt->fetchAll(PDO::FETCH_OBJ);



echo $twig->render('article.html.twig', [
    'articles' => $articles,
    'kenny' => ['dead' => true],

]);