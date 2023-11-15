<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Control de Doctores</h1>

        <form action="" method="post">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre">

            <label for="">Genero</label><br>
            <input type="radio" name="genero" value="Masculino"> Masculino

            <input type="radio" name="genero" value="Femenino"> Femenino

            <br>
            <label for="">Edad</label>
            <input type="number" class="form-control" name="edad">

            <label for="">Direccion</label>
            <input type="text" class="form-control" name="direccion">

            <label for="">Telefono</label>
            <input type="text" class="form-control" name="telefono">

            <label for="">Correo</label>
            <input type="text" class="form-control" name="correo">

            <label for="">Especialidad</label>
            <select name="especialidad" id="" class="form-control">
                <option value="General">General</option>
                <option value="Nutricionista">Nutricionista</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Psiquiatria">Psiquiatria</option>
            </select>

            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo">

            <label for="">JVPM</label>
            <input type="text" class="form-control" name="jvpm">

            <input type="submit" class="btn btn-success mt-3" value="Enviar Datos">
        </form>

        <?php
            require "./clases/Doctores.php";
            //evaluando todos los campos del formulario que no esten vacios
            if(isset($_POST['nombre'],$_POST['genero'],$_POST['edad'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],$_POST['especialidad'],$_POST['titulo'],$_POST['jvpm'])){

                //$nombre = $_POST['nombre'];

                //instanciamos la clase doctores
                $doctor = new Doctores($_POST['nombre'],$_POST['genero'],$_POST['edad'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],$_POST['especialidad'],$_POST['titulo'],$_POST['jvpm']);

                //imprimimos el metodo que contiene la informacion del doctor
                echo $doctor->obtenerInformacion();
            }
        ?>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>