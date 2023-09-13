<!DOCTYPE HTML>
<html lang = es>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0"
    </head>
    <body>
        <h1>Pene sin php</h1>
        <h1><?php echo "Pene con php" ?></h1>
    </body>
</html>

<?php
    $nombre = "Marc";
    $dinero = 350;
    $moneda = "$";
    $semana = array(1, 2, 3, 4, 5, 6, 7);
    define ('NOMBRE', 'CARLOS');

    echo "<p>Mi nombre es $nombre, tengo $dinero$moneda, hoy estamos en el $semana[2] dia de la semana</p>";
    echo "<h2>Nombre constante: ".NOMBRE."</h2>";

    $meses = ["Junio", "Julio", "Agosto", "Septiembre"];
    echo $meses[0] . "<br>";
    echo $meses[1] . "<br>";
    echo $meses[2] . "<br>";
    echo count($meses) . " meses en el array";
    echo "<br>";
    $numeros = [22, 75, 10, 44, 90, 99];
    echo $numeros[2] . "<br>";

    if(count($numeros) >= 3){
        sort($numeros);
        echo "<h1>Array de números</h1>";
        foreach ($numeros as $num){
            echo '<li>' .$num. '</li>';
        }
    }
?>

<!DOCTYPE HTML>
<html lang = es>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0"
    </head>
    <body>
        <h1>Meses del año</h1>
        <?php
            foreach ($meses as $mes){
                echo '<li>' .$mes. '</li>';
            }
        ?>
    </body>
</html>
