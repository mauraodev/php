<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{

    protected function initRoutes()
    {
        $ar['xpto'] = ['route' => '/xpto', 'controller' => 'index', 'action' => 'index'];
        $ar['home'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $ar['artigoadd'] = ['route' => '/artigo/adicionar', 'controller' => 'index', 'action' => 'adicionar'];
        $this->setRoutes($ar);
    }

    public static function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=phptdd", "root", "root");
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
