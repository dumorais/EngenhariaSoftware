<?php



function GetMysql(){
    //function para conectar com o banco de dados
    $conexao = mysqli_connect("localhost","root","","flash_entregas")
    or die ("sem conexão");
    //Fazendo a conexão com o banco de dados

    mysqli_set_charset($conexao,"utf8");
    //Setando o charset para utf8
    return $conexao;
    //retornando a conexão
}

?>