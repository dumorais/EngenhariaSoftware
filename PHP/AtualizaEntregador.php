<?php
$conn = new mysqli('localhost', 'root', '', 'entregadores');

if($conn === false){
    die("ERROR: Could not connect");
}

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

$sql = "UPDATE entregadores SET nome = '$Nome', email = '$Email', cpf = '$CPF', telefone = '$Tel', dt_nasc = '$Dtnasc', rua = '$Ende', numero = '$Num', bairro = '$Bairro', 
cidade = '$Cidade', raio_atendimento = '$Raio', estado  = '$Estado', cep = $Cep, senha = '$Senha'  WHERE id_entregador = ???";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>