<?php 

namespace App;

use Core\Bootstrap;

class Route extends Bootstrap
{
  protected function initRoutes()
  {
    $arrayRoutes['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
    $arrayRoutes['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
    $this->setRoutes($arrayRoutes);
  }

  public function getDb()
  {
    $connection = new \PDO("mysql:host=localhost;dbname=mvc","root","123");
    return $connection;
  }
}