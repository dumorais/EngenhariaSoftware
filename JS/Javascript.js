//var div = '<nav class="navbar navbar-expand-lg navbar-light mb-2" style="background-color: #70007C;"><a class="navbar-brand" href="Entregadores.html" style="color: #E4E460;">Flash Entregas</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNavDropdown"><ul class="navbar-nav" id="nav"><li class="nav-item"><a class="nav-link" href="Entregadores.html">Entregadores <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="Usuarios.html">Usuários</a></li><li class="nav-item"><a class="nav-link" href="Endereco.html">Endereços</a> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastros </a> <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="Cadastro_Entregadores.html">Entregadores</a> <a class="dropdown-item" href="Cadastro_Usuarios.html">Usuários</a> <a class="dropdown-item" href="Cadastro_Endereco.html">Endereços</a> </div> </li> </li> <li><a class="mr-2 position-absolute" style="right: 0 !important;" href="Pedido_Entregador.html"><button type="button" class="btn btn-outline-light"><i class="fa fa-history" aria-hidden="true"></i></button></a></li> <li><a class="mr-2 position-absolute" style="right: 44px !important;" href="Pedido.html"><button type="button" class="btn btn-outline-light"><i class="fa fa-motorcycle" aria-hidden="true"></i></button></a></li></ul></div></nav>';
//const element = document.getElementById("header-nav");
//element.innerHTML = div;



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
    }else if(document.getElementById("navbarDropdownMenuLink") != null){ 
        document.getElementById("navbarDropdownMenuLink").className = document.getElementById("navbarDropdownMenuLink").className + " text-white";
    }
    for(var i = 0; i <= lenght; i++){
        if(Items[i].getAttribute("href") != '#'){
            if(Items[i].getAttribute("href") == window.location.href.split("/").pop()){
                Items[i].className = Items[i].className + " ActiveBtn";
                console.log(Items[i]);
            }
            else{
                Items[i].className = "nav-link text-white";
            }
        }
    }
    

}

$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });

function VisualBTN(){
    $("#BTN_Aceitar" ).hide();
    $("#BTN_Recusar" ).hide();
    $("#BTN_Visualizar" ).show();
}


function Fade(){
    $('#fade2').fadeOut();
    setTimeout(() => {
        $('#fade').fadeIn();
    }, 1000);
    
}

function VoltarLogin(){
    $('#fade').fadeOut();
    setTimeout(() => {
        $('#fade2').fadeIn();
    }, 1000);
    
}

function CadUser(){
    $('#fade').fadeOut();
    setTimeout(() => {
        $('#formUser').fadeIn();
    }, 1000);
    
}

function CadEntr(){
    $('#fade').fadeOut();
    setTimeout(() => {
        $('#formEntr').fadeIn();
    }, 1000);
    
}

function VoltarEntr(){
    $('#formEntr').fadeOut();
    setTimeout(() => {
        $('#fade').fadeIn();
    }, 1000);
    
}
function VoltarUser(){
    $('#formUser').fadeOut();
    setTimeout(() => {
        $('#fade').fadeIn();
    }, 1000);
    
}

function ChangeTabHist(){
    var elem = document.getElementById("pedido_historico");
    elem.className = "btn btn-dark text-white atual_hist";
    var elem2 = document.getElementById("pedido_atual");
    elem2.className = "btn btn-light atual_hist";
    $('#atual').fadeOut();
    setTimeout(() => {
        $('#hist').fadeIn();
        console.log("aaaaaaa");
    }, 1000);
    setTimeout(() => {
        document.getElementById("hist").className = "col-12 d-flex flex-wrap";
    }, 1000);
}

function ChangeTab(){
    var elem = document.getElementById("pedido_atual");
    elem.className = "btn btn-dark text-white atual_hist";
    var elem2 = document.getElementById("pedido_historico");
    elem2.className = "btn btn-light atual_hist";
    $('#hist').fadeOut();

    setTimeout(() => {
        document.getElementById("hist").className = "col-12";
    }, 390);
    
    setTimeout(() => {
        $('#atual').fadeIn();
    }, 1000);
 
    
    
}

function Finalizar(){
    $.post( "PHP/FinalizarPedido.php", function(){
        console.log("teste")
    });
}

function GetEndereco(id_endereco){
    document.getElementById("Ende").value = document.getElementById("rua-" + id_endereco).innerHTML;
    document.getElementById("Bairro").value = document.getElementById("bairro-" + id_endereco).innerHTML;
    document.getElementById("Numero").value = document.getElementById("numero-" + id_endereco).innerHTML;
    document.getElementById("Estado").value = document.getElementById("estado-" + id_endereco).innerHTML;
    document.getElementById("Cidade").value = document.getElementById("cidade-" + id_endereco).innerHTML;
    document.getElementById("Cep").value = document.getElementById("cep-" + id_endereco).innerHTML;
    document.getElementById("id_endereco").value = id_endereco;
    console.log("teste");
}

function ValorRandom(){
    var valor = Math.floor(Math.random() * 20);
    valor += 10;
    document.getElementById("valor").value = "R$" + valor + ",00";
    $("#valor" ).show();
}

function DeleteEndereco(id_endereco){
    if (confirm("Tem certeza que deseja apagar?") == true) {
        $.ajax({
            method: "POST",
            url: "PHP/DeleteEndereco.php",
            data: { id_endereco: $("#id-" + id_endereco).text() }
        })
        location.reload();
    } else {

    }

}

function RecusarPedido(id_pedido){
    $("#id-" + id_pedido ).hide();
}