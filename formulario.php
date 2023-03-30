<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form de boas Vindas</title>
</head>
<body>
    <h1>Formulario usa method POST</h1>
    <form action="bem-vindo-post.php" method="post">
        Nome:<input type="text" name="nome"><br>
        E-mail:<input type="text" name="email"><br>
        Idade:<input type="number" name="idade"><br>
        <input type="submit">
    </form>
    <h1>Formulario usa method GET</h1>
    <form action="bem-vindo-get.php" method="get">
        Nome:<input type="text" name="nome"><br>
        E-mail:<input type="text" name="email"><br>
        Idade:<input type="number" name="idade"><br>
        <input type="submit">
    </form>
    <br>
    <a href="/curso-php/index.php">Voltar</a>
</body>
</html>
<?php
//  exemplo usando o metodo POST.
$name = $_POST["nome"];
$email = $_POST["email"];

echo "Bem Vindo ao mundo PHP $nome <br>";
echo "E-mail registrado $email";

?>
<?php
//  exemplo usando o metodo GET.
$name = $_GET["nome"];
$email = $_GET["email"];

echo "Bem Vindo ao mundo PHP $nome <br>";
echo "E-mail registrado $email";

?>
