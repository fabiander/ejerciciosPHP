<!-- Actividad 1-2 (Meeting) -->
<html>
    <head>
        <title>Meeting</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        <div class="container">
            <h1>Encuentro</h1>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nombreChica">Nombre de la chica:</label>
                    <input type="text" id="nombreChica" name="nombreChica" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="nombreChico">Nombre del chico:</label>
                    <input type="text" id="nombreChico" name="nombreChico" value="" required>
                </div>
                
                <input type="submit" name="generar" value="Generar Frase">
            </form>
            
            <?php
            if (isset($_POST['nombreChica']) && isset($_POST['nombreChico']) && isset($_POST['generar'])) {
                $nombreChica = $_POST['nombreChica'];
                $nombreChico = $_POST['nombreChico'];
                
                echo "<div class='resultado'>";
                echo "A <strong>$nombreChica</strong> le gusta <strong>$nombreChico</strong>.";
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>
