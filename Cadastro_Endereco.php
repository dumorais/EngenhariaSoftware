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
      <div style="width: 40%; margin-left: auto; margin-right: auto;">
        <h2 class="text-center w-100">Cadastro de endereços</h2>
      </div>

      <form class="row col-12 text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\CadEntregador.php" method="post" name="form_entregadores">    
        <div class="col-6 text-center">
          <label>Usuário:</label> <br>
          <select class="form-select" style="width: 53%;" aria-label="Default select example">
            <option value="1">Teste</option>
          </select> <br> <br>
          <label>Endereço:</label><br><input type="text" placeholder="Endereço" value="" name="Ende"><br> <br>
          <label>Número:</label><br><input type="text" placeholder="Numero" value="" name="Numero"><br> <br>
          <label>Bairro:</label><br><input type="text" placeholder="Bairro" value="" name="Bairro"><br> <br>
        </div>

        <div class="col-6 text-center">
          <label>CEP:</label><br><input type="text" placeholder="Telefone" value="" name="Cep" class="cep"><br> <br>
          <label>Estado:</label><br><input type="text" placeholder="Estado" value="" name="Estado"><br> <br>
          <label>Cidade:</label><br><input type="text" placeholder="Cidade" value="" name="Cidade"><br> <br>
        </div>
        <br><br>
        <div class="col-12 text-center">
          <button class="btn btn-outline-secondary" type="submit" name="btn_salvar" formaction="PHP\CadEntregador.php"> Salvar</button>
        </div>
      </form>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>