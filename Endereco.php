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
        $enderecos = GetEnderecos($_SESSION['id_cliente']);
    ?>
    
    <div class="w-50 mx-auto mb-5">
        <h2 class="text-center w-100">Lista de endereços</h2>
    </div>

    <table class="table table-striped mx-auto w-75">
        <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">Endereço</th>
            <th scope="col">Número</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">CEP</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <?php while($ende=mysqli_fetch_array($enderecos)){    ?>
        <tbody>
            <tr class="text-center">
            <td><?= $ende['rua'] ?></td>
            <td><?= $ende['numero'] ?></td>
            <td><?= $ende['bairro'] ?></td>
            <td><?= $ende['cidade'] ?></td>
            <td><?= $ende['estado'] ?></td>
            <td><?= $ende['cep'] ?></td>
            <td><i class="fa fa-pencil" style="cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#editModalEnderecos"></i></td>
            <td><i class="fa fa-trash" style="cursor: pointer;" aria-hidden="true"></i></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    
    <!-- Modal -->
    <div class="modal fade" id="editModalEnderecos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 70%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleMolLabel">Editar Endereço</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
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

