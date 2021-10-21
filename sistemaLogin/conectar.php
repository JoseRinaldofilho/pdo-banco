<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_login;host=localhost", "root", "");

}
catch (PDOException $e) {
    echo "Erro com Banco de dados : " . $e->getMessage;

} catch (Exception $e) {
    echo "ERROR : " . $e->getMessage;
}