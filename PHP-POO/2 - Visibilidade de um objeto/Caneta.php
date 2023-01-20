<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
         if($this->tampada == true){
          echo "Erro! Não posso rabiscar!";
         } else {
            echo "Estou Rabiscando";
         }
        }

        public function tampar(){
         $this->tampada = true;
        }
        
        public function destampar(){
         $this->tampada = false;   
        }
     }
    
    ?>
</body>
</html>