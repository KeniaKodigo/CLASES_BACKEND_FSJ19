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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php include "./modulos/header.php"; 
    ?>
    
    <main id="main">
        <section class="container">
            <h1>Gestion de Estudiantes Activos</h1>

            <a href="./registrar_estudiante.php" class="btn btn-primary mb-3">Registrar</a>

            <table class="table">
                <thead>
                    <th>Estudiante</th>
                    <th>Carnet</th>
                    <th>Correo</th>
                    <th>Bootcamp</th>
                    <th>Acciones</th>
                </thead>
                <tbody></tbody>
            </table>
        </section>
    </main>
    <?php include "./modulos/footer.php";  ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>