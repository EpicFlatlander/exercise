<?php

include_once 'PlayersController.php';

$array = Array(
    array('name'=>'Jonas Valenciunas','age'=>26,'job'=>'Center','salary'=>'4.66m'),
    array('name'=>'Kyle Lowry','age'=>32,'job'=>'Point Guard','salary'=>'28.7m'),
    array('name'=>'Demar DeRozan','age'=>28,'job'=>'Shooting Guard','salary'=>'26.54m'),
    array('name'=>'Jakob Poeltl','age'=>22,'job'=>'Center','salary'=>'2.704m')
);

$model = new Players();
$view = new PlayersHTMLView();

$controller = new PlayersController($model, $view);

$controller->readArray($array);
$controller->updateView();

/*
$val = $controller->writeArray();
var_dump($val);
*/

?>