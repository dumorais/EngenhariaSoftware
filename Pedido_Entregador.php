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
    
        <div class="col-12 d-flex flex-wrap" style="margin-left: 11% !important;">
            <?php while($ped=mysqli_fetch_array($pedidos)){    ?>
            <div class="col-3 rounded w-25 text-center pb-2 shadow-lg p-3 mb-5 bg-white mx-2">
            <form action="PHP/AceitaPedido.php" method="post">
            <h5>Pedido #<?= $ped['id_pedido'] ?></h5><br>
            <input type="text" value="<?= $ped['id_pedido'] ?>" style="display:none;" name="id_pedido">
            <label class="w-50 text-left">R$<?= $ped['valor'] ?>,00</label><label class="w-50 text-right"><?= $ped['emitido'] ?></label><br>
            <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="<?= $ped['endereco_retirada'] ?>" name="Endereco_Retirada" readonly><br> <br>
            <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="<?= $ped['rua'] ?>, <?= $ped['numero'] ?> - <?= $ped['bairro'] ?>" name="Endereco_Entrega" readonly><br> <br>
                <button id="BTN_Aceitar" class="btn btn-outline-success" type="submit" name="btn_pedido">Aceitar</button>
                <button id="BTN_Recusar" class="btn btn-outline-danger" type="button" name="btn_pedido"  data-toggle="modal" data-target="#editModalPedidoEntregador">Recusar</button>
            <form>
            </div>
            <?php } ?>
        </div>

        <!-- Modal -->
    <div class="modal fade" id="editModalPedidoEntregador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pedido</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
                <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
                <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
                <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
                <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
                <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-secondary" type="submit">Salvar</button>
            </div>
        </div>
        </div>
    </div>
    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

