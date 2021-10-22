<?php
require_once  'Cliente.php';

$jose = new Cliente();

validaCamposCadastro("jose","jj@.com",123,123,51011509,162,'m',71128207591);

echo $jose;