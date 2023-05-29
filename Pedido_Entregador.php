<?php 
require_once 'PHP/services.php';
session_start();
//inicia uma nova sessão ou resume uma sessão existente
?>
<!DOCTYPE html>
<html>
    <body onload="ActiveBTN()">
    <?php 
        include('Header.php'); 
        $pedidos = GetPedidoAndamentoEntregador();
    ?>
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Pedidos recebidos</h2>
    </div>
    
        <div class="d-flex flex-wrap" style="margin-left: 11% !important;">
            <?php while($ped=mysqli_fetch_array($pedidos)){    ?>
            <div id="id-<?= $ped['id_pedido'] ?>" class="col-3 rounded w-25 text-center pb-2 shadow-lg p-3 mb-5 bg-white mx-2">
            <form action="PHP/AceitaPedido.php" method="post">
            <h5>Pedido #<?= $ped['id_pedido'] ?></h5><br>
            <input type="text" value="<?= $ped['id_pedido'] ?>" style="display:none;" name="id_pedido">
            <label class="w-50 text-left">R$<?= $ped['valor'] ?>,00</label><label class="w-50 text-right"><?= $ped['emitido'] ?></label><br>
            <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="<?= $ped['endereco_retirada'] ?>" name="Endereco_Retirada" readonly><br> <br>
            <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="<?= $ped['rua'] ?>, <?= $ped['numero'] ?> - <?= $ped['bairro'] ?>" name="Endereco_Entrega" readonly><br> <br>
                <button id="BTN_Aceitar" class="btn btn-outline-success" type="submit" name="btn_pedido">Aceitar</button>
                <button id="BTN_Recusar" class="btn btn-outline-danger" type="button" name="btn_pedido"  onclick="RecusarPedido(<?= $ped['id_pedido'] ?>)">Recusar</button>
            <form>
            </div>
            <?php } ?>
        </div>
    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

