<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Document</title>
</head>
<body>
<div>    
    <?php
    $num = $_GET['num'];
    $op = $_GET['oper'];

    switch ($op){
        case 1:
            $r = $num *2;
            break;
        case 2:
            $r = $num ^ 3;
            break;
        case 3:
            $r = sqrt($num);
            break;
    }
     echo "O resultado da operação solicitada foi $r."
    ?>
    <a href="exercicio1.html">Voltar</a>
</div>    
</body>
</html>