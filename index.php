<?php
require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/actions.php');

require('models/home.php');
require('models/actions.php');


$bootstrap = new bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}