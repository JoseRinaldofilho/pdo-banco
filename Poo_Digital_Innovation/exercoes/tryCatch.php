<?php


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
    'nome'=>'ss',
    'idade'=>35

];
try {

$usuarioValido = validaUsuario($usuario);
}catch (Exception $e){
    echo "Erro ->: ".$e->getMessage();
    die();
} finally // se nao gera ume exception
{
    echo "Status de operaçõa";
    die();
}


return false;