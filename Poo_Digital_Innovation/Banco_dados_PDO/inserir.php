<?php
declare(strict_types=1);

$pdo = require 'conexao.php';

$sql = 'insert into pessoa value (?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);

$prepare->execute();

echo $prepare->rowCout();