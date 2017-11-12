<?php


require_once "../Bootstrap/autoload.php";

try {
    require_once "../routes.php";

} catch (\Exception $e) {
    var_dump($e->getTraceAsString());
}



