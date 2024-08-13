<?php
    include_once ("da_user.php");

    if (!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['dtnasc'])){
        header("Location:login.php?erro=2");
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dtnasc = $_POST['dtnasc'];

    if (insertUser ($nome, $email, $senha, $dtnasc) >0){
        header("Location:registrar_user.php?ok=1");
    }
?>