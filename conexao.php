<?php 

/**
 * conexao pdo
 * dbname = mysql (crud_pdo) ou postgres ou oracle
 * host = localhost (crud)
 * usuario="root" senha="" password
 */
// eviar erros usa o trychat
try {
    $pdo = new PDO("mysql:dbname=crud_pdo;host=localhost","root","");
}
catch (PDOException $e) {
    echo "Erro com Banco de dados : " . $e->getMessage;
} 
catch (Exception $e) {
    echo "ERROR : " . $e->getMessage;
}

//--------------------------------------------- Inserti ----------------------------------------

//$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone,email) VALUES (:n, :t, :e)");
////preenchendo os dados
//$res->bindValue(":n","davi cardoso");
//$res->bindValue(":t","33333");
//$res->bindValue(":e","davi@rrr.com");
////executar
//$res->execute();

//----------------------------------------------------delete e update----------------------------
/**seleciona na tabela pessoa o id */
/*$cmd = $pdo->prepare("DELETE FROM pessoa where id = :id");
$id = 2;
$cmd->bindValue(":id",$id); // bindValue busca o valor do id
$cmd->execute();*/

//-------------------------------- update ---------------------------------------------------
/*$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");

$cmd->bindValue(":e","josejose@jj.com"); 
$cmd->bindValue(":id",1);
$cmd->execute();*/

//------------------------------select ---------------------------------------------

$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id",1);
$cmd->execute();
/** pega ess informçao doi banco e tranforma no array */
$res = $cmd->fetch(PDO::FETCH_ASSOC);//busca por 1 id fetchall busca todos los usa PDO:

foreach ($res as $index => $re) {
    echo "$index". " : ". $re." <hr>";
}



//$cmd->fetchAll();



?>