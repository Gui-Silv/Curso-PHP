<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Operadores de Atribuição</title>
</head>
<body>
<div>   
   <h3>Exercicio 1 - Aplicar 10% de aumento</h3>
   <?php
    $preco = 525;
    echo "O preço do produto é R$ $preco";
    $preco += ($preco*10)/100;
    echo "<br/> Com 10% de aumento ele ficará R$". number_format($preco,2);
   ?>

   <hr/>

   <h3>Exercicio 2 - Mostrar o ano anterior do atual</h3>
   <?php
    $a_atual = 2022;
    echo "O ano atual é $a_atual e o anterior dele foi ". --$a_atual;
   ?> 

   <hr/>
   
   <h3>Exercicio 3 - Prática de variaveis referênciadas</h3>
   <?php
    echo "SEM <br/>";
    $a = 3;
    $b = $a;
    $b += 5;
    echo "$a <br/>";
    echo "$b <br/>";
    echo "<hr/>";

    echo "COM <br/>";
    $c = 3;
    $d = &$c;
    $d += 5;
    echo "$c <br/>";
    echo "$d";
   ?> 

   <hr/> 

   <h3>Exercicio 4 - Prática de variaveis de variáveis</h3>
   <?php
    $x = 'abc';
    $$x = 'def';
    echo "O conteudo da var x é $x <br/>";
    echo "O conteudo da var criada é $abc que veio de abc";
   ?> 

</div>    
</body>
</html> 