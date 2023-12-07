<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SISTEMA ACADEMIA KODIGO</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CRaleway:300,300i,400,400i,500,500i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "./modulos/header.php";
         require "./Clases/Estudiantes.php";
         $estudiante = new Estudiante();
         $arreglo_bootcamps = $estudiante->getBootcamps();
         print_r($arreglo_bootcamps);
    ?>
    <main id="main">
        <section class="container">
            <h1>Registro de Estudiantes</h1>
            <form action="" method="POST">
                <label for="">Nombre: </label>
                <input type="text" class="form-control" name="nombre" required>
                <br>
                <label for="">Dirección: </label>
                <input type="text" class="form-control" name="direccion" required>
                <br>
                <label for="">Teléfono: </label>
                <input type="number" class="form-control" name="telefono" required>
                <br>
                <label for="">Carnet: </label>
                <input type="text" class="form-control" name="carnet" required>
                <br>
                <label for="">Correo: </label>
                <input type="text" class="form-control" name="correo" required>
                <br>
                <label for="">Seleccione Bootcamp: </label>
                <select name="bootcamp" class="form-control" id=""></select>
                <option></option>
                <br>
                <label for="">Seleccione Materia: </label>
                <input type="checkbox" >
                <br><br>
                <input type="submit" class="btn btn-dark mt-4" name="enviar" value="Guardar Datos" required>
            </form>
        </section>
    </main>
    <?php include "./modulos/footer.php";  ?>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>