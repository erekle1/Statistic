<?php


use Illuminate\Database\Capsule\Manager;

class Database extends Manager
{
    protected $config;

    function __construct($container = null)
    {
        $this->config = include "Config/database.php";

        parent::__construct($container);
    }


    public function addConnection(array $config, $name = 'default')
    {
        parent::addConnection($config, $name);
    }

    private function getDefaultConfigs()
    {
        $default = $this->config['default'];

        return $this->config['connections'][$default];
    }





}