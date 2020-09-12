<?php

namespace application\core;

use application\lib\DataBase;

abstract class Model
{

    protected object $dataBase;

    public function __construct()
    {
        $this->dataBase = DataBase::getInstance();
        $config = require 'application/config/dataBase.php';
        $this->dataBase->connect($config);
    }

}