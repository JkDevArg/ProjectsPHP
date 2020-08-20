<html>
<head>
    <title>Sistema Renta Auto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Por favor rellena el formulario</h2>
        <form method='GET' action="file3_chk.php"> <!-- Llamaremos al archivo file3_chk.php para tener el resultado final -->
            <p>Nombre: <input class="form-control form-control-lg" type="text" name="nombre"></p>
            <p>Kilometros hechos:<input class="form-control form-control-lg" type="number" name="km_hechos"></p>
            <p>Días: <input class="form-control form-control-lg" type="number" name="dias" size="10"></p>
            <input class="btn btn-primary mb-2" type="submit" value="Factura"/>
        </form>
    </div>
</body>
</html>
