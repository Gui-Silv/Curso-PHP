<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <pre>
    <?php
     require_once "controleRemoto.php";

     $controle1 = new controleRemoto();
     $controle1->ligar();
     $controle1->maisVolume();
     $controle1->maisVolume();
     $controle1->play();

     $controle1->abrirMenu(); // os unicos metodos que posso acessar são o da interface deixando bem mais seguro
    ?>
    </pre>
</body>
</html>