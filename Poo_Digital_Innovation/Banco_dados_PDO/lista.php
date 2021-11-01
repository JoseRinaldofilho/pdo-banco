<?php
require_once 'conexao.php';
//declare(strict_types=1);

$pdo = require 'conexao.php';

$sql = 'select * from produtos';// o que vai ser feito na sql do banco

echo "<h3>Produtos</h3>";

foreach ($pdo->query($sql) as $key => $value) {

    echo "ID: ". $value['id']. '<br> Descrição'. $value['descricao']. '<hr>';

}