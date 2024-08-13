<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="boxmain">
        <form action="cadastrar_novo_usuario.php" method="post">
            <fieldset>
                <label for="nome">Nome</label>
                <input id="nome" type="text" name="nome">

                <label for="email">Email</label>
                <input id="email" type="text" name="email">

                <label for="senha">Senha</label>
                <input id="senha" type="password" name="senha">

                <label for="dtnasc">Data Nascimento</label>
                <input id="dtnasc" type="date" name="dtnasc">

                <input type="submit" value="Cadastrar Novo Usuário">
            </fieldset>
        </form>
        <div class="status">
            <?php
                if (isset($_GET['0'])) { ?>
                    <p class="sucesso"> Cadastro realizado com Sucesso</p>
                    <?php
                }
                ?>
        </div>
    </div>
</body>
</html>