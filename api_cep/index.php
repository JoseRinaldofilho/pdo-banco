<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api Cep</title>
</head>
<body>

<?php
    if (isset($_POST['cep'])) {
        $cep = $_POST['cep'];

    }
    if (isset($cep)) {
        $url = "https://viacep.com.br/ws/". $cep. "/json";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
    }
?>

<label for="">Insira o Cep</label><br>
<form action="" method="post">
    <input type="text" name="cep" id="" value='<?php if(isset($json_data)) echo $json_data['cep'] ?>'>
    <button type="submit">Pesquisar</button>
    <br><br>

</form>

    <label for="">Logradouro</label>
    <input type="text" name="cep" value='<?php if(isset($json_data)) echo $json_data['logradouro'] ?>' id="logradouro">
    <br>
    <label for="">Bairro</label>
    <input type="text" name="bairro" value='<?php if(isset($json_data)) echo $json_data['bairro'] ?>' id="bairro">
    <br>
    <label for="">Numero</label>
    <input type="text" name="nmr" id="nmr">
    <br>
    <label for="">Complemento</label>
    <input type="text" name="complemento" value='<?php if(isset($json_data)) echo $json_data['complemento'] ?>' id="complemento">
    <br>
    <label for="">Cidade</label>
    <input type="text" name="cidade" value='<?php if(isset($json_data)) echo $json_data['localidade'] ?>' id="cidade">
    <br>
    <label for="">UF:</label>
    <input type="text" name="cidade" value='<?php if(isset($json_data)) echo $json_data['uf'] ?>' id="estado">
    <br>
    <label for="">IBGE:</label>
    <input type="text" name="cidade" value='<?php if(isset($json_data)) echo $json_data['ibge'] ?>' id="ibge">
    <br>
    <label for="">DDD:</label>
    <input type="text" name="cidade" value='<?php if(isset($json_data)) echo $json_data['ddd'] ?>' id="ibge">
    <br>


</body>
</html>

