<?php 
require_once "validador-acesso.php";
  
?>

<?php
 //array para receber titulo, categoria, descricao do arquivo
 $chamados = [];

 $arquivo = fopen('../../../app_help_desk/arquivo.hd','r');

 //enquanto houver registros(linhas) a serem recuperados
 while(!feof($arquivo)){
  $registro = fgets($arquivo);
  $chamados[] =  $registro;
 }
  
 foreach($chamados as $chamado){
  $chamado_dados = explode('-', $chamado);
  if($_SESSION['perfil_id'] == 2){
    if($chamado_dados[0] != $_SESSION['id']){
      continue;
    }
   }
  
   if(count($chamado_dados) < 3){
    continue;
   }

 }

 fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <nav class="navbar  navbar-expand-sm navbar-dark bg-dark"> 
      <!-- Logo -->
      <a href="logo.png" class="navbar-brand"> Help Desk </a> <!-- o brand especifica que o item é uma logo -->
      <!--Navegação-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Contato</a>
        </li>
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $chamado){ ?>   

              <?php
               $chamado_dados = explode('-', $chamado);
               
               if($_SESSION['perfil_id'] == 2){
                if($chamado_dados[0] != $_SESSION['id']){
                  continue;
                }
               }

               if(count($chamado_dados) < 3){
                continue;
               }
              ?> 

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                  <p class="card-text"><?=$chamado_dados[3]?></p>

                </div>
              </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>