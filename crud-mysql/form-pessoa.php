<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pessoa</title>
</head>
<body>
<form action="" method="post"> 
    <h1>Formulário de Pessoa</h1>
    Nome: <br>
    <input type="text" name="nome"><br>
    E-mail: <br>
    <input type="text" name="email"><br>
    <input type="submit" value="Gravar">
    </form>
</body>
<?php
include 'conectar.php';
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    incluir($nome, $email);
}
?> 

</html>