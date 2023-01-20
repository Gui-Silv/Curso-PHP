<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Integrar Html com Php</title>

    <?php //Lógica do exercicio 3 pois isso só posso fazer quando a var estiver dentro do head
    $texto = isset($_GET["t"])? $_GET["t"] : "Texto Generico";
    $tamanho = isset($_GET["tam"])? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"])? $_GET["cor"] : "#000000"; // Cor preta
    ?>
    <style>
      span.texto {
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
      }  
    </style>
</head>
<body>
<div> 
   <h4>Exercicio 1 - Recebe um valor e mostra sua raiz</h4>   
   <?php
    $valor = $_GET["v"];
    $raiz = sqrt($valor);
    echo "O valor enviado foi $valor e sua raiz igual a ". (number_format($raiz,2)). "</br>";
   ?>
   <a href="Modelo.html">Voltar</a>
   <hr/>




   <h4>Exercicio 2 - Recebendo os dados de uma pessoa</h4>
   <?php
    $nome = isset($_GET["nome"])? $_GET["nome"] : "[Não Informado]";
    $ano = isset($_GET["idade"])? $_GET["idade"] : "[Não Informado]";
    $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[Não Informado]";

    $idade = date("Y") - $ano;

    echo "$nome tem $idade anos e de sexo $sexo.";
   ?>
   </br><a href="Modelo.html">Voltar</a>
   <hr/>

   <h4>Exercicio 3 - Permitir personalizar texto através de um formulário</h4>
   <?php
     //Lógica no head

     echo "<span class='texto'>$texto</span>";
   ?>
</div>    
</body>
</html> 