<?php

namespace Erekle\Statistic\Controllers;


class AuthController
{

    private $inst = null;

    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new AuthController();
        }
        return $inst;
    }

    public function register($service,$request)
    {
        var_dump($request->email);
        $service->validate('dswww')->isLen(4, 16);

        return "";
    }
}