<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Operadores Relacionais</title>
</head>
<body>
<div>   
  <?php
   $n1 = 5;
   $n2 = 3;
   $tipo = "som";
   echo "Os valores foram $n1 e $n2 <br/>";

   $resp = ($tipo == 'soma') ? $n1+$n2 : $n1*$n2;
   echo "O resultado será $resp";
  ?>

  <hr/>

  <h4> Exercicio 2 - Mostrar media e situacao</h4>
  <?php
   $nome = "Gabriel";
   $media = 5;
   echo "$nome sua média foi $media e você está ".(($media >= 6) ? "Aprovado." : "Reprovado."); 
  ?>

<hr/>

<h4> Exercicio 3 - Eleitor é obrigado a votar ou não</h4>
<?php
 $ano_n = 2000;
 $idade = 2022 - $ano_n;
 echo "Você tem $idade anos e a sua votação é ". (($idade >= 18 && $idade < 65) ? "obrigatória." : "opcional.");
?>
</div>    
</body>
</html> 