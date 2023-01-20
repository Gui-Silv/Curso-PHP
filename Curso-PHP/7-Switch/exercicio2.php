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
    $dia = $_GET["dia"];

    switch($dia){
        case 1:
        case 2:
        case 3:
        case 4:    
          $r = "tenho que ir pra escola ;(";
          break;
        case 5:
        case 6:
        case 7:
          $r = "não preciso ir pra escola :)";
          break;
    }

     echo "Hoje é $dia e eu $r";
    ?>
    
</div>    
</body>
</html>