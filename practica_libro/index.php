<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- incluyendo el header a la vista -->
    <?php include "./header.php"; ?>
    <h1 class="text-center text-success">Gestion de Libros</h1>

    <!-- 
        GET: obtener informacion
        POST: enviar y obtener informacion
        PUT: actualizar informacion
        DELETE: eliminar informacion => Peticiones
    -->
    <div class="container">
        <form action="" method="POST">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="" name="titulo">

            <label for="">Edicion</label>
            <input type="text" class="form-control" id="" name="edicion">

            <label for="">Autor</label>
            <input type="text" class="form-control" id="" name="autor">

            <label for="">Descripcion</label>
            <input type="text" class="form-control" id="" name="descripcion">

            <label for="">Seleccione la categoria</label>
            <select name="categoria" id="" class="form-control">
                <option value="aventuras">Aventuras</option>
                <option value="terror">Terror</option>
                <option value="ficcion">Ficcion</option>
                <option value="programacion">Programacion</option>
            </select>

            <label for="">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad">

            <input type="submit" class="btn btn-dark mt-4" value="Ingresar Libro">
        </form>
    </div>
    <!-- Llamando a la clase Libro -->
    <?php
        //llamando archivos de php
        /**
         * include: cuando tienes errores en el archivo los maneja como warning
         * require: cuando tienes errores deja de ejecutar el archivo
         */
        require "./clases/Libro.php";
        /**
         * variables prederteminadas, variables globales, variables magicas
         * isset() => verificar si algo esta vacio o no (global)
         * empty() => verificar si algo esta vacio o no (solo en el archivo actual)
         * 
         * @ => condicionamos que va pasar la condicion si el usuario ingresa datos
         */
        $titulo_form = @$_POST['titulo'];
        $edicion_form = @$_POST['edicion'];
        $autor_form = @$_POST['autor'];
        $descripcion_form = @$_POST['descripcion'];
        $categoria_form = @$_POST['categoria'];
        $edad_form = @$_POST['edad'];

        //instanciando la clase (crear objetos)
        $libro = new Libro($titulo_form, $edicion_form, $autor_form, $descripcion_form, $categoria_form);


        //llamando al metodo de la informacion del libro
        $libro->imprimirInformacion();
        //llamando al metodo de verificar la categoria
        $libro->verificarCategoria();

        //llamando el metodo de la edad
        $libro->verificarEdadByCategoria($edad_form);
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./script.js"></script>
</html>