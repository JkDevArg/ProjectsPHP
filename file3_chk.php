<!DOCTYPE html>
<html>
<head>
    <title>Sistema Rentado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php

        $rentarAuto = 30; // Valor de la renta del auto por día
        $CobroKm = '0.40'; // Valor de lo que se cobra por km si supera los 2000km
        $totalRec = 2000; // valor que debe superar para cobrar el valor de CobroKm
        $CobroKm2 = 1.0; // Valor oficial del cobro original si no llega al valor de totalRec
        $dias = $_GET['dias']; // Días que se uso el auto
        $totalP; // Total del pago
        $km_hechos = $_GET['km_hechos']; //Obtenemos los km_hechos desde el formulario
        $nombre = $_GET['nombre']; //Obtenemos el nombre desde el formulario
        $moneda = 'soles'; //El peso(?)

        /*
        Una compañía renta autos requiere de una aplicación que le permita calcular el monto a pagar por el alquiler de sus vehículos. Para ello tiene la siguiente regla, el costo de alquiler por día de cada auto es $30. Además, la compañía cobra $0.40 por kilómetro recorrido sólo si su recorrido total supera los 2000 kilómetros (se cobra solo lo excedido).
        Los datos de entrada del sistema será el número de días de alquiler y la cantidad de kilómetros recorridos por el cliente, el sistema debe de mostrar como resultado el monto a pagar por el alquiler.
        */

           if($km_hechos > $totalRec){ //Verificamos que los km_hechos sean mayor que $totalRec que es 2000km.
                $CalcDR = $rentarAuto * $dias; //Multiplica la renta de los autos con los días que han usado el auto.
                $CalcCD = $CobroKm * $km_hechos; //Multiplica el CobroKm = 0.40 por los KmHechos brindado por el cliente.
                $totalP = $CalcCD + $CalcDR; //Hacemos la suma de ambos resultados.
                echo 'Bienvenid@ '.$nombre.' aqui tienes la factura y la información que nos ha proporcionado.'; //Llamamos la variable $nombre que nos hace traer el dato desde el formulario.
                echo '<br /><hr> Días de uso: <b>'.$dias;
                echo '</b><br />Precio Renta: <b><span class="badge badge-pill badge-success">'.$rentarAuto.' '.$moneda.'</span>'; //Mostramos el precio de rentarAuto junto con la variable $moneda.
                echo '</b><br />Kilometros hechos: <b>'.$km_hechos; //Mostramos el los km hechos desde la variable traida desde el formulario que proporciona el cliente.
                echo '</b><br />Como ha superado los <b>2000km</b> se establece el valor de: <b><span class="badge badge-pill badge-success">'.$CobroKm.' '.$moneda.'</span></b> por km'; //Brindamos información al cliente que ha superado los 2000km
                echo '<br />Multiplicamos la renta del auto por los días usados, serian: <b><span class="badge badge-pill badge-success">'.$CalcDR.' '.$moneda.'</b></span>'; //Le decimos el resultado de la multiplicación de Días y Renta con la variable $moneda al final.
                echo '</b><br />Multiplicamos el Cobro por Km por los Km hechos, serian: <b><span class="badge badge-pill badge-success">'.$CalcCD.' '.$moneda.'</b></span>'; //Lo mismo que arriba pero ahora solo muestra el resultado del Cobro por Km y los Kms realizados, con la varable $moneda al final.
                echo '</b><br />Ahora Sumamos ambos resultados para tener el resultado final, seria: <b><span class="badge badge-pill badge-success">'.$totalP.' '.$moneda.'</b></span>';
            }else{
                $CalcDR = $rentarAuto * $dias; //Multiplica la renta de los autos con los días que han usado el auto.
                $CalcCD = $CobroKm2 * $km_hechos; //Multiplica el CobroKm = 0.40 por los KmHechos brindado por el cliente.
                $totalP = $CalcCD + $CalcDR; //Hacemos la suma de ambos resultados.
                echo 'Bienvenid@ '.$nombre.' aqui tienes la factura y la información que nos ha proporcionado.';
                echo '<br /><hr>';
                echo 'Días de uso: <b>'.$dias;
                echo '</b><br />Precio Renta: <b><span class="badge badge-pill badge-success">'.$rentarAuto.' '.$moneda.'</span>';
                echo '</b><br />Kilometros hechos: <b>'.$km_hechos;
                echo '</b><br />Como no ha superado los <b>2000km</b> se establece el valor de: <b><span class="badge badge-pill badge-success">'.$CobroKm2.' '.$moneda.'</b></span> por km'; //Cprrespondiente a lo anterior se establece el valor si no ha llegado a los 2000km con el valor $moneda al final.
                echo '<br />Multiplicamos la renta del auto por los días usados, serian: <b><span class="badge badge-pill badge-success">'.$CalcDR.' '.$moneda.'</b></span>';
                echo '</b><br />Multiplicamos el Cobro por Km por los Km hechos, serian: <b><span class="badge badge-pill badge-success">'.$CalcCD.' '.$moneda.'</b></span>';
                echo '</b><br />Ahora Sumamos ambos resultados para tener el resultado final, seria: <b><span class="badge badge-pill badge-success">'.$totalP.' '.$moneda.'</b></span>';
        }
        ?>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
