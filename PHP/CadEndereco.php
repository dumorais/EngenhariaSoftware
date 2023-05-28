<?php
$conn = new mysqli('localhost', 'root', '', 'endereco');

if($conn === false){
    die("ERROR: Could not connect");
}

$Idcliente = $_POST[????];
$Ende = $_POST['Ende'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];

$sql = "INSERT INTO endereco (id_cliente, rua, numero, bairro, cidade, estado, cep) VALUES ('$Idcliente', '$Ende', '$Numero', '$Bairro', '$Cidade', '$Estado', '$Cep')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>