<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/view');
$twig = new Twig\Environment($loader);
$gems = [
     'ametist',
     'crystal',
     'agate',
     'jade',
     'opal'];

echo $twig->render('index.html.twig',['gems'=>$gems]);


