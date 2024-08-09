<?php
    include_once ("da_user.php");

    if (connection() == null){
        echo "Erro de Conexão";
    } else {
        echo "Conexão Ok";
    }

    //Insert user
    echo "Insert <hr><br>";
    insertUser("Pedro", "jose.p2005@gmail", "123456", "2020-10-10");
    echo "<br>";
    //echo "id usr ".insertUser("Pedro", "predo", "1234", "2020-10-10");

    //Select users
    echo "Select all users <hr> <pre>";
    print_r(selectAllUsers());
    echo "</pre>";
    
    //Select user 10
    echo "<br><hr> User 10 <pre>";
    print_r(selectUser(10));
    echo "</pre>";

    //Check login e senha
    echo "<br><hr> Check login e senha";
    print_r()

?>