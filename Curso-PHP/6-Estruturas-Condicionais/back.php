<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Estruturas Condicionais</title>
</head>
<body>
<div> 
   <h3>Exercicio 1 - Teste Maioridade</h3>   
   <?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    if($idade >= 18){
        $v = "já pode votar";
        $d = "já pode dirigir";
    } else {
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo "Olá $nome com $idade anos você $v e $d.";
   ?>
   <hr/>

</div>    
</body>
</html>