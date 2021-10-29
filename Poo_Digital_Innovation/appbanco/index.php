<?php
require_once 'ContaBancaria.php';

$conta1 = new ContaBancaria('JOse',1222,55522244,300,'caixa economica');

echo "<pre>";
echo $conta1->depositar(150);
echo "<hr>";
echo $conta1->obiterSaldo(). PHP_EOL;

echo $conta1->saca(125). PHP_EOL;

echo $conta1->obiterSaldo();
echo "<hr>";
/**
 * Datatme d-m-Y
 */

$data =  new DateTime();

echo $data->format('d-m-Y');

/**
 * date com itervalo de tmpo
 */


