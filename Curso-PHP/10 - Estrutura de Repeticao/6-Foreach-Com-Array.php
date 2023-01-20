<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Arrays com foreach</title>
</head>
<body>
<div>
<h3>Exercicio 1</h3>    
<?php
 $funcionarios = ['Maria','João','Carla'];

 foreach ($funcionarios as $i => $nome_funcionario){
    echo "Indice $i, valor $nome_funcionario <br/>";
 }
?>    

<hr/>
<h3>Exercicio 2</h3>
<?php
 $func = [
    ['salario' => 1998.00, 'nome' => 'Miguel'],
    ['salario' => 1749.00, 'nome' => 'João'],
    ['salario' => 996.00, 'nome' => 'Carla'],
 ];

 foreach($func as $indice => $funcionario){
    foreach($funcionario as $indice2 => $valor){
     echo "id2 - $indice2 - $valor <br/>";
    }
    echo "<hr/>";
 };

?>
</div>    
</body>
</html>