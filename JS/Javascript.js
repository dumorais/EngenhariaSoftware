var div = '<nav class="navbar navbar-expand-lg navbar-light mb-2" style="background-color: #70007C;"><a class="navbar-brand" href="Entregadores.html" style="color: #E4E460;">Flash Entregas</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNavDropdown"><ul class="navbar-nav" id="nav"><li class="nav-item"><a class="nav-link" href="Entregadores.html">Entregadores <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="Usuarios.html">Usuários</a></li><li class="nav-item"><a class="nav-link" href="Endereco.html">Endereços</a> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastros </a> <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="Cadastro_Entregadores.html">Entregadores</a> <a class="dropdown-item" href="Cadastro_Usuarios.html">Usuários</a> <a class="dropdown-item" href="Cadastro_Endereco.html">Endereços</a> </div> </li> </li> <li><a class="mr-2 position-absolute" style="right: 0 !important;" href="Pedido_Entregador.html"><button type="button" class="btn btn-outline-light">Pedidos</button></a></li> <li><a class="mr-2 position-absolute" style="right: 0 !important;" href="Pedido.html"><button type="button" class="btn btn-outline-light">Pedido</button></a></li></ul></div></nav>';
const element = document.getElementById("header-nav");
element.innerHTML = div;



$(document).ready(function(){
    $('.cpf').mask('000.000.000-00');
    $('.tel').mask('(00) 00000-0000');
    $('.cep').mask('00000-000');
});

function ActiveBTN(){
    var Items = document.getElementsByClassName("nav-link");
    var lenght = Items.length;
    if(window.location.href.split("/").pop().match(/Cadastro.*/)){
        document.getElementById("navbarDropdownMenuLink").className = document.getElementById("navbarDropdownMenuLink").className + " ActiveBtn";
    }else{ 
        document.getElementById("navbarDropdownMenuLink").className = document.getElementById("navbarDropdownMenuLink").className + " text-white";
    }
    for(var i = 0; i < lenght-1; i++){
        if(Items[i].getAttribute("href") == window.location.href.split("/").pop()){
            Items[i].className = Items[i].className + " ActiveBtn";
            console.log(Items[i]);
        }
        else{
            Items[i].className = "nav-link text-white";
        }
    }
    

}