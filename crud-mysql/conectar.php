<?php

function conectar(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $con = new mysqli($servidor, $usuario, $senha, "mydb");

    if($con->connect_error){
        die("Erro :".$con->connect_error);
    }
    
    return $con;
}


function incluir($nome, $email, $cpf, $sexo, $escolaridade){
    $con = conectar();
    $sql = "insert into pessoa(nome, email, cpf, sexo) values('$nome','$email','$cpf', '$sexo','$escolaridade)";
    if($con->query($sql) === true){
        return "Ok ao gravar";
    }else{
        return "Erro: $sql".$con->error;
    }
}

function listar(){
    $con = conectar();
    $sql = "select id, nome, email, cpf, sexo from pessoa";
    $resultado = $con->query($sql);
    return $resultado;
}

function buscar($id){
    $con = conectar();
    $sql = "select id, nome, email, cpf, sexo, escolaridade from pessoa where id = $id";
    $resultado = $con->query($sql);
    $resultado = $resultado->fetch_assoc();
    return $resultado;
}

function alterar($id, $nome, $email, $cpf, $sexo, $escolaridade){
    $con = conectar();
    $sql = "update pessoa set nome = '$nome', email = '$email', cpf = '$cpf', sexo = '$sexo', escolaridade = '$escolaridade', where id = $id";
    if($con->query($sql) === true){
        return "Ok ao Atualizar";
    }else{
        return "Erro: $sql".$con->error;
    }
}

function apagar($id){
    $con = conectar();
    $sql = "delete from pessoa where id = $id";
    if($con->query($sql) === true){
        return "Ok ao Apagar";
    }else{
        return "Erro: $sql".$con->error;
    }
}

?>