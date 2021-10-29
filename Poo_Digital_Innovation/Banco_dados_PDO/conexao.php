<?php
/**
 * conectar ao banco de dados
 */
$pdo = null;

try {


}catch (PDOException $e){
    echo "Erro no banco".$e->getMessage();
}