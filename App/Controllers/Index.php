<?php

namespace App\Controllers;

class Index
{
    private $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }
    public function index()
    {
        $nomes = array('Lucas','José','Teresinha');
        $this->view->nomes = $nomes;

       include '../App/Views/index/index.phtml';
    }
    public function empresa()
    {
        include '../App/views/index/empresa.phtml';
    }
}