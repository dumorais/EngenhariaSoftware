<?php
session_start();
//inicia uma nova sessão ou resume uma sessão existente

unset($_SESSION['nome'], $_SESSION['id_cliente'], $_SESSION['id_entregador'], $_SESSION['id_pedido']);
//Destruindo as Sessions Login, Nome e perfil


header("Location: ../Login.php");
//Redirecionando o usuário para a página onde ele estava

?>