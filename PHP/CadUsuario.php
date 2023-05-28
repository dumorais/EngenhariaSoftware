<?php
$conn = new mysqli('localhost', 'root', '', 'cliente');

if($conn === false){
    die("ERROR: Could not connect");
}

$Nome = $_POST['Nome'];
$CPF = $_POST['Cpf'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$Dtnasc = $_POST['Dtnasc'];
$Senha = $_POST['Senha'];

$sql = "INSERT INTO cliente (nome, email, cpf, dt_nasc, senha) VALUES ('$Nome', '$Email', '$Cpf', '$Dtnasc', '$Senha')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>