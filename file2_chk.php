<!DOCTYPE html>
<html>
<head>
    <title>Tarea 1-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        // SETEAMOS LA ZONA DEL TIEMPO
        date_default_timezone_set("America/Argentina/Buenos_Aires"); //Soy argentino, sorry bro
        setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');

        $precio = 12; //El precio original del boleto
        $descuento = 0; //Dejamos seteado en 0 por si no hay ningún descuento
        $ahorro = 0; //Dejamos seteado 0 por si no se encuentra ningún descuento
        $dia = date("l"); // OBTENEMOS EL DIA PERO EN ENGLISH
        $dia = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        $dia = $dia[date("w")]; // Utilizamos el fin de la variable $dia para decirle que nos muestre en español
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); //Metemos todo los meses en un array para luego llamarlos
        $dianum = date("d"); // Mostramos el día en número

        if(isset($_GET['dia'])){ // Traemos el campo "dia" del formulario name="dia" que esta oculto con el parametro hidden
            if($dia === 'Martes' && $_GET['edad'] <= '25' && $descuento = 25){ // Chequeamos que sea Martes y que la persona tenga menos de 25 años o igual y seteamos el descuento en 25
                $descuento; // La variable descuento ya viene con el descuento seteado = 25 es decir que si es Martes habra 25% de descuento
                $ahorro = ($precio*$descuento)/100; //Calculo matematico con porcentaje se multiplica el precio con el descuento  yse divide al 100
                $final = $precio-$ahorro; //Mostramos el resultado del precio & ahorro
                $oferta="Martes día del estudiante (para menores de 25): descuento del 25%. <br />Valor del boleto: <span class='badge badge-pill badge-success'>" . $final.' soles</span>'; // Muestra el texto si el resultado es "SI"
                }else if($dia === 'Miércoles' && $_GET['edad'] >= '60' && $descuento = 40){ // Chequeamos que sea Miércoles y que la persona tenga mas de 60 años o igual, seteamos el descuento en 40
                    $ahorro = ($precio*$descuento)/100; //Calculo matematico con porcentaje se multiplica el precio con el descuento  yse divide al 100
                    $final = $precio-$ahorro; //Mostramos el resultado del precio & ahorro
                    $oferta="Miércoles día del jubilado: descuento del 40% para mayores de 60 años. <br />Valor del boleto: <span class='badge badge-pill badge-success'>" . $final.' soles</span>'; // Muestra el texto si el resultado es "SI"
                }else if($dia === 'Jueves' && $descuento = 20){ // Chequeamos que sea Jueves y el se setea descuento a %20
                    $ahorro = ($precio*$descuento)/100; //Calculo matematico con porcentaje se multiplica el precio con el descuento  yse divide al 100
                    $final = $precio-$ahorro; //Mostramos el resultado del precio & ahorro
                    $oferta="Jueves día del espectador: 20% de descuento para todas las entradas. <br />Valor del boleto: " . $final.' soles'; // Si es Jueves anuncia esta oferta
            } else {
                $oferta="No tenemos ningún descuento o no calificas para ver los descuentos, si crees que es un error contacta con el administrador. <br />Valor del boleto: <b><span class='badge badge-pill badge-success'>".$precio.' soles</span></b>'; // Si no es ninguno de los días anteriores no habra descuentos
            }
        }
        //MOSTRAMOS EL RESULTADO
        echo $dia.' '.$dianum.' '.$meses[date('n')-1]; //Mostramos el día en palabtras y número, y el mes.
        echo '<br />Hola '.$_GET['nombre'].'<br /><hr>' .$oferta.'<br /><br /> Valor Original: <span class="badge badge-pill badge-success">'.$precio.' soles </span><br /> Ahorro: <span class="badge badge-pill badge-success">'.$ahorro.' soles<span>';
        // $_GET['nombre'] Obtenemos el nombre de la persona
        // $oferta muestra si hay oferta o no.
        // $precio Precio original del boleto
        // $ahorro Muestra el ahorro del boleto en el dia de descuento


        // Tarea Modulo 2 realizada por Joaquin Centurion
        ?>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
