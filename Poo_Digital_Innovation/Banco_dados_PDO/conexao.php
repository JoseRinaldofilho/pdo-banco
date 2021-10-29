<?php
/**
 * conectar ao banco de dados
 */
$pdo = null;

try {
                        //banco               esquema             usuario        senha
    $pdo = new PDO('mysql:dbname=crud_pdo','root','');
    echo "Logado com SUceSSo!!";
}catch (PDOException $e){
    echo "Erro no banco".$e->getMessage();
}catch (Exception $e){
    echo "Erro -> ".$e->getMessage();
}