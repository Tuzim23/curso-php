<?php 
function conectar($sql){
    $id= "";
    $senha= "";

$servidor = "localhost";
$usuario = $id."root";
$banco = $id."mydb";

$con = new mysqli($servidor, $usuario, $senha, $banco);

if($con->connect_error) {
    die("Erro :".$con->connect_error);
}

return $con ->query($sql);
}
?>