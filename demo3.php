<?php

include_once 'PlayersController.php';

$model = new Players();
$view = new PlayersHTMLView();

$controller = new PlayersController($model, $view);

$controller->readFile('playerdata.json');
$controller->updateView();

/*
$val = $controller->writeFile('playerdatawrite.json');
var_dump($val);
*/

?>