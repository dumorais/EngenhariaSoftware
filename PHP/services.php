<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php  
    function GetEnderecos($id_cliente){
        $sql = "SELECT * FROM `endereco` WHERE id_cliente = $id_cliente ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }


?>