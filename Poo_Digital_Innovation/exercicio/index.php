<?php
require_once  'Venda.php';

$comprador = new Venda(Date('d'),"PC Games",1,6000.50);

echo $comprador->exibirVendas();