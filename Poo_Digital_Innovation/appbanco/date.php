<?php

$data =  new DateTime();

$data->format('d-m-Y');

/**
 * -> p
 * y ano
 * m mes
 * d dias
 * w semana
 * -> representação do tempo
 * h horas
 * m minutos
 * s segundos
 */
$tempo = new DateTime();
// intervalode tempo

$intelalo = new DateInterval('PT5M');

$tempo->add($intelalo);
print_r($tempo);
