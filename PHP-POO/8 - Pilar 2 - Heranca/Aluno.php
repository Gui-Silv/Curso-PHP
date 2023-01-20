<?php
require_once "Pessoa.php";

 class Aluno extends Pessoa {
    private $matr;
    private $curso;


    public function cancelarMatr(){
        $this->matr = false;
        echo "<p>Matrícula cancelada</p>";
    }

    function getMatr(){
        return $this->matr;
    }
    function getCurso(){
        return $this->curso;
    }

    function setMatr($m){
        $this->matr = $m;
    }
    function setCurso($c){
        $this->curso = $c;
    }
 }
?>