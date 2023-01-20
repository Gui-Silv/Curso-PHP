<?php
 class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($n, $nac, $i, $alt, $p, $vit, $der, $emp){
        $this->nome = $n;
        $this->nacionalidade = $nac;
        $this->idade = $i;
        $this->altura = $alt;
        $this->setPeso($p);
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empates = $emp;
    }

    public function apresentarLutador(){
     echo "Lutador: " . $this->getNome() . "<br/>";
     echo "Nacionalidade: " . $this->getNacionalidade() . "<br/>";
     echo "Idade: " . $this->getIdade() . "<br/>";
     echo "Altura: " . $this->getAltura() . "<br/>";
     echo "Peso: " . $this->getPeso() . "<br/>";
     echo "Categoria: " . $this->getCategoria() . "<br/>";
     echo "Vitórias: " . $this->getVitorias() . "<br/>";
     echo "Derrotas: " . $this->getDerrotas() . "<br/>";
     echo "Empates: " . $this->getEmpates() . "<br/>";
    }

    public function statusLutador(){
     echo $this->getnome() . "<br/>";
     echo "É um ". $this->getCategoria() . "<br/>"; 
     echo $this->getVitorias() . " Vitorias <br/>";
     echo $this->getDerrotas() . " Derrotas <br/>";
     echo $this->getEmpates() . " Empates <br/>";
    }

    public function ganharLuta(){
     $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
     $this->setDerrotas($this->getDerrotas() + 1);  
    }

    public function empatarLuta(){
      $this->setEmpates($this->getEmpates() + 1);
    }

    
    public function getNome(){
        return $this->nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    private function getAltura(){
        return $this->altura;
    }
    private function getPeso(){
        return $this->peso;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }


    private function setNome($nome){
        $this->nome = $nome;
    }
    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    private function setIdade($idade){
        $this->idade = $idade;
    }
    private function setAltura($altura){
        $this->altura = $altura;
    }
    private function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria($peso);
    }
    private function setCategoria($p){
     if($p <= 52.2){
        $this->categoria = "Peso Inválido";
     } elseif ($p <= 70.3){
   
   
        $this->categoria = "Peso Pena";
     } elseif ($p <= 83.9){
        $this->categoria = "Peso Médio";
     } elseif ($p <= 120.2) {
        $this->categoria = "Peso Pesado";
     } else {
        $this->categoria = "Peso Inválido";
     }
    }
    private function setVitorias($vitoria){
        $this->vitorias = $vitoria;
    }
    private function setDerrotas($derrota){
        $this->derrotas = $derrota;
    }
    private function setEmpates($empate){
        $this->empates = $empate;
    }
 }
?>