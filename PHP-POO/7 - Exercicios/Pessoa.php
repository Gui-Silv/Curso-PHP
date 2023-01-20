<?php
 require_once "Livro.php";

 class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniversario(){
      $this->idade++;
    }

    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }

    function setNome($n){
        $this->nome = $n;
    }
    function setIdade($i){
        $this->idade = $i;
    }
    function setSexo($s){
        $this->sexo = $s;
    }
 }
?>