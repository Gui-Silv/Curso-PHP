<?php
class ContaBancaria{
   private $nome;
   private $saldo;
   public $conta;
   protected $tipo;
   private $status; 
   

   function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta Criada com Sucesso!</p>";
   }

   public function abrirConta($t){
    $this->setTipo($t);
    $this->setStatus(true);

     if ($t == "CC"){ //cc para conta corrente/ cp para conta poupanla
     $this->setSaldo(150);

     } elseif ($t == "CP"){
      $this->setSaldo(50);
     }
   }

   public function fecharConta(){
    if($this->getSaldo() > 0){
     echo "<p>Não foi possivel fechar a conta pois consta valores nela.</p>";
    } elseif ($this->getSaldo() < 0){
      echo "<p>Não é possivel fechar a conta pois consta valores pendentes à serem pagos </p>";
    } else {
      $this->setStatus(false);
    }
   }

   public function depositar($d){
    if($this->getStatus() == true){
     $this->setSaldo($this->getSaldo() + $d);
    } else {
      echo "<p>Conta fechada! Não é possivel depositar.</p>";
    }
   }


   public function sacar($d){
    if($this->getStatus() == true){
      if($this->getSaldo() > $d){
        $this->setSaldo(getSaldo() - $d);
        echo "Saque concluido";
      } else {
        echo "Saldo insuficiente";
      }
    } else {
      echo "Não posso sacar de uma conta fechada";
    }
   } 

   public function pagarMensalidade($v){

    if($this->getTipo() == "CC"){ 
      $v = 12;

     } elseif ($this->getTipo() == "CP"){
      $v = 20;
     } 

     if ($this->getStatus() == true){
      $this->setSaldo(getSaldo() - $v);
     } else {
      echo "Problemas com a conta";
     }
   }

   //Métodos especiais

   public function getDono(){
    return $this->nome;
   }

   public function setDono($nome){ // o 1 $nome é uma variavel e o segundo é um atributo
    $this->nome = $nome;
   }


   public function getnumConta(){
    return $this->conta;
   }

   public function setnumConta($conta){
    $this->conta = $conta;
   }


   public function getSaldo(){
    return $this->saldo;
   }

   public function setSaldo($saldo){
    $this->saldo = $saldo;
   }



   public function getTipo(){
    return $this->$tipo;
   }

   public function setTipo($tipo){
    $this->tipo = $tipo;
   }


   public function getStatus(){
    return $this->status;
   }

   public function setStatus($status){
    $this->status = $status;
   }
}
?>