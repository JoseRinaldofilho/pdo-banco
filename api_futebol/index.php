<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futebol</title>
</head>
<body>
<?php

if (isset($_POST['cep'])) {
    $cep = $_POST['cep'];

}
if (isset($cep)) {
    $url = "https://www.scorebat.com/video-api/v3/" . $cep . "/json";
    $json = file_get_contents($url);
    $json_data = json_decode($json, true);
}

?>
<!--<label for="">Insira o jogo</label><br>-->
<!--<form action="" method="post">-->
<!--    <input type="text" name="cep" id="" value='--><?php //if(isset($json_data)) echo $json_data['title'] ?><!--'>-->
<!--    <button type="submit">Pesquisar</button>-->
<!--    <br><br>-->
<!---->
<!--</form-->
<label for="">Logradouro</label>
<input type="text" name="cep" value='<?php if(isset($json_data)) echo $json_data['title'] ?>' id="logradouro">
<br>
</body>
</html>
