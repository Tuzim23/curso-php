<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pessoa</title>
</head>
<body>
<?php
include 'conectar.php';
include 'validar-cpf.php';
$msgCpf = $id = $nome = $email = $cpf = $sexo = $escolaridade = "";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (array_key_exists('id',$_GET)){
        $id = $_GET['id'];
        $pessoa = buscar($id);
        $nome = $pessoa['nome'];
        $email = $pessoa['email'];
        $cpf = $pessoa['cpf'];
        $escolaridade = $pessoa['escolaridade'];
        $sexo = $pessoa['sexo'];
    }
    if (array_key_exists('apagar',$_GET)){
        $apagar = $_GET['apagar'];
        $msg = apagar($apagar);
        echo $msg;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msg = "";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $escolaridade= $_POST['escolaridade'];
    $id = $_POST['id'];

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);

    if(validarCpf($cpf)){
        if($id == ''){
            $msg = incluir($nome, $email, $cpf, $sexo, $escolaridade);
        } else {
            $msg = alterar($id, $nome, $email, $cpf, $sexo, $escolaridade);
        }
    }else{
        $msgCpf = "CPF inválido!";
    }
    
    echo $msg;
}

?>
<form action="form-pessoa.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id; ?>">
    <h1>Formulário de Pessoa</h1>
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $nome; ?>" required><br>
    E-mail: <br>
    <input type="email" name="email" value="<?php echo $email; ?>" required><br>
    CPF:<?php echo $msgCpf; ?> <br>
    <input type="text" name="cpf" value="<?php echo $cpf; ?>" required><br>
    Sexo: <br>
    <input type="radio" name="sexo" value="m" required <?php if($sexo == "m") echo "checked"; ?>>Masculino
    <input type="radio" name="sexo" value="f" required <?php if($sexo == "f") echo "checked"; ?>>Feminino
    <br>
    <html>
    <body>
        
    <form action="escolaridade-pessoa">
  <label for="Escolaridade">Escolaridade:</label><br>
  <select id="escolaridade" name="escolaridade">
    <option value="Ensino Médio">Ensino Médio</option>
    <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
    <option value="Ensino Superior Completo">Ensino Superior Completo</option>
    <br>
  </select>
</form>
</body>
</html>

<html>
<body>

    <form action="/action_page.php">
    <label for="pwd">Senha:</label><br>
    <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
 
</form>

</body>
</html>

<html>
<body>

    <form action="/action_page.php">
    <label for="pwd">Confirmar:</label><br>
    <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
 
</form>
</body>
</html>

    <br>
    <br>
    <input type="submit" value="Gravar">
    <a href="form-pessoa.php">
    <input type="button" value="Novo">
    </a>
</form>
<br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Sexo</th>
        <th>Escolaridade</th>
    </tr>
    <?php
    $dados = listar();
    while ($linha = $dados->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td>".$linha['cpf']."</td>";
        echo "<td>".$linha['sexo']."</td>";
        echo "<td>".$linha['escolaridade']."</td>";
        echo "<td><a href='form-pessoa.php?id=".$linha['id']."'>Editar</a></td>";
        echo "<td><a onclick='return apagar(".$linha['id'].");' href='form-pessoa.php?apagar=".$linha['id']."'>Apagar</a></td>";
        echo "</tr>";
    }
    ?>
    <script>
        function apagar(id){
            return confirm("Deseja Apagar o registro ID("+id+")?");
        }
    </script>
</table>
</body>
</html>
