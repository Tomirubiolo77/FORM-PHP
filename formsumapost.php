<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Suma de 2 numeros</h2>
    <form action="" method="post">
        <label for="num1">Ingrese el primer numero:</label> <br>
        <input type="number" name="num1" id="num1"> <br>
        <label for="num2">Ingrese el segundo numero:</label> <br>
        <input type="number" name="num2" id="num2"> <br>
        <input type="submit" value="Sumar">
    </form>
    <?php
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $suma = $num1 + $num2;
            echo "El resultado de sumar $num1 y $num2 es: $suma";
        }
    ?>
</body>
</html>