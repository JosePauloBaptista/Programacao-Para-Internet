<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="valores">
        <input type="submit" value="enviar">
    </form>

    <?php 
        $string = $_GET["valores"];
        $soma = 0;
        $elementos = explode(";", $string);
        foreach($elementos as $item){
            $soma = $soma + $item;
        }
        echo "<p> Soma: $soma </p>";

    ?>
</body>
</html>
