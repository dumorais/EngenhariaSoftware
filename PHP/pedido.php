<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php 
session_start();

date_default_timezone_set('America/Sao_Paulo');
$Ende_ret = $_POST['Endereco_Retirada'];
$Ende_entr = $_POST['Endereco_Entrega'];
$Pagamento = $_POST['Pagamento'];
$Valor = $_POST['Valor'];
$date = date("Y-m-d H:i:s");

$Valor = substr($Valor,2,4);

$sql = "INSERT INTO `pedido` (`status`, `valor`, `id_cliente`, `id_pagamento`, `emitido`, `id_endereco`, `endereco_retirada`) VALUES ('Procurando Entregador','$Valor','" . $_SESSION['id_cliente'] . "', '$Pagamento', '$date', '$Ende_entr', '$Ende_ret')";

$resultado=mysqli_query(GetMysql(),$sql);
//executa uma consulta no banco de dados. O que esta função faz é criar um array que representa a linha do dado retornado do banco de dados. 

header("Location: ../Detalhes_Pedido.php");
?>