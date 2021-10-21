<?php
    require_once 'conectar.php';
    global $pdo, $res;


if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


        $res = $pdo->prepare("INSERT INTO usuarios (nome, telefone,email, senha) VALUES (:n, :t, :e, :s)");
        $res->bindValue(':n', $nome);
        $res->bindValue(':t', $telefone);
        $res->bindValue(':e', $email);
        $res->bindValue(':s', $senha);
        $res->execute();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                    <span class="glyphicon glyphicon-ok"></span> <strong>Cadastrado com sucesso!!</strong>

                </div>
            </div>
        </div>
    </div>

<?php

}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Crud</title>
  </head>
  <body>
    <div class="container">
        <div style="align-content: center">
            <h3>Cadastre-se</h3>
        </div>
<form method="post">
        <div class="mb-3">
            <label >Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Seu nome" required>

        </div>
        <div class="mb-3">
            <label >Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Seu telefone" required>
           
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Seu E-mail" required>

        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="" required>
        </div>
       
        <button type="submit" class="btn btn-primary" name="acao">Cadastra</button>
</form>
    </div>




  </body>
</html>