<?php
 session_start();

 $texto = $_SESSION['id'] .'-'. $_POST['titulo'] .'-'.$_POST['categoria'] .'-'. $_POST['descricao'] . "\n";
 
 //Abrindo o arquivo
 $arquivo = fopen('../../../app_help_desk/arquivo.hd','r');

 //Escrevendo texto no arquivo
 fwrite($arquivo,$texto);

 //Fechando o arquivo
 fclose($arquivo);

 //echo $texto;
 header('Location: abrir_chamado.php')
?>
