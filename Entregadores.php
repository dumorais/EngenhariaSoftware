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
        $entregador = GetEntregador($_SESSION['id_entregador']);
    ?>    
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Dados Pessoais</h2>
    </div>

    <form class="row col-12 text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\AtualizaEntregador.php" method="post" name="form_entregadores">    
        <?php while($dados=mysqli_fetch_array($entregador)){    ?>
        <div class="col-6 text-center">
            <label>Nome:</label><br><input type="text" placeholder="Nome Completo" value="<?= $dados['nome'] ?>" name="Nome"> <br> <br>
            <label>CPF:</label><br><input type="text" placeholder="CPF" value="<?= $dados['cpf'] ?>" name="Cpf" class="cpf" readonly><br> <br>
            <label>Email:</label><br><input type="text" placeholder="Email" value="<?= $dados['email'] ?>" name="Email"><br> <br>
            <label>Data de nascimento:</label><br><input type="date" placeholder="" value="<?= $dados['dt_nasc'] ?>" name="Dtnasc"><br> <br>
            <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="<?= $dados['telefone'] ?>" name="Tel" class="tel"><br> <br>
            <label>Raio de atendimento:</label><br><input type="text" placeholder="" value="<?= $dados['raio_atendimento'] ?>" name="Raio"><br> <br>
        </div>

        <div class="col-6 text-center">
            <label>CEP:</label><br><input type="text" placeholder="Telefone" value="<?= $dados['cep'] ?>" name="Cep" class="cep"><br> <br>
            <label>Endereço:</label><br><input type="text" placeholder="Endereço" value="<?= $dados['rua'] ?>" name="Ende"><br> <br>
            <label>Número:</label><br><input type="text" placeholder="Numero" value="<?= $dados['numero'] ?>" name="Numero"><br> <br>
            <label>Bairro:</label><br><input type="text" placeholder="Bairro" value="<?= $dados['bairro'] ?>" name="Bairro"><br> <br>
            <label>Estado:</label><br><input type="text" placeholder="Estado" value="<?= $dados['estado'] ?>" name="Estado"><br> <br>
            <label>Cidade:</label><br><input type="text" placeholder="Cidade" value="<?= $dados['cidade'] ?>" name="Cidade"><br> <br>
        </div>
        <br><br>
        <?php } ?>
        <div class="col-12 text-center">
            <button class="btn btn-outline-success" type="submit" name="btn_salvar" > Alterar</button>
        </div>
    </form>
    
    <!-- Modal -->
    <div class="modal fade" id="editModalEntregadores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Entregador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="row col-12 text-center mx-auto border border-dark rounded w-75 pt-2 pb-2 mt-4" action="PHP\CadEntregador.php" method="post" name="form_entregadores">    
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
                </form>
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

<?php 
if(isset($_SESSION['msg'])){
    echo "<script>alert('" . $_SESSION['msg'] . "');</script>";
    unset ($_SESSION['msg']);

} ?>