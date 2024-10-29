<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <h2>Operaciones con dos números</h2>
    
    <form action="" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Realizar">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $suma = $num1 + $num2;  
        $resta = $num1 - $num2;  
        $multipli = $num1 * $num2; 
        $division = $num1 / $num2; 
        echo "Los numeros ingresados son $num1 y $num2 <br>";
        echo "Resultado de la suma: $suma <br>";
        echo "Resultado de la resta: $resta <br>";
        echo "Resultado de la multiplicacion: $multipli <br>";
        echo "Resultado de la division: $division <br>";
    }
    ?>
</body>
</html>
