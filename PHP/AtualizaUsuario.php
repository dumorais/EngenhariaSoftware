<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>
<?php
session_start();
$Id_cliente = $_SESSION['id_cliente'];
$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$Dtnasc = $_POST['Dtnasc'];

$sql = "UPDATE cliente set nome = '$Nome', email = '$Email',  dt_nasc = '$Dtnasc', telefone = '$Tel' WHERE id_cliente = $Id_cliente";

$resultado=mysqli_query(GetMysql(),$sql);
$_SESSION['msg'] = "Alterado com sucesso!";
header("Location: ".$_SERVER['HTTP_REFERER']);
?>