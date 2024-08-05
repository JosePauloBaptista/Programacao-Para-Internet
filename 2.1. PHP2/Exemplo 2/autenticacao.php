<?php
    if ($_POST['login'] == "admin" && $_POST["passwd"] == "123456") {
        session_start();
        $_SESSION['user_id'] = 10;
        $_SESSION['nome'] = "José";
        header ("Location:home.php");
    } else {
        echo "Login e/ou Senha errados";
    }
?>