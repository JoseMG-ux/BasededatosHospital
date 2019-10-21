<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica San Pedro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('img/hos.jpg');">

        <img class="img-fluid d-block mx-auto" src="img\logo.png">"

    </header>

    <!-- Content section -->
    <section class="py-5">

        <div class="container">
            <?php
            include 'Menu.php';
            include 'ConexionDB.php';
            @$guardar = $_POST["guardar_x"];
            @$codigo = $_POST["codigo"]; #tomando valor
            @$nombre =  $_POST["nombre"];
            @$apellido =  $_POST["apellido"];
            @$telefono =  $_POST["telefono"];
            @$especialidad =  $_POST["especialidad"];
            @$imagen = "save.png";


            if (@$guardar) {
                $sql = "SELECT * FROM medicos where codigo='$codigo'";
                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);
                if ($fila) {
                    echo "<script>

                  alert ('El codigo " . @$codigo . " ya existe, por favor intenta otro')
                </script>";
                } else {
                    $sql = "INSERT INTO medicos values (default,'$codigo','$nombre','$apellido','$telefono','$especialidad')";
                    mysqli_query($conn, $sql);
                    @$imagen = "nice.png";
                    @$codigo = ""; #tomando valor
                    @$nombre = "";
                    @$apellido = "";
                    @$telefono = "";
                    @$especialidad =  "";
                    header("refresh: 3;");
                }
            }


            ?>
            <form action="Crear-Registro-Medico.php" method="post" ENCTYPE="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: Juan" name="nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Ej: Ramirez" name="apellido">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputtelf">Telefono</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Ej: 6666-9999" name="telefono">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputspec">Especialidad</label>
                        <select id="inputState" class="form-control" name="especialidad">
                            <option selected disabled hidden>Seleccionar...</option>
                            <option value="Alergolia"> Alergología (alergias) </option>
                            <option value="Anestesiologia"> Anestesiología (anestesia quirúrgica) </option>
                            <option value="Cardiologia"> Cardiología (corazón) </option>
                            <option value="Gastroenterologia"> Gastroenterología (tracto digestivo) </option>
                            <option value="Endocrinologia"> Endocrinología (sistema endócrino) </option>
                            <option value="Hematologia"> Hematología y hemoterapia (sistema circulatorio) </option>
                            <option value="Hidrologia"> Hidrología médica (hidroterapias) </option>
                            <option value="Infectologia"> Infectología (infecciones) </option>
                            <option value="Psiquiatria"> Psiquiatría (salud mental) </option>
                            <option value="Rehabilitacion"> Rehabilitación (fisiatría) </option>
                            <option value="Reumatologia"> Reumatología (articulaciones, huesos y músculos) </option>
                            <option value="Traumologia"> Traumatología (traumas, lesiones) </option>
                            <option value="Toxicologia"> Toxicología (toxicidad de los compuestos) </option>
                            <option value="Urologia"> Urología (aparato urinario) </option>

                        </select>

                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group mb-2">
                        <label for="inputtelf">Codigo</label>
                        <input type="text" class="form-control" id="inputPassword2" placeholder="EJ: PSIQ451" name="codigo">


                    </div>


                </div>
                <input type=image src=img/<?php echo @$imagen; ?> width=40px height=40px name=guardar value=Guardar>

  
            </form>

        </div>

    </section>







    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Jose Moreno | Jose Lopez | Gerald Lopez</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





    <!--INICIO CODIGO PHP-->















</body>

</html>