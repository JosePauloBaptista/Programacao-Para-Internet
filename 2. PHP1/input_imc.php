<form action="http://localhost/resultado_imc.php">
    <!-- NOME -->
    <input id="idvariavelA" type="hidden" name="nome" value="<?php
    if (isset($_GET["nome"])){
        echo $_GET["nome"];
    } ?>">
    <label for="nome">Nome: <?php
    if (isset($_GET["nome"])){
        echo $_GET["nome"];
    } ?>
    </label>
    
    <br>
    <!-- IDADE -->
    <input id="idvariavelB" type="hidden" name="idade" value="<?php
    if (isset($_GET["idade"])){
        echo $_GET["idade"];
    } ?>">
    <label for="idade">Idade: <?php
    if (isset($_GET["idade"])){
        echo $_GET["idade"];
    } ?>
    </label>

    <br>
    <!-- PESO -->
    <label for="peso">Peso</label>
    <input id="idvariavelC" type="text" name="peso" value="<?php
    if (isset($_GET["peso"])){
        echo $_GET["peso"];
    }
    ?>">

    <br>
    <!-- ALTURA -->
    <label for="altura">Altura</label>
    <input id="idvariavelD" type="text" name="altura" value="<?php
    if (isset($_GET["altura"])){
        echo $_GET["altura"];
    }
    ?>">
    
    <input type="submit" value="Submeter Dados">
    <br><br>

</form>