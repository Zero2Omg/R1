<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operador">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operador = $_POST["operador"];
        $resultado = 0;

        switch ($operador) {
            case "sumar":
                $resultado = $num1 + $num2;
                break;
            case "restar":
                $resultado = $num1 - $num2;
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                break;
            case "dividir":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "Error: No se puede dividir por cero.";
                }
                break;
            default:
                echo "Operador no válido.";
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>