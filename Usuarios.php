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
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Lista de usuários</h2>
    </div>

    <table class="table table-striped mx-auto w-75">
        <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
            <tr class="text-center">
            <td>Teste</td>
            <td>teste@teste</td>
            <td>(11)92211-2121</td>
            <td>123.456.789-10</td>
            <td><i class="fa fa-pencil" style="cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#editModalUsuarios"></i></td>
            <td><i class="fa fa-trash" style="cursor: pointer;" aria-hidden="true"></i></td>
            </tr>
        </tbody>
    </table>
    
    <!-- Modal -->
    <div class="modal fade" id="editModalUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 60%;" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
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
                    </div>
            
                    <div class="col-6 text-center">
                        <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="" name="Tel" class="tel"><br> <br>
                        <label>Data de nascimento:</label><br><input type="date" placeholder="" value="" name="Dtnasc"><br> <br>
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
