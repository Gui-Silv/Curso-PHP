<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
    private $matr;
    private $curso;


    
    public function pagarMensalidade(){
        echo "<p>Pagando Mensalidade do aluno $this->nome </p>";
    }

    public function cancelarMatr(){
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

 
 class Bolsista extends Aluno {
    private $bolsa;

    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então seu pagamento é com desconto.</p>";
    }

    public function renovarBolsa(){   // Como um bolsista não paga mensalidade eu sobreponho o metodo 
      echo "<p>Bolsa Renovada</p>";   // pagarMatricula que veio de aluno
    }

    function getBolsa(){
        return $this->bolsa;
    }

    function setBolsa($b){
        $this->bolsa = $b;
    }
 }
?>