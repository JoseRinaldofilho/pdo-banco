<?php 
// faz a conexao com appbanco
try {

    $conectar = new PDO("mysql:host=localhost;bdname=crud_pdo;","root","");
    echo "Canexao Successo !";
}catch(PDOException $e){
    /**
     * se tiver error exibir a mensagem
     */
    
    echo "Error falha ao conectar :" . $e->getMessage;
}



?>