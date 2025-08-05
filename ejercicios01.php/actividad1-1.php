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


<!-- actividad 1-1 (Calculando) -->


<html>
    <head>
        <title>Calculadora PHP</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        <div class="container">
            <h1>Calculadora Simple</h1>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="num1">Primer número:</label>
                    <input type="number" id="num1" name="num1" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="num2">Segundo número:</label>
                    <input type="number" id="num2" name="num2" value="" required>
                </div>
                
                <input type="submit" name="suma" value="Suma">
                <input type="submit" name="resta" value="restar">
                <input type="submit" name="multiplicacion" value="multiplicar">
                <input type="submit" name="division" value="dividir">
            </form>
            
            <?php
            if (isset($_POST['num1']) && isset($_POST['num2'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                
                
                // Verificar qué botón se presionó
                if (isset($_POST['suma'])) {  // el post  es un array asociativo
                    $resultado = $num1 + $num2;
                    echo "el resultado de la suma es: $resultado";
                    
                } elseif (isset($_POST['resta'])) {
                    $resultado = $num1 - $num2;
                    echo "el resultado de la resta es: $resultado";

                } elseif (isset($_POST['multiplicacion'])) {
                    $resultado = $num1 * $num2;
                    echo "el resultado de la multiplicación es: $resultado";

                } elseif (isset($_POST['division'])) {
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                        echo "el resultado de la división es: $resultado";
                        
                    } else {
                        echo "<div class='resultado error'>";
                        echo "Error: No se puede dividir entre cero";
                        
                    }
                }
            }
            ?>
        </div>
    </body>
</html>











