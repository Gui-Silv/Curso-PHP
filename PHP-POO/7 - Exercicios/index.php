<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
     require_once "Livro.php";
     require_once "Pessoa.php";
     
     $p[0] = new Pessoa("Guilherme", 21, "F");
     $p[1] = new Pessoa("Enzo", 27, "M");

     $l[0] = new Livro("PHP Básico", "José da Silva" , 300, $p[0]);
     $l[1] = new Livro("Harry Potter", "Jk", 700, $p[0]);
     $l[2] = new Livro("Algoritmos", "Alencar", 250, $p[1]);
     
     $l[0]->abrir();
     $l[0]->folhear(250);
     $l[0]->voltarPag();
     
     $l[0]->detalhes();
     $l[1]->detalhes();
     $l[2]->detalhes();
    ?>
    <pre>
</body>
</html>