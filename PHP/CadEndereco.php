<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
<?php
session_start();
$Idcliente = $_SESSION['id_cliente'];
$Ende = $_POST['Ende'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];

$sql = "INSERT INTO endereco (id_cliente, rua, numero, bairro, cidade, estado, cep) VALUES ($Idcliente, '$Ende', $Numero, '$Bairro', '$Cidade', '$Estado', '$Cep')";

$resultado=mysqli_query(GetMysql(),$sql);
//echo("Error description: " . $mysqli -> error);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>