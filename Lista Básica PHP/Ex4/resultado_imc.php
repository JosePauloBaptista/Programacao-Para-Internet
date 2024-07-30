<?php
    if((isset($_GET["nome"])) && (isset($_GET["idade"])) && (isset($_GET["peso"])) && (isset($_GET["altura"]))){
        $a = $_GET["nome"];
        $b = $_GET["idade"];
        $c = $_GET["peso"];
        $d = $_GET["altura"];
        echo "Nome: ". $a ."<br>";
        echo "Idade: ". $b ." anos <br>";
        echo "Peso: ". $c ." Kg <br>";
        echo "Altura: ". $d ." m <br>";
        echo "IMC: ". $c/($d*$d);
    }

?>