<?php
/**
 * Created by PhpStorm.
 * User: Matisse
 * Date: 21/10/14
 * Time: 18:05
 */

require __DIR__.'/vendor/autoload.php';

$string ="zeivzuov\"zoubzougozhgzeogaeogoaz";

$slugify = new \Cocur\Slugify\Slugify();

echo $slugify->slugify($string, '_');