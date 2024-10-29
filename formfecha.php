<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Seleccione la fecha</h2>
    <form action="" method="get">
        <label for="dia">Ingrese un día del 1 al 31</label>
        <input type="number" name="dia" id="dia" min="1" max="31" required> <br>
        <label for="mes">Seleccione un mes</label>
        <select name="mes" id="mes" required>
            <?php
                $meses = [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ];
                
                foreach ($meses as $mes) {
                    $selected = (isset($_GET['mes']) && $_GET['mes'] == $mes) ? 'selected' : '';
                    echo "<option value=\"$mes\" $selected>$mes</option>";
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Confirmar">
    </form>

    <?php
        if (isset($_GET["dia"]) && isset($_GET["mes"])) {
          $dia = $_GET["dia"];
          $mes = $_GET["mes"];
          if ($dia >=1 && $dia <=31){
            echo "La fecha es $dia de $mes de 2024";
        } else {
            echo "El dia elegido es invalido";
        }
    }
    ?>

</body>
</html>