<?php
 require_once "Pessoa.php";
 require_once "Publicacao.php";

 class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto; //lógico
    private $leitor;

    function __construct($titulo, $autor, $totP, $leitor){
     $this->titulo = $titulo;
     $this->autor = $autor;
     $this->totPaginas = $totP;
     $this->leitor = $leitor;
     $this->aberto = false;
     $this->pagAtual = 0;
    }

    public function detalhes(){
     echo "Livro ". $this->titulo . " escrito por " . $this->autor;
     echo "<br>Páginas ". $this->totPaginas;
     echo "<br>Sendo lido por ". $this->leitor->getNome() . " estando na página ". $this->pagAtual ."."; 
     echo "<hr>";
    }


    function getTitulo(){
        return $this->titulo;
    }
    function getAutor(){
        return $this->autor;
    }
    function getTotPaginas(){
        return $this->totPaginas;
    }
    function getPagAtual(){
        return $this->pagAtual;
    }
    function getAberto(){
        return $this->aberto;
    }
    function getLeitor(){
        return $this->leitor;
    }
    

    function setTitulo($tit){
        $this->titulo = $tit;
    }
    function setAutor($autor){
        $this->autor = $autor;
    }
    function setTotPaginas($totPag){
        $this->totPaginas = $totPag;
    }
    function setPagAtual($pagAt){
        $this->pagAtual = $pagAt;
    }
    function setAberto($aberto){
        $this->aberto = $aberto;
    }
    function setLeitor($l){
        $this->leitor = $l;
    }


    //Métodos da interface
    public function abrir(){
     $this->setAberto(true);
     $this->setPagAtual(1);
    }
    public function fechar(){
     $this->setAberto(false);
    }
    public function folhear($f){
     if($f > $this->getTotPaginas()){
        $this->setPagAtual(0);
     } else {
        $this->setPagAtual($f);
     }
    }
    public function avancarPag(){
     $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag(){
     $this->setPagAtual($this->getPagAtual() - 1);
    }

 }
?>