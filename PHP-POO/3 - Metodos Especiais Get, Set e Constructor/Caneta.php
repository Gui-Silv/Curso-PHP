<?php
 class Caneta{
    public $modelo;
    private $cor;
    private $ponta; 
    private $tampada;

    /* public function __construct(){
     $this->cor = "Azul";
     $this->tampar();
    }*/

    //ou

    public function Caneta($m, $c , $p){ //método constructor 
      $this->modelo = $m;
      $this->ponta = $p;
      $this->cor = $c;
      $this->tampar();
    }

    public function tampar(){
      $this->tampada = true;  
    }





    public function getModelo(){
        return $this->modelo; 
    }

    public function setModelo($m){
        $this->modelo = $m;
    }



    
    public function getCor(){
        return $this->cor; 
    }

    public function setCor($c){
        $this->cor = $c;
    } 



    
    public function getPonta(){
        return $this->ponta; 
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
 }
?>