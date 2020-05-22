<?php 
    class bancoDados { 

        //Construtor 
        public function __construct() { 
            $conn = mysqli_connect("192.168.1.107", "root", "", $database_name);
            //echo "teste da classe";
        } 

        public function atualiza($sql) {
            $result = mysqli_query($conn, $sql);

            return $result;
        }
    }

    //Já inicia a classe
    $banco = new bancoDados; 
?> 