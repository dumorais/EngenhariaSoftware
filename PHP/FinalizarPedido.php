<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php 
session_start();

$id_pedido = $_SESSION['id_pedido'];


$sql = "UPDATE `pedido` SET status = 'Finalizado' WHERE id_pedido = $id_pedido";

$resultado=mysqli_query(GetMysql(),$sql);
//executa uma consulta no banco de dados. O que esta função faz é criar um array que representa a linha do dado retornado do banco de dados. 

header("Location: ../Pedido_Entregador.php");
?>