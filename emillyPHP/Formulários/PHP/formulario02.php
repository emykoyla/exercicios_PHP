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
        $nro = $_GET['nro'];

        $dobro = $nro * 2;
        $triplo = $nro * 3;
        echo"O dobro do número: $dobro. O triplo do número: $triplo.";
        ?>
</body>
</html>