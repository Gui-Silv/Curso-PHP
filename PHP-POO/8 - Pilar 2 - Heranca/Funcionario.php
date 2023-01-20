<?php
require_once "Pessoa.php";

 class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    
    function __constructor($se){
        $this->setor = $se;
        $this->trabalhando = false;
    }
   
    public function mudarTrabalho(){
     $this->trabalhando = ! $this->trabalhando;
    }
    public function  trabalhar(){
        $this->trabalhando = true;
    }


    function getSetor(){
        return $this->setor;
    }
    function getTrabalhando(){
        return $this->trabalhando;
    }

    function setSetor($s){
        $this->setor = $s;
    }
    function setTrabalhando($t){
        $this->trabalhando = $t;
    }
 }
?>