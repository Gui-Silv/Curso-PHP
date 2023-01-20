<?php
require_once "Animal.php";

class Mamifero extends Animal{
 private $corPelo;

 public function locomover(){
    echo "<p>Correndo</p>";
 }
 public function alimentar(){
    echo "<p>Mamando</p>";
 }
 public function emitirSom(){
    echo "<p>Som de Mamífero</p>";
 }

 function getcorPelo(){
    return $this->corPelo;
 }
 function setcorPelo($cPelo){
    $this->corPelo = $cPelo;
 }
}


//Canguru
class Canguru extends Mamifero{
    function usaBolsa(){
     echo "<p>Usando a Bolsa</p>";
    }
    function locomover(){
     echo "<p>Pula Pula</p>";
    }
}

//Cachoro
class Cachorro extends Mamifero{
    function enterrarOsso(){
     echo "<p>Enterrando o ossinho</p>";
    }
    function abanarRabo(){
     echo "<p>Abanando o meu rabinho<p>";   
    }
}
?>
