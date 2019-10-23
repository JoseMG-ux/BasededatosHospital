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

    <script src="vendor\jquery\jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <script src="js/messages.es-es.min.js" type="text/javascript"></script>
    <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />



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
            @$nombre =  $_POST["nombre"];
            @$apellido =  $_POST["apellido"];
            @$cedula = $_POST["cedula"]; #tomando valor
            @$habitacion =  $_POST["habitacion"];
            @$cama =  $_POST["cama"];
            @$fecha =  $_POST["fecha"];
            @$medico =  $_POST["medico"];
            @$imagen = "save.png";


            if (@$guardar) {

                $sql = "INSERT INTO ingresopaciente values (default,'$nombre','$apellido','$cedula','$habitacion','$cama','$fecha','$medico')";
                mysqli_query($conn, $sql);
                @$imagen = "nice.png";
                @$nombre =  "";
                @$apellido =  "";
                @$cedula = ""; #tomando valor
                @$habitacion = "";
                @$cama = "";
                @$fecha = "";
                @$medico = "";
                header("refresh: 3;");
            }


            ?>
            <form action="Ingreso-Paciente.php" method="post" ENCTYPE="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: x-xx-xxxx" name="nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Ej: P2P4" name="apellido" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Cedula</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: x-xx-xxxx" name="cedula" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Habitacion</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Ej: P2P4" name="habitacion" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Cama</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: 8" name="cama">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Codigo del medico que lo atiende</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Ej: HRL80" name="medico" required>

                    </div>
                    <label class="form-group col-md-6" for="inputPassword4" name="fecha">Fecha de ingreso</label>

                </div>
                <input id="datepicker" width="276" name="fecha" />
                <script>
                    $('#datepicker').datepicker({

                        uiLibrary: 'bootstrap4'

                    });
                </script>
                <br>
                <input type=image src=img/<?php echo @$imagen; ?> width=40px height=40px name=guardar value=Guardar>




        </div>


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