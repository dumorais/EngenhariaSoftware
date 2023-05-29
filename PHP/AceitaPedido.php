<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php 
session_start();

date_default_timezone_set('America/Sao_Paulo');
$id_pedido = $_POST['id_pedido'];
$id_entregador = $_SESSION['id_entregador'];
$_SESSION['id_pedido'] = $id_pedido;

$sql = "UPDATE `pedido` SET status = 'Aguardando', id_entregador = $id_entregador WHERE id_pedido = $id_pedido";

$resultado=mysqli_query(GetMysql(),$sql);
//executa uma consulta no banco de dados. O que esta função faz é criar um array que representa a linha do dado retornado do banco de dados. 

header("Location: ../Visualiza_Pedido.php");
?>