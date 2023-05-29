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
        $cliente = GetCliente($_SESSION['id_cliente']);
    ?>
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Dados pessoais</h2>
    </div>

    <form class="row col-12 text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\AtualizaUsuario.php" method="post" name="form_entregadores">    
        <?php while($dados=mysqli_fetch_array($cliente)){    ?>
        <div class="col-6 text-center">
          <label>Nome:</label><br><input type="text" placeholder="Nome Completo" value="<?= $dados['nome'] ?>" name="Nome"> <br> <br>
          <label>CPF:</label><br><input type="text" placeholder="CPF" value="<?= $dados['cpf'] ?>" name="Cpf" class="cpf" readonly><br> <br>
          <label>Email:</label><br><input type="text" placeholder="Email" value="<?= $dados['email'] ?>" name="Email"><br> <br>
        </div>

        <div class="col-6 text-center">
          <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="<?= $dados['telefone'] ?>" name="Tel" class="tel"><br> <br>
          <label>Data de nascimento:</label><br><input type="date" placeholder="" value="<?= $dados['dt_nasc'] ?>" name="Dtnasc"><br> <br>
        </div>
        <br><br>
        <div class="col-12 text-center">
          <button class="btn btn-outline-success" type="submit" name="btn_salvar" >Alterar</button>
        </div>
        <?php } ?>
      </form>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

