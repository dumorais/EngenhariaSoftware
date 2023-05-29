<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
<?php
session_start();
$id_endereco = $_POST['id_endereco'];
$Ende = $_POST['Ende'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];

$sql = "UPDATE endereco SET  rua = '$Ende', numero = '$Numero', bairro = '$Bairro', cidade = '$Cidade', estado = '$Estado', cep = '$Cep' WHERE id_endereco = $id_endereco";

$resultado=mysqli_query(GetMysql(),$sql);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>