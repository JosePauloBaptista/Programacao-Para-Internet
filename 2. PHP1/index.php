<form action="http://localhost/input_imc.php">
    <label for="nome">Nome</label>
    <input id="idvariavelA" type="text" name="nome" value=<?php
    if (isset($_GET["nome"])){
        echo $_GET["nome"];
    }
    ?>>

    <br>
    <label for="idade">Idade</label>
    <input id="idvariavelB" type="text" name="idade" value=<?php
    if (isset($_GET["idade"])){
        echo $_GET["idade"];
    }
    ?>>
    
    <input type="submit" value="Submeter Dados">

</form>
<?php 
    if ((isset($_GET["nome"])) && (isset($_GET["idade"]))){
    $a = $_GET["nome"];
    $b = $_GET["idade"];
    echo "Nome: ". $a;
    echo "<br> Idade: ". $b ." anos";
    }

?>
