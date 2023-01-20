<?php
require_once "Animal.php";

class Reptil extends Animal{
 private $corEscama;


 public function locomover(){
    echo "<p>Rastejando</p>";
 }
 public function alimentar(){
    echo "<p>Comendo Vegetais</p>";
 }
 public function emitirSom(){
    echo "<p>Som de Reptil</p>";
 }


 function getcorEscama(){
    return $this->corEscama;
 }
 function setcorEscama($cEscama){
    $this->corEscama = $cEscama;
 }
}


//Cobra
class Cobra extends Reptil{

}

//Tartaruga
class Tartaruga extends Reptil{
    function locomover(){
     echo "<p>Andando beeem devagarinho</p>";
    }
}
?>
