<?php
$conn = new mysqli('localhost', 'root', '', 'cliente');

if($conn === false){
    die("ERROR: Could not connect");
}

$Nome = $_POST['Nome'];
$CPF = $_POST['Cpf'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$Dtnasc = $_POST['Dtnasc'];
$Senha = $_POST['Senha'];

$sql = "UPDATE cliente set nome = '$Nome', email = '$Email', cpf = '$Cpf', dt_nasc = '$Dtnasc', senha = '$Senha' WHERE id_cliete = ????";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>