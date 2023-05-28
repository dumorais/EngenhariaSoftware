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
        <h2 class="text-center w-100">Cadastro de entregadores</h2>
      </div>

      <form class="row col-12 text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\CadEntregador.php" method="post" name="form_entregadores">    
        <div class="col-6 text-center">
          <label>Nome:</label><br><input type="text" placeholder="Nome Completo" value="" name="Nome"> <br> <br>
          <label>CPF:</label><br><input type="text" placeholder="CPF" value="" name="Cpf" class="cpf"><br> <br>
          <label>Email:</label><br><input type="text" placeholder="Email" value="" name="Email"><br> <br>
          <label>Data de nascimento:</label><br><input type="date" placeholder="" value="" name="Dtnasc"><br> <br>
          <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="" name="Tel" class="tel"><br> <br>
          <label>Raio de atendimento:</label><br><input type="text" placeholder="" value="" name="  Raio"><br> <br>
        </div>

        <div class="col-6 text-center">
          <label>CEP:</label><br><input type="text" placeholder="Telefone" value="" name="Cep" class="cep"><br> <br>
          <label>Endereço:</label><br><input type="text" placeholder="Endereço" value="" name="Ende"><br> <br>
          <label>Número:</label><br><input type="text" placeholder="Numero" value="" name="Numero"><br> <br>
          <label>Bairro:</label><br><input type="text" placeholder="Bairro" value="" name="Bairro"><br> <br>
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