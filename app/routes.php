<?php

namespace Erekle\Statistic;


use Erekle\Statistic\Controllers\AuthController;
use Klein\Klein;

$klein = new Klein();
$authController = AuthController::Instance();


$klein->respond('POST', '/register', function ($request, $response, $service) use ($authController) {
    return $authController->register($service,$request);
});

$klein->dispatch();