<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php 
session_start();
//inicia uma nova sessão ou resume uma sessão existente

$Login = $_POST['Login'];
$Senha = $_POST['Senha'];
//Colocando o login e a senha digitados pelo usuário nas variáveis

$sql = "SELECT email, senha, nome, id_cliente FROM cliente WHERE email = '$Login' AND senha = '$Senha'";

$resultado=mysqli_query(GetMysql(),$sql);
//executa uma consulta no banco de dados. O que esta função faz é criar um array que representa a linha do dado retornado do banco de dados. 

$row_usuario = mysqli_fetch_assoc($resultado);
// retorna uma matriz associativa representando a próxima linha no conjunto de resultados representado pelo parâmetro resultado2 , aonde cada chave representa o nome de uma coluna do conjunto de resultados.
$row_cnt = mysqli_num_rows($resultado);
if($row_cnt > 0){
    $_SESSION['nome'] = $row_usuario['nome'];
    $_SESSION['id_cliente'] = $row_usuario['id_cliente'];
    //Se o login for verdadeiro coloca os dados do usuário nas sessions
    header("Location: ../Pedido.php");
}else{
    $sql_entr = "SELECT email, senha, nome, id_entregador FROM entregador WHERE email = '$Login' AND senha = '$Senha'";
    $resultado_entr=mysqli_query(GetMysql(),$sql_entr);
    $row_entregador = mysqli_fetch_assoc($resultado_entr);
    $row_cnt_entr = mysqli_num_rows($resultado_entr);

    if($row_cnt_entr > 0){
        $_SESSION['nome'] = $row_entregador['nome'];
        $_SESSION['id_entregador'] = $row_entregador['id_entregador'];
        header("Location: ../Pedido_Entregador.php");
    }else{
        $_SESSION['msg_login'] = "Login ou senha incorretos!";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}


?>