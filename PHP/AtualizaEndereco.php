<?php
$conn = new mysqli('localhost', 'root', '', 'endereco');

if($conn === false){
    die("ERROR: Could not connect");
}

$Idcliente = $_POST[????];
$Ende = $_POST['Ende'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];

$sql = "UPDATE endereco SET  rua = '$Ende', numero = '$Numero', bairro = '$Bairro', cidade = '$Cidade', estado = '$Estado', cep = '$Cep' WHERE id_endereco = ????;

mysqli_query($conn, $sql);

mysqli_close($conn);
?>