<?php

namespace App\Controllers;

use Core\Controller\Action;
class Index extends Action
{

    public function index()
    {
        $nomes = array('Lucas','José','Teresinha');
        $this->view->nomes = $nomes;
        $this->render('index');
    }
    public function empresa()
    {
        $this->render('empresa');
    }
}