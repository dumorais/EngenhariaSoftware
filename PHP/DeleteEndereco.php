<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php 
session_start();


$id_endereco = $_POST['id_endereco'];

$sql = "DELETE FROM `endereco` WHERE id_endereco = $id_endereco";

$resultado=mysqli_query(GetMysql(),$sql);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>