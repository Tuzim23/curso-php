<?php 

$pasta = "arquivos/";
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
$msgUpload = "";

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){

    }else{
        $msgUpload .= "Não é uma imagem.<br>";
        $uploadOk = 0;
    }
    if(file_exists($arquivo)){
        $msgUpload .= "Arquivo já existente, tente renomear ou enviar outro arquivo. <br>";
        $uploadOk = 0;
    }
    if($_FILES["fileToUpload"]["size"] >= 500000){
        $msgUpload .= "Arquivo muito grande supera o tamanho de 500KB!<br>";
        $uploadOk = 0;
    }
    if($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif"){
        $msgUpload .= "Tipo de arquivo não permitido<br>";
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        $msgUpload .= "Desculpe, não será possivel fazer o upload.<br>";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)){

        }else{
            $msgUpload .= "Desculpe, erro inesperado ao fazer o upload.";
        }
    }
    $msg = $msgUpload;
}
?>