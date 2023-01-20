<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Foreach</title>
</head>
<body>
<div>
<?php
 $itens = ['Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira'];
 echo "<pre>";
 print_r($itens);
 echo "</pre>";

 foreach($itens as $obj){
    echo "$obj <br/>";

    if($obj == 'Mesa'){
        echo "Compre uma mesa e ganhe 25% de desconto comprando 4 cadeiras";
    }
    
 }
?>    
</div>    
</body>
</html>