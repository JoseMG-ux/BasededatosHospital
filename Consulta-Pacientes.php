<!DOCTYPE html>
<html lang="es">

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

    <script src="vendor/jquery/jquery.min.js"></script>
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
          



            $sql = "SELECT * from paciente";
            @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
            @$fila = mysqli_num_rows($consulta);


            echo "<table class='table table-borderless' >
            
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Codigo</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Apellido</th>
                <th scope='col'>Direccion</th>
                <th scope='col'>Poblacion</th>
                <th scope='col'>Provincia</th>
                <th scope='col'>Codigo Postal</th>
                <th scope='col'>Telefono</th>
                <th scope='col'>Fecha de nacimiento</th>
            </tr>
            </table>";

            if (@$fila) {

                while ($registro = mysqli_fetch_assoc($consulta)) {
                    @$codigo = $registro["codigo"];   
                    @$nombre =  $registro["nombre"];
                    @$apellido =  $registro["apellido"];
                    @$direccion =  $registro["direccion"];
                    @$poblacion =  $registro["poblacion"];
                    @$provincia =  $registro["provincia"];
                    @$codigopostal =  $registro["codigopostal"];
                    @$telefono =  $registro["telefono"];
                    @$fechanacimiento =  $registro["fechanacimiento"];

                    @$i = $i + 1;


                    echo "<table class='table table-hover' >
                    <tbody>
                    <tr>
                        <th scope='row'>$i</th>
                        <td>$codigo</td>
                        <td>$nombre</td>
                        <td>$apellido</td>
                        <td>$direccion</td>
                        <td>$poblacion</td>
                        <td>$provincia</td>
                        <td>$codigopostal</td>
                        <td>$telefono</td>
                        <td>$fechanacimiento</td>
                    
                    </tr>
                    </tbody>";
                }
            }
            echo "
            </table>
            </div>";

            ?>
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


</body>
<style>
    table {
        table-layout: fixed;
        width: 100%;
    }
</style>

</html>