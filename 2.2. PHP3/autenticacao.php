<?php
    include_once ("da_user.php");

    if ( !isset( $_POST['email']) && !isset($_POST['senha']) ){
        echo "
            <script>
                window.alert('informe login e senha');
                window.location.href='login.html'
            </script>";
            exit();
    }

    $usr=checkUser(!isset($_POST['email']), !isset($_POST['senha']));
    if (count($usr)==0){
        echo "login e senha inválidos";
    } else {
        echo "login e senha ok";
        session_start();
        $usr=$usr[0];
        $_SESSION['userid']=$usr["id"];
        header("Location:myhome.php");
    }

?>