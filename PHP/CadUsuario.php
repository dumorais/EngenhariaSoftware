<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
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

$sql = "INSERT INTO cliente (nome, email, cpf, dt_nasc, senha, telefone) VALUES ('$Nome', '$Email', '$CPF', '$Dtnasc', '$Senha', '$Tel')";

$resultado=mysqli_query(GetMysql(),$sql);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>