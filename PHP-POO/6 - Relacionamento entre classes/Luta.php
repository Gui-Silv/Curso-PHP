<?php
require_once "Lutador.php";

 class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada; //logico

    public function marcarLuta($l1, $l2){
      if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            echo "----- MARCADA ------ <br><br>";
            echo $this->desafiado->getNome(). " VS " . $this->desafiante->getNome();
            echo "<hr>";
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            echo "A luta não pode ser marcada pois foram encontradas inconcistências"; 
        }
      }
    
    public function lutar(){
     if($this->aprovada){
        $this->desafiado->apresentarLutador();
        echo "<hr/>";
        $this->desafiante->apresentarLutador();
        $vencedor = rand(0,2);
        echo "<hr/>";

        switch ($vencedor){
            case 0:
                echo "<p>Empate!</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1:
                echo "O desafiado " . $this->desafiado->getNome() . " ganhou :)";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2:
                echo "O desafiante " . $this->desafiante->getNome() . " ganhou :)";    
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                break;    
        }
     } else {
      echo "<p>Luta Não Pode Acontecer</p>";
     }
    }

    function getDesafiado(){
        return $this->desafiado;
    }
    function getDesafiante(){
        return $this->desafiante;
    }
    function getRounds(){
        return $this->rounds;
    }
    function getAprovada(){
        return $this->aprovada;
    }

    function setDesafiado($desafiado){
      $this->desafiado = $desafiado;
    }
    function setDesafiante($desafiante){
      $this->desafiante = $desafiante;
    }
    function setRounds($r){
      $this->rounds = $r;
    }
    function setAprovada($aprv){
      $this->aprovada = $aprv; 
    }
 }
?>