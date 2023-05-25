<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php

    include('atualizar-senha.php');

?>
<body>
    <div class="row justify-content-center">
        <div class="col-4">
<div class="container mt-3">
  <h2>Atualizar Senha</h2>
  <form action="index.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="pwd">Senha Antiga:</label>
      <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senhaA">
    </div>
    <div class="mb-3">
      <label for="pwd">Senha Nova:</label>
      <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
    </div>
    <div class="mb-3">
      <label for="pwd">Confirmar Senha Nova:</label>
      <input type="password" class="form-control" id="senha" placeholder="Confirm password" name="confirmar">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Lembrar
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn btn-default">Voltar</a>
  </form>
  </div>
  </div>
  </div>
</body>
</html>