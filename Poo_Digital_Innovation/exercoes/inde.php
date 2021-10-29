<?php
// validação

function validaUsuario($usuario)
{
  // se vazio codigo             ou vazio nome             ou vazio idade
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']) ) {
        //
        throw new Exception('Campo Obrigatorio');
    }
    echo "Logado com Sucesso";
    return  true;
}

$usuario = [
    'codigo'=> 1,
    'nome'=>'',
    'idade'=>35

];
$usuarioValido = validaUsuario($usuario);

if (!$usuarioValido) {
    echo "Usuario INvalido";
}
return false;