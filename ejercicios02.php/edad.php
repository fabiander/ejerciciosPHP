<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calcular Edad</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <div class="container">
        <h1>Calcular Edad</h1>

        <form method="POST">
            <label for="dia">Día de Nacimiento:</label>
            <input type="number" name="dia" min="1" max="31" required><br><br>
            <label for="mes">Mes de nacimiento:</label>
            <input type="number" name="mes" min="1" max="12" required><br><br>
            <label for="dia">Año de Nacimiento:</label>
            <input type="number" name="anio" min="1900" max="<?php echo date("Y"); ?>" required><br><br>

            <input type="submit" name="calcular" value="Calcular Edad">
        </form>

        <?php
        if (isset($_POST["calcular"])) {
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $anio = $_POST["anio"];

            // Creamos el objeto fecha de nacimiento
            $fechaNacimiento = new DateTime("$anio-$mes-$dia");
            $hoy = new DateTime(); // Fecha actual del sistema

            // Calculamos edad (solo en años)
            $edad = $hoy->diff($fechaNacimiento)->y;


            // Condicionales según edad
            if ($edad < 18) {
                echo "<div class='resultado'>";
                echo "<p>No puedes pasar. Eres menor de edad.</p>";
                echo "</div>";
            } elseif ($edad > 65) {
                echo "<div class='resultado'>";
                echo "<p>Eres demasiado mayor para entrar.</p>";
                echo "</div>";
            } else {
                echo "<div class='resultado'>";
                echo "<p>Puedes pasar. Bienvenido. Tienes $edad años</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>

</html>