<?php
require_once "Pessoa.php";

 class Professor extends Pessoa {
    private $especialidade;
    private $salario;


    public function receberAum($valor){
        $this->salario += $valor;
    }


    function getEspecialidade(){
        return $this->especialidade;
    }
    function getSalario(){
        return $this->salario;
    }


    function setEspecialidade($e){
        $this->especialidade = $e;
    }
    function setSalario($s){
        $this->salario = $s;
    }
 }
?>