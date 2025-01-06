<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class indexController extends Action{

    public function index($path){

       $this->render($path,"layout1");
    }
    
}