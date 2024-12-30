<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
class indexController extends Action{

    public function index($path){

       //$this->view->dados=array("Raquel","Dias","Gomes");

       // Instancia de conexão
        $conn=Connection::getDb();

       // Instanciar Modelo
       $produto=new Produto($conn);

       $arrayProdutos=$produto->getProdutos();

       $this->view->dados=$arrayProdutos;

       $this->render($path,"layout1");
    }

    public function sobre_nos($path){
        //$this->view->dados=array("Amor","da Minha","Vida");
        $this->render($path,"layout2");
    }
    
    public function conteudo($path){
        //$this->view->dados=["Gostosa","Fofa","Humilde","Inteligente","Dedicada"];
        $this->render($path,"layout1");
    }
    
}