<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Estrutura de repetições com arrays</title>
</head>
<body>
<div>


<h3>Exercicio 1</h3>    
<?php
 $noticias = ['Noticia 1', 'Noticia 2', 'Noticia 3'];
 
 $i = 0;

 while($i < 3){
    echo "$noticias[$i] <hr/>";
    $i++;
 }

?>    



</hr>
<h3>Exercicio 2</h3>
<?php
 $registros = [
    ['titulo' => 'Titulo 1', 'conteudo' => 'Conteudo 1'],
    ['titulo' => 'Titulo 2', 'conteudo' => 'Conteudo 2'],
    ['titulo' => 'Titulo 3', 'conteudo' => 'Conteudo 3'],
 ];
 $r = 0;

 echo "O array possui ". count($registros) . " registros </br>";
 
 while ($r < count($registros)){
   echo "<h3>". $registros[$r]['titulo']. "</h3>";
   echo "<p>" . $registros[$r]['conteudo'] . "</p>";
   echo "<hr/>";

   $r++;
 }

?>    
</div>    
</body>
</html>