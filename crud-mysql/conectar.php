<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password, "mydb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function incluir($nome, $email){
  global $conn;
  $sql = "insert into pessoa(nome, email) VALUES('$nome','$email')";
    
  if($conn->query($sql) === TRUE){
  return "Ok ao gravar!";
  }else{ 
  return "Error: $sql".$conn->error;
  }
}
?>