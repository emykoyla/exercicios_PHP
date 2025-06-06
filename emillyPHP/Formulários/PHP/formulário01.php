<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LALALALLA</h1>

    <?php
        $nro1 = $_GET['nro1'];
        $nro2 = $_GET['nro2'];
        $nro3 = $_GET['nro3'];
        $nro4 = $_GET['nro4'];
        $nro5 = $_GET['nro5'];

        $calcular = $nro1 * $nro2 * $nro3 * $nro4 * $nro5;
        echo"A multiplcação dos 5 números é: $calcular.";
            
        ?>
</body>
</html>