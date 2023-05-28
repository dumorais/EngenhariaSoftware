<?php 
require_once 'PHP/services.php';
session_start();
//inicia uma nova sessão ou resume uma sessão existente
?>
<!DOCTYPE html>
<html>

    <body onload="ActiveBTN()">
    <?php include('Header.php'); 
        //Puxando o header pelo php
    ?>
    
    <div class="w-50 mx-auto mb-4">
        <h2 class="text-center w-100">Pedidos</h2>
    </div>

    <div class="btn-group mx-auto d-table mb-4">
            <button id="pedido_atual" type="button" class="btn btn-dark text-white" onclick="ChangeTab()">Atual</button>
            <button id="pedido_historico" type="button" class="btn btn-light" onclick="ChangeTabHist()">Histórico</button>
    </div>

        <div id="atual" class="rounded w-25 text-center pb-2 shadow-lg p-3 mb-5 bg-white mx-auto">
            <h5>Pedido #0001</h5><br>
            <label class="w-50 text-left">R$10,00</label><label class="w-50 text-right">28/04/2023 12:05</label><br>
            <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
            <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
            <label class="w-auto text-left pl-5" >Status:</label>
            <div class="jumping-dots-loader pr-5">
                <label>Procurando entregador</label>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="hist" class="col-12" style="margin-left: 11% !important; display: none;">
            <div class="col-3 rounded w-25 text-center pb-2 shadow-lg p-3 mb-5 bg-white mx-2">
                <h5>Pedido #0001</h5><br>
                <label class="w-50 text-left">R$10,00</label><label class="w-50 text-right">28/04/2023 12:05</label><br>
                <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
                <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
                <label>Status:</label>&nbsp;<label>Finalizado</label>
            </div>
            <div class="col-3 rounded w-25 text-center pb-2 shadow-lg p-3 mb-5 bg-white mx-2">
                <h5>Pedido #0001</h5><br>
                <label class="w-50 text-left">R$10,00</label><label class="w-50 text-right">28/04/2023 12:05</label><br>
                <label>Endereço de retirada:</label><br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Retirada" readonly><br> <br>
                <label>Endereço de entrega:</label> <br><input class="w-100" type="text" placeholder="" value="" name="Endereco_Entrega" readonly><br> <br>
                <label>Status:</label>&nbsp;<label>Finalizado</label>
            </div>
        </div>
    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

