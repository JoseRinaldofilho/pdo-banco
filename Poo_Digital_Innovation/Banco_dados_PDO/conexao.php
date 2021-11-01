<?php

declare(strict_types=1);
/**
 * conectar ao banco de dados
 */
$pdo = null;

try {
                        //banco               esquema             usuario        senha
    $pdo = new PDO('mysql:dbname=exemplo','root','');
    echo "SUceSSo!!";
}catch (PDOException $e){
    echo "Erro no banco".$e->getMessage();
}catch (Exception $e){
    echo "Erro -> ".$e->getMessage();
}

