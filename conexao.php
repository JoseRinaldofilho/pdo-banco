<?php 
/**
 * conexao pdo
 * dbname = mysql (crud_pdo) ou postgres ou oracle
 * host = localhost (crud)
 * usuario="root" senha="" password
 */
// eviar erros usa o trychat
try {
    $pdo = new PDO("mysql:dbname=crud_pdo1;host=localhost","root","");
}
catch (PDOException $e) {
    echo "Erro com Banco de dados : " . $e->getMessage;
} 
catch (Exception $e) {
    echo "ERROR : " . $e->getMessage;
}






?>