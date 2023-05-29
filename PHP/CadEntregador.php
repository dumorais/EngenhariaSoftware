<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
<?php

$Nome = $_POST['Nome'];
$CPF = $_POST['Cpf'];
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
$Senha = $_POST['Senha'];

$sql = "INSERT INTO entregador (nome, email, cpf, telefone, dt_nasc, rua, numero, bairro, cidade, estado, cep, raio_atendimento, senha)VALUES ('$Nome', '$Email', '$CPF', '$Tel', '$Dtnasc', '$Ende','$Num', '$Bairro', '$Cidade', '$Estado', '$Cep', '$Raio', '$Senha')";

$resultado=mysqli_query(GetMysql(),$sql);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>