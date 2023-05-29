<?php 
session_start();
//inicia uma nova sessão ou resume uma sessão existente
?>
<!DOCTYPE html>
<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link  rel="stylesheet" href="Css\Style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </header>
    <body style="background-color: #70007C;">
        <section class="" >
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-12 col-lg-12 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-4 text-black" style="min-height: 600px;">
                                        <form action="PHP/login.php" method="Post">
                                            <div class="d-flex align-items-center mb-5 pb-1">
                                                <div class="h-25" style="width: 15%">
                                                    <img src="img/Logo-removebg-preview-teste.png" >
                                                </div>
                                                <div class="w-50" style="width: 20% !important">
                                                    <span class="h1 fw-bold mb-0">Flash Entregas</span>
                                                </div>        
                                            </div>
                                            <div id="fade2">
                                                <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Entre na sua conta!</h5>
                    
                                                <div class="form-outline mb-4 w-50 mx-auto text-center">
                                                    <input name="Login" type="email" id="form2Example17" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form2Example17">Email</label>
                                                </div>
                                            
                                                <div class="form-outline mb-4 w-50 mx-auto text-center">
                                                    <input name="Senha" type="password" id="form2Example27" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form2Example27">Senha</label>
                                                </div>
                                            
                                                <div class="pt-1 mb-4 w-50 mx-auto">
                                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                                </div>
                                                
                                                <div class="pt-1 mb-4 w-50 mx-auto">
                                                    <a class="small text-muted" href="#!">Equeceu a senha?</a>
                                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Não possui conta? <a onclick="Fade()" style="color: #393f81;cursor: pointer;text-decoration: underline;">Faça seu cadastro aqui!</a></p>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="fade" style="display: none;">
                                            <i class="fa fa-arrow-circle-left" style="font-size: 30px; cursor: pointer;color: #70007C;" aria-hidden="true" onclick="VoltarLogin()"></i>
                                            <div class="mx-auto w-50" >
                                                <h2 class="text-center">Qual cadastro deseja fazer?</h2>
                                                <div class="mx-auto w-50">
                                                    <button class="btn btn-warning" onclick="CadUser()">Usuário</button>
                                                    <button class="btn btn-secondary text-center" onclick="CadEntr()">Entregador</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="formUser" style="display: none;">
                                            <i class="fa fa-arrow-circle-left" style="font-size: 30px; cursor: pointer;color: #70007C;" aria-hidden="true" onclick="VoltarUser()"></i>
                                            <form action="PHP/CadUsuario.php"  method="post">
                                                <fieldset class="row col-12 text-center mx-auto w-75 pt-2 pb-2 border border-dark rounded"  name="form_entregadores"> 
                                                    <legend style="font-size:22px; width: 43%;" class="text-left ml-5 pl-4">Cadastro de Usuários</legend>
                                                    <div class="col-6 text-center">
                                                        <label>Nome:</label><br><input type="text" placeholder="Nome Completo" value="" name="Nome"> <br> <br>
                                                        <label>CPF:</label><br><input type="text" placeholder="CPF" value="" name="Cpf" class="cpf"><br> <br>
                                                        <label>Email:</label><br><input type="text" placeholder="Email" value="" name="Email"><br> <br>
                                                    </div>
                                            
                                                    <div class="col-6 text-center">
                                                        <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="" name="Tel" class="tel"><br> <br>
                                                        <label>Data de nascimento:</label><br><input type="date" placeholder="" value="" name="Dtnasc"><br> <br>
                                                        <label>Senha:</label><br><input type="password" placeholder="" value="" name="Senha"><br> <br>
                                                        <label>Confirmar Senha:</label><br><input type="password" placeholder="" value="" name="Confirma _Senha"><br> <br>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-12 text-center">
                                                        <button class="btn btn-outline-success" type="submit" name="btn_salvar"> Salvar</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div id="formEntr" style="display: none;"> 
                                            <i class="fa fa-arrow-circle-left" style="font-size: 30px; cursor: pointer;color: #70007C;" aria-hidden="true" onclick="VoltarEntr()"></i>   
                                            <form action="PHP\CadEntregador.php" method="post">
                                                <fieldset class="row col-12 text-center mx-auto border border-dark rounded w-100 pt-2 pb-2"  name="form_entregadores">  
                                                    <legend style="font-size:22px; width: 37%;" class="text-left ml-5 pl-4">Cadastro de Entregadores</legend>  
                                                    <div class="col-3 text-center">
                                                        <label>Nome:</label><br><input type="text" placeholder="Nome Completo" value="" name="Nome"> <br> <br>
                                                        <label>CPF:</label><br><input type="text" placeholder="CPF" value="" name="Cpf" class="cpf"><br> <br>
                                                        <label>Email:</label><br><input type="text" placeholder="Email" value="" name="Email"><br> <br>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <label>Data de nascimento:</label><br><input type="date" placeholder="" value="" name="Dtnasc"><br> <br>
                                                        <label>Telefone:</label><br><input type="text" placeholder="Telefone" value="" name="Tel" class="tel"><br> <br>
                                                        <label>Raio de atendimento:</label><br><input type="text" placeholder="" value="" name="  Raio"><br> <br>
                                                    </div>
                                            
                                                    <div class="col-3 text-center">
                                                        <label>CEP:</label><br><input type="text" placeholder="Telefone" value="" name="Cep" class="cep"><br> <br>
                                                        <label>Endereço:</label><br><input type="text" placeholder="Endereço" value="" name="Ende"><br> <br>
                                                        <label>Número:</label><br><input type="text" placeholder="Numero" value="" name="Numero"><br> <br>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <label>Bairro:</label><br><input type="text" placeholder="Bairro" value="" name="Bairro"><br> <br>
                                                        <label>Estado:</label><br><input type="text" placeholder="Estado" value="" name="Estado"><br> <br>
                                                        <label>Cidade:</label><br><input type="text" placeholder="Cidade" value="" name="Cidade"><br> <br>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <label>Senha:</label><br><input type="password"  value="" name="Senha"><br> <br>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <label>Confirmar Senha:</label><br><input type="password"  value="" ><br> <br>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-12 text-center">
                                                        <button class="btn btn-outline-success" type="submit" name="btn_salvar"> Salvar</button>
                                                    </div>
                                                </fieldset>
                                            </form> 
                                        </div>
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type = "text/javascript" src="JS/Javascript.js"></script>
</html>



<?php 
        if(isset($_SESSION['msg_login'])){
            echo "<script>alert('" . $_SESSION['msg_login'] . "');</script>";
            unset ($_SESSION['msg_login']);
            //Vendo se a session msg_login existe, se existir mostrar a mensagem e depois apaga ela da session
            echo "<script> AbrirModal() </script>";
            //Puxando a function AbrirModal que faz com que o modal do login abra

        } 

        ?>