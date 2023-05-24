<?php
include('conectar.php');
$titulo = $descricao = "";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from tarefa where id = $id;";
    $resut = conectar($sql);
    if($linha = $resut->fetch_assoc()){
        $titulo = $linha['titulo'];
        $descricao = $linha['descricao'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tarefa</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-6">
    <div class="container">
        <a href="listar-tarefas.php">Voltar</a>
        <div class="mt-3 p-3 bg-secondary text-white rounded">
            <h1>
                <?= $titulo ?>
            </h1>
            <p>
                <?= $descricao ?>
            </p>
            </div>
            </div>
        </div>    
    </div>
 
</body>
</html>
