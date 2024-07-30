<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="mes">Mês</label>
        <input type="number" name="mes" id="mes">
        <input type="submit" value="Descobrir Mês">
    </form>
    <br>

    <?php 
        if(!isset($_GET["mes"]) && $_GET["mes"]>0 && $_GET["mes"]<=12 ){
            exit;
        }
        $mes = intval($_GET["mes"]);

        $meses = [1=>"Janeiro", 2=>"Fevereiro", 3=>"Março", 4=>"Abril", 5=>"Maio", 6=>"Junho", 7=>"Julho", 8=>"Agosto", 9=>"Setembro", 10=>"Outubro", 11=>"Novembro", 12=>"Dezembro"];
        echo $meses[$mes];

    ?>
</body>
</html>