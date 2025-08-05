<!-- Imprime aleatoriamente el nombre de un amigo.
Pista shuffle($amigos).

Aleatoriamente busca dos nombre y una ciudad para generar la siguiente frase: “{amigo aleatorio} se va de viaje con {amigo aleatorio} a la bonita ciudad de {ciudad aleatoria}  -->

<html>
    <head>
        <title>Calculador</title>
        <link rel="stylesheet" href="../estilo.css">  
    </head>
    <body>
        <div class="container">
            <h1>Viaje de Amigos</h1>
            
            <form method="POST" action="">
    
                <input type="submit" name="generar" value="verificar viaje">
                
                <?php
                $amigos = ["Ana", "Carlos", "María", "Javier", "Sofía", "Diego", "Lucía", "Pablo"];
                $ciudades = ["París", "Madrid", "Barcelona", "Roma", "Londres", "Berlín", "Amsterdam", "Viena"];
            
                if (isset($_POST['generar'])) { 
                    
                    shuffle($amigos);
                    shuffle($ciudades);
                    
                    $primerAmigo = $amigos[0];
                    $segundoAmigo = $amigos[1];
                    $ciudad = $ciudades[0];
                    
                    echo "<div class='resultado'>";
                    echo "$primerAmigo se va de viaje con $segundoAmigo a la bonita ciudad de $ciudad.";
                    echo "</div>";
                }
                ?>
            

            </form>
            
            <?php
           
            ?>
        </div>
    </body>
</html>