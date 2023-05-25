<?php include("validar-session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Tarefas</title>
</head>

<body>
    <div class="container">
        <h2>Lista de Tarefas
            <?php if ($id_admin > 0) { ?>
                <a href="form-tarefa.php" class="btn btn-success">Nova Publicação</a>
                <a href="logoff.php" class="btn btn-danger">Sair</a>
                <a href="index.php"class="btn btn-default">Voltar</a>
            <?php } ?>
        </h2>
        <table class="table">
            <tr>
                <th>Titulo</th>
                <th class="col-1">Acessar</th>
            </tr>
            <?php
            include("conectar.php");
            $sql = "select * from tarefa;";
            $resut = conectar($sql);
            while ($linha = $resut->fetch_assoc()) {
                $id = $linha['id'];
                $t = $linha['titulo'];
                echo "<tr>
                        <td>$t</td>
                        <td><a href='tarefa.php?id=$id'>👀</a></td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>