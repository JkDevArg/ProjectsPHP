<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
setlocale(LC_ALL,"es_ES");
$fecha_array = getdate(); // Puede recibir un parámetro time()
$dia = date("l"); // OBTENEMOS EL DIA PERO EN ENGLISH
$dia = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); // METEMOS EN ARRAY LSO DIAS EN ESPAÑOL

?>
<html>
<head>
    <title>Sistema Descuento por Día & Edad [PHP] By JkDev</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Hola, Llena los campos para poder saber si hoy hay descuento!</h2>
        <form method='GET' action="file2_chk.php"> <!-- Llamaremos al archivo check_datos.php para que nos de si tenemos descuentos -->

            <p><input class="form-control form-control-lg" type="text" name="dia" value="<?php echo $dia[date("w")]; //PERO ACA LO ENVIAMOS TRADUCIDO?>"hidden></p> <!-- Campo oculto que da la fecha actual del descuento -->
            <p>Tu Nombre: <input class="form-control form-control-lg" type="text" name="nombre" size="20"></p> <!-- Usaremos Nombre para luego usar ese nombre para la variable $_GET['nombre']; -->
            <p>Edad: <input class="form-control form-control-lg" type="number" name="edad" size="10"></p> <!-- Lo mismo que arriba y tambien para setear las edades que podran ver los tipos de descuentos que hay -->
            <input class="btn btn-primary mb-2" type="submit" value="Ofertas"/> <!-- boton para mandar a chequear la edad -->
        </form>
    </div>
</body>
</html>
