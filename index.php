<?php
require __DIR__ .'/vendor/autoload.php';

use PSR\Controllers\HomeController;
use PSR\Repositories\HomeRepository;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;

print_r($homeCtrl->actionIndex());
$homeRps->hello();
?>