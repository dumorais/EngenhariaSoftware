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
        $pedidos = GetPedidosAceito($_SESSION['id_pedido']);
    ?>

    <!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <?php while($ped=mysqli_fetch_array($pedidos)){    ?>
                <h2><strong>Siga os passos para finalizar o pedido!</strong></h2>
                <p>Pedido #<?= $ped['id_pedido'] ?></p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar" style="margin-left: 13%;">
                                <li class="active" id="account"><strong>Busca</strong></li>
                                <li id="personal"><strong>Entrega</strong></li>
                                <li id="payment"><strong>Finalizar</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Endereço de Busca</h2>
                                    <input value="<?= $ped['endereco_retirada'] ?>" type="text" name="ende_busca" placeholder="" readonly/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Entregar" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Endereço de Entrega</h2>
                                    <input value="<?= $ped['rua'] ?>, <?= $ped['numero'] ?> - <?= $ped['bairro'] ?>" type="text" name="ende_entrega" placeholder="" readonly/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Finalizar" onclick="Finalizar()"/>
                            </fieldset>
                            <?php } ?>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Successo!</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Entrega Finalizada!</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript" src="JS/Javascript.js"></script>

</html>