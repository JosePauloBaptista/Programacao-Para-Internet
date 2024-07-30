<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php 
        $num = $_GET['numero'];
        $result = $num % 2;
        if($result == 0){
            $resposta = "Par";
        } else {
            $resposta = "Ímpar";
        }
    ?>
    <br>
    <?php 
        echo "O Número é ". $resposta;
    ?>
</body>
</html>