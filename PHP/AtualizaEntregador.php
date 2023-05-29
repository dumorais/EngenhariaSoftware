<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
<?php
session_start();
$id_entregador = $_SESSION['id_entregador'];
$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$Dtnasc = $_POST['Dtnasc'];
$Ende = $_POST['Ende'];
$Num = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Raio = $_POST['Raio'];
$Estado = $_POST['Estado'];
$Cep = $_POST['Cep'];
$Cidade = $_POST['Cidade'];


$sql = "UPDATE entregador SET nome = '$Nome', email = '$Email', telefone = '$Tel', dt_nasc = '$Dtnasc', rua = '$Ende', numero = '$Num', bairro = '$Bairro', 
cidade = '$Cidade', raio_atendimento = '$Raio', estado  = '$Estado', cep = $Cep  WHERE id_entregador = $id_entregador";

$resultado=mysqli_query(GetMysql(),$sql);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>