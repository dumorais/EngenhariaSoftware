<?php 
session_start();
include('PHP/services.php'); 
?>
<!DOCTYPE html>
<html>
    <body onload="ActiveBTN()">
    <?php 
        include('Header.php'); 
        $enderecos = GetEnderecos($_SESSION['id_cliente']);
        $pagamentos = GetPagamentos();
    ?>
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Faça seu pedido!</h2>
    </div>

    <form class="row  text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\pedido.php" method="post" name="form_entregadores">    
    
        <div class="col-12 text-center">
            <label>Endereço de retirada:</label><br><input class="w-50" type="text" placeholder="Endereço Completo" value="" name="Endereco_Retirada" onfocusout="ValorRandom()"> <br> <br>
            <label>Endereço de entrega:</label> <br>
            <select name="Endereco_Entrega" class="form-select w-50" style="width: 53%;" aria-label="Default select example" onchange="ValorRandom()">
            <?php while($ende=mysqli_fetch_array($enderecos)){    ?>
            <option value=<?= $ende['id_endereco']?>><?= $ende['rua']?>, <?= $ende['numero']?></option> 
            <?php } ?>
            </select> <br> <br>
            <label>Forma de Pagamento:</label> <br>
            <select name="Pagamento" class="form-select w-50" style="width: 53%;" aria-label="Default select example">
            <?php while($pag=mysqli_fetch_array($pagamentos)){    ?>
                <option value=<?= $pag['id_pagamento']?>><?= $pag['desc']?></option>
            <?php } ?>
            </select><br><br>
            <label>Valor:</label> &nbsp <input type="text" id="valor" style="display: none; width: 14%;" name="Valor" readonly>
        </div>
        <br><br>
        <div class="col-12 text-center mt-4">
            <button class="btn btn-outline-success" type="submit" name="btn_salvar">Pedir</button>
        </div>
    </form>
    

    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

