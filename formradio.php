<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ingrese el radio</h2>
    <form action="" method="get">
        <label for="radio">Radio</label>
        <input type="number" name="radio" id="radio">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_GET["radio"])) {
            $radio = $_GET["radio"];
            $PI = 3.1416;
            $circunfe = 2 * $PI * $radio;
            $superfi = $PI * $radio ** 2;
            echo "El radio ingresado es $radio <br>";
            echo "La longitud de la circunferencia es:$circunfe <br>";
            echo "La superficie del círculo correspondiente es: $superfi <br>";
        }
    ?>
</body>
</html>