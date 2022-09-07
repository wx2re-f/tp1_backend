<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend</title>
  </head>
  <body>
    <!-- 1. Imprima por pantalla: “Hola mundo”. -->
    <?php
      print "Hola Mundo";

    ?>
    <br><hr>
    <!-- 2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla. -->
    <?php
      $mensaje="Hola mundo";
      echo $mensaje;
     ?>
     <br><hr>
     <!-- 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.
 -->
     <?php
        $naranjas=12;
        $mandarinas=8;
        echo "variables enteras:" . $naranjas ." y ". $mandarinas;
      ?>
      <br><hr>
      <?php
         echo "suma: ".($naranjas+$mandarinas);
       ?>
       <br><hr>
       <?php
          echo "resta: ".($naranjas-$mandarinas);
        ?>
        <br><hr>
        <?php
           echo "multiplicación: ".($naranjas*$mandarinas);
         ?>
         <br><hr>
         <?php
            $div1=(floor($naranjas/$mandarinas));

            echo "división: ".$div1;
          ?>
          <br><hr>
          <?php
             echo "resto: ".($naranjas%$mandarinas);
           ?>
           <br><hr>
<!-- 4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla. -->
<?php
    $temperatura = 20;
              print "<p>Temperatura: $temperatura ºC = " . ($temperatura*(9/5)+32) . " ºF\n</p>";
              print "<p>Para pasar a grados Fahrenheit: [(t °C x 9/5) + 32]\n</p>";
 ?>
<br><hr>
<!-- 5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
 -->

<?php
    $base=18;
    $altura=12;
    echo "rectángulo base=18cm altura=12cm"
 ?>
 <br>
 <?php
    echo "perímetro del rectángulo = ".(($base*2)+($altura*2));
  ?>
<br>
<?php
    echo "área del rectángulo = ".$base*$altura;
 ?>
 <br><hr>
 <!--5 .  b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm. -->

         <?php

        $radio = "30";
        $pi = "3.14";

        $area = (($radio * $radio) * $pi);

        echo "El área del círculo es: $area ";

        ?>


  </body>
</html>
