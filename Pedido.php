<?php 
session_start();
//inicia uma nova sessão ou resume uma sessão existente
?>
<!DOCTYPE html>
<html>
    <body onload="ActiveBTN()">
    <?php include('Header.php'); 
        //Puxando o header pelo php
    ?>
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Faça seu pedido!</h2>
    </div>

    <form class="row  text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\CadEntregador.php" method="post" name="form_entregadores">    
    
        <div class="col-12 text-center">
            <label>Endereço de retirada:</label><br><input class="w-50" type="text" placeholder="Endereço Completo" value="" name="Endereco_Retirada"> <br> <br>
            <label>Endereço de entrega:</label> <br>
            <select class="form-select w-50" style="width: 53%;" aria-label="Default select example">
            <option value="1">Teste</option> 
            </select> <br> <br>
            <label>Forma de Pagamento:</label> <br>
            <select class="form-select w-50" style="width: 53%;" aria-label="Default select example">
                <option value="1">Cartão</option>
            </select>
        </div>
        <br><br>
        <div class="col-12 text-center mt-4">
            <button class="btn btn-outline-secondary" type="submit" name="btn_salvar" formaction="PHP\CadEntregador.php">Pedir</button>
        </div>
    </form>
    

    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

