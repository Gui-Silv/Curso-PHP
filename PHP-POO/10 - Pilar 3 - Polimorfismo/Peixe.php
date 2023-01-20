<?php
require_once "Animal.php";

class Peixe extends Animal{
 private $corEscama;


 public function locomover(){
    echo "<p>Nadando</p>";
 }
 public function alimentar(){
    echo "<p>Comendo Substâncias</p>";
 }
 public function emitirSom(){
    echo "<p>Peixe não emite som</p>";
 }
 public function soltarBolha(){
    echo "<p>Soltando Bolhas</p>";
 }


 function getcorEscama(){
    return $this->corEscama;
 }
 function setcorEscama($cEscama){
    $this->corEscama = $cEscama;
 }
}
?>
