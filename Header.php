<html>
<header>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Css\Style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bs-stepper.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</header>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light mb-2" style="background-color: #70007C;">
    <a class="navbar-brand" href="Entregadores.html" style="color: #E4E460;">Flash Entregas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" id="nav">
                <?php if(isset($_SESSION['id_entregador'])){?>
                    <li class="nav-item"><a class="nav-link" href="Entregadores.php">Dados Pessoais <span class="sr-only">(current)</span></a></li>
                <?php } ?>
                <?php if(isset($_SESSION['id_cliente'])){?>
                    <li class="nav-item"><a class="nav-link" href="Usuarios.php">Dados Pessoais</a></li>
                    <li class="nav-item"><a class="nav-link" href="Endereco.php">Endereços</a> 
                <?php } ?>
                <?php if(isset($_SESSION['id_cliente'])){?>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastros </a> 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                        <a class="dropdown-item" href="Cadastro_Endereco.php">Endereços</a> 
                    </div> </li> </li> 
                <?php } ?>
                <?php 
                if(isset($_SESSION['id_entregador'])){?>
                    <li><a class="mr-2 position-absolute" style="right: 80px !important;" href="Pedido_Entregador.php"><button type="button" class="btn btn-outline-light"><i class="fa fa-history" aria-hidden="true"></i></button></a></li> 
                <?php } ?>
                <?php 
                if(isset($_SESSION['id_cliente'])){?>
                    <li><a class="mr-2 position-absolute" style="right: 80px !important;" href="Detalhes_Pedido.php"><button type="button" class="btn btn-outline-light"><i class="fa fa-history" aria-hidden="true"></i></button></a></li> 
                <?php } ?>
                <?php 
                if(isset($_SESSION['id_cliente'])){ ?>
                    <li><a class="mr-2 position-absolute" style="right: 125px !important;" href="Pedido.php"><button type="button" class="btn btn-outline-light"><i class="fa fa-motorcycle" aria-hidden="true"></i></button></a></li>
                <?php } ?>
                <form action="PHP/logout.php"><li><button style="right: 0px !important;"  type="submit" class="btn btn-outline-light mr-2 position-absolute">Logout</button></li></form>
            </ul>
            <?php 
                if(isset($_SESSION['id_cliente'])){
                    if(isset($_SESSION['nome'])){
                        echo " <div class='text-white position-absolute' style='right: 195px !important;'> Olá, " . $_SESSION['nome'] . " </div> ";
                    } 
                }
                if(isset($_SESSION['id_entregador'])){
                    if(isset($_SESSION['nome'])){
                        echo " <div class='text-white position-absolute' style='right: 147px !important;'> Olá, " . $_SESSION['nome'] . " </div> ";
                    } 
                }
                ?>
        </div>
    </nav>
    </body>

    </html>