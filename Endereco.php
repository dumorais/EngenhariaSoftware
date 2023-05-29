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
            <td id="rua-<?=$ende['id_endereco']?>"><?= $ende['rua'] ?></td>
            <td id="numero-<?=$ende['id_endereco']?>"><?= $ende['numero'] ?></td>
            <td id="bairro-<?=$ende['id_endereco']?>"><?= $ende['bairro'] ?></td>
            <td id="cidade-<?=$ende['id_endereco']?>"><?= $ende['cidade'] ?></td>
            <td id="estado-<?=$ende['id_endereco']?>"><?= $ende['estado'] ?></td>
            <td id="cep-<?=$ende['id_endereco']?>"><?= $ende['cep'] ?></td>
            <td><i class="fa fa-pencil" style="cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#editModalEnderecos" onclick="GetEndereco(<?=$ende['id_endereco']?>)"></i></td>
            <td><i class="fa fa-trash" style="cursor: pointer;" aria-hidden="true" onclick="DeleteEndereco(<?=$ende['id_endereco']?>)"></i></td>
            <td id="id-<?=$ende['id_endereco']?>" style="display: none;"><?=$ende['id_endereco']?></td>
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
                <form class="row col-12 text-center mx-auto border border-dark rounded w-50 pt-2 pb-2 mt-4" action="PHP\AtualizaEndereco.php" method="post" name="form_entregadores">    
                    <div class="col-6 text-center">
                        <input type="text" id="id_endereco" name="id_endereco" style="display:none;">
                        <label>Endereço:</label><br><input id="Ende" type="text" placeholder="Endereço" value="" name="Ende"><br> <br>
                        <label>Número:</label><br><input id="Numero" type="text" placeholder="Numero" value="" name="Numero"><br> <br>
                        <label>Bairro:</label><br><input id="Bairro" type="text" placeholder="Bairro" value="" name="Bairro"><br> <br>
                    </div>
            
                    <div class="col-6 text-center">
                        <label>CEP:</label><br><input id="Cep" type="text" placeholder="Telefone" value="" name="Cep" class="cep"><br> <br>
                        <label>Estado:</label><br><input id="Estado" type="text" placeholder="Estado" value="" name="Estado"><br> <br>
                        <label>Cidade:</label><br><input id="Cidade" type="text" placeholder="Cidade" value="" name="Cidade"><br> <br>
                    </div>
                    <br><br>
                    <div class="text-center mx-auto">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        <button class="btn btn-outline-success" type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>

</html>

