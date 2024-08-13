<?php
    include_once ("da_user.php");

    if ( !isset( $_POST['email']) || !isset($_POST['senha']) ){
        echo "
            <script>
                window.alert('informe login e senha');
                window.location.href='login.php'
            </script>";
            exit();
    }

    $usr=checkUser($_POST['email'], $_POST['senha']);
    if (count($usr)==0){
        echo "login e/ou senha inválidos";
    } else {
        echo "Sucesso!";
        session_start();
        $_SESSION['userid']=$usr["id"];
        header("Location:myhome.php");
    }

?>