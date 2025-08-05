<!-- 
Actividad 1-1 (Calculando)
Realiza una sencilla calculadora.

Pon en una variable un número.
Pon en otra variable un número.
Suma y muestra el resultado.
Pro:

Realiza otras operaciones (Restar, dividir…).

Actividad 1-2 (Meeting)
Guarda en una variable el nombre de una chica.
Guarda en otra variable el nombre de un chico.
Muestra la frase> “A {chica} le gusta {chico}.”
Por ejemplo: A Sonia le gusta Roberto.

Pro:

Guarda en dos variables un nombre y un año de nacimiento. Muestra la siguiente frase calculando la edad: “Me llamo {nombre} y nací el {año de nacimiento}. Por lo tanto tengo 23.”


Actividad 1-3 (Impuestos)
Guarda un número.
Calcula el IVA de esa cifra.
Muestra la misma cifra con IVA añadido.
Pista: Para calcular el IVA debes aplicar la siguiente formula precio * 1.21.

Pro:

Muestra además la cifra sin iva.
¡Se creativo! Formatea el resultado de forma atractiva.

Actividad 2-1 (Nos vamos de viaje)
Guarda en un array los nombres unos amigos.
Imprime la siguiente frase: “{amigo 1} se va de viaje”.
Crea otro array con el nombre de varias ciudades.
Imprime la siguiente frase: “{amigo 2} se va de viaje a {ciudad 1}”
Pro:

Imprime aleatoriamente el nombre de un amigo.
Pista shuffle($amigos).

Aleatoriamente busca dos nombre y una ciudad para generar la siguiente frase: “{amigo aleatorio} se va de viaje con {amigo aleatorio} a la bonita ciudad de {ciudad aleatoria}. -->



<html>
    <head>
        <title>Calculador</title>
        <link rel="stylesheet" href="../estilo.css">  
    </head>
    <body>
        <div class="container">
            <h1>Calcula el IVA</h1>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="num1">Valor total:</label>
                    <input type="number" id="num1" name="num1" value="" required>
                </div>
                
                
                <input type="submit" name="suma" value="calcular">
                
            </form>
            
            <?php
            if (isset($_POST['num1'])) {
                $num1 = $_POST['num1'];
                $iva = 0.19 * $num1;
                $precioconIva = $num1 * 1.19;
                
                 echo "<div class='resultado'>";
                 echo"el iva es: $iva y el total es: $precioconIva";
                 echo "</div>";           
            }
            ?>
        </div>
    </body>
</html>











