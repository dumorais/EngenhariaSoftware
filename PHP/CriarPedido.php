<?php
$conn = new mysqli('localhost', 'root', '', 'pedido');

if($conn === false){
    die("ERROR: Could not connect");
}

$Idcliente = $_POST[????];
$Identregador = $_POST['?????'];
$Bairro = $_POST['Bairro'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];

$sql = "INSERT INTO cliente (status, valor, id_entregador, id_cliente, id_pagamento, emitido, dt_nasc) VALUES ('I', '$Valor', '$Identregador', '$Idcliente', '$Idpagamento', '$Emitido', '$Dtnasc')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>