<?php
$conn = new mysqli('localhost', 'root', '', 'entregadores');

if($conn === false){
    die("ERROR: Could not connect");
}

$Nome = $_POST['Nome'];
$CPF = $_POST['Cpf'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$Dtnasc = $_POST['Dtnasc'];
$Ende = $_POST['Ende'];
$Num = $_POST['Numero'];
$Bairro = $_POST['Bairro'];

$sql = "INSERT INTO entregadores (nome, email, cpf, telefone, dtnasc, endereco, numero, bairro)
        VALUES ('$Nome', '$Email', '$CPF', '$Tel', '$Dtnasc', '$Ende','$Num', '$Bairro')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>