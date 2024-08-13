<?php
    session_start();
    if (!isset($_SESSION['userid'])){
        header("Location:login.php");
    }
    include_once "da_user.php";
    $user=selectUser($_SESSION['userid']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyHome</title>
</head>
<body>
    <h2>Bem-vindo <?php echo $user['id']." - ".$user['nome'] ?> </h2>
    <div class="menu">
        <a href="sair.php">Sair</a>
    </div>
    <div id="boxmain">
        <h2>Lista Usuários</h2>
        <br>
        <table>
            <tr>
                <td class="cabecalho">id</td>
                <td class="cabecalho">nome</td>
                <td class="cabecalho">email</td>
                <td class="cabecalho">datanascimento</td>
            </tr>

            <?php
                $users = selectAllUsers(PDO::FETCH_ASSOC);
                foreach ($users as $user){
                    ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['nome']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['dtnasc']; ?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
    

</body>
</html>