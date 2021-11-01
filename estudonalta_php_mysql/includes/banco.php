<?php

try {
    $banco = new PDO('mysql:dbname=db_games;host=localhost','root','');
    echo "SUccesso";
}catch (PDOException $e){
    // errode banco
    echo "Erro : ". $e->getMessage();
    die();
}catch (Exception $e){
    echo "Erro: ".$e->getMessage();
}
//
//$busca = $pdo->query('select * from genero');
//if (!$busca) {
//    echo "Falha na busca";
//    die();
//}else{
////    foreach ($busca as $item) {
////        echo "<pre>";
////        print_r($item);
////    }
//   echo "<pre>";
//  $registro = $busca->fetchAll();
//  print_r($registro);
//}
