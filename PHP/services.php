<?php require_once 'conexao.php'; 
//puxando a conexão do banco de dados
?>

<?php  
    function GetEnderecos($id_cliente){
        $sql = "SELECT * FROM `endereco` WHERE id_cliente = $id_cliente ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }
    function GetPagamentos(){
        $sql = "SELECT * FROM `pagamento` WHERE 1 ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }
    function GetPedidoAndamento($id_cliente){
        $sql = "SELECT * FROM `pedido` as p INNER JOIN `endereco` as e on p.id_endereco = e.id_endereco WHERE status <> 'Finalizado' AND p.id_cliente = $id_cliente;";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado; 
    }
    function GetPedidoAndamentoEntregador(){
        $sql = "SELECT * FROM `pedido` as p INNER JOIN `endereco` as e on p.id_endereco = e.id_endereco WHERE status <> 'Finalizado';";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado; 
    }
    function GetPedidosFinalizados($id_cliente){
        $sql = "SELECT * FROM `pedido` as p INNER JOIN `endereco` as e on p.id_endereco = e.id_endereco WHERE status = 'Finalizado' AND p.id_cliente = $id_cliente;";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado; 
    }
    function GetPedidosAceito($id_pedido){
        $sql = "SELECT * FROM `pedido` as p INNER JOIN `endereco` as e on p.id_endereco = e.id_endereco WHERE id_pedido = $id_pedido;";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado; 
    }
    function GetCliente($id_cliente){
        $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id_cliente ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }
    function GetEntregador($id_entregador){
        $sql = "SELECT * FROM `entregador` WHERE id_entregador = $id_entregador ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }
    function GetEnderecoPopup($id_endereco){
        $sql = "SELECT * FROM `endereco` WHERE id_endereco = $id_endereco ";
        $resultado=mysqli_query(GetMysql(), $sql);
        return $resultado;    
    }

?>