<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset=utf-8>
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


            @$buscar = $_POST["buscar_x"];
            @$actualizar = $_POST["actualizar_x"];
            @$eliminar = $_POST["eliminar_x"];
            @$codigo = $_POST["codigo"]; #tomando valor

            @$codigoOculto = $_POST["codigo"];
            @$nombre =  $_POST["nombre"];
            @$apellido =  $_POST["apellido"];
            @$telefono =  $_POST["telefono"];
            @$especialidad =  $_POST["especialidad"];

            #BOTON BUSCAR
            if (@$buscar) {
                $sql = "SELECT * FROM medicos WHERE codigo = '$codigoOculto'";

                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);

                if (@$fila) {
                    while ($registro = mysqli_fetch_assoc($consulta)) {
                        @$codigo = $registro["codigo"];
                        @$nombre = $registro["nombre"];
                        @$apellido = $registro["apellido"];
                        @$telefono = $registro["telefono"];
                        @$especialidad = $registro["especialidad"];
                    }
                } else {
                    echo "<script>
                    alert ('El codigo " . @$codigoOculto . " No existe, redireccionando a la pagina de creacion de formulario');
                    window.location.pathname = 'Saint-Peter-Hospital/Crear-Registro-medico.php'
                  </script>";
                }
            }
            #FIN BOTON BUSCAR

            #BOTON GUARDAR
            if (@$actualizar) {
                $sql = "SELECT * FROM medicos where codigo='$codigoOculto'";
                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);
                if ($fila) {
                    $sql = "UPDATE medicos set  nombre='$nombre', apellido= '$apellido', telefono='$telefono', especialidad='$especialidad'  where codigo ='$codigoOculto'";
                    echo $sql;
                } else {
                    echo "<script>
                    alert ('El codigo " . @$codigoOculto . " No existe, redireccionando a la pagina de creacion de formulario');
                    window.location.pathname = 'Saint-Peter-Hospital/Crear-Registro-medico.php'
                  </script>";
                }
                mysqli_query($conn, $sql);
            }
            #FIN BOTON GUARDAR

            #BOTON ELIMINAR
            if (@$eliminar) {
                $sql = "DELETE FROM medicos where codigo ='$codigoOculto' ";
                mysqli_query($conn, $sql);
                $nombre = "";
                $apellido = "";
                $telefono = "";
                $especialidad = "";
                $codigo = "";
            }
            #FIN BOTON ELIMINAR





            echo "<form action=Editar-Registro-Medico.php method=post ENCTYPE=multipart/form-data>
                <div class='form-row' >
                 <div class='form-group col-md-6'>
                    <label for='inputEmail4'>Nombre</label>
                    <input type='text' class='form-control' id='inputEmail4' name='nombre' placeholder='Ej: Juan' value=" . @$nombre . ">
                </div>
                <div class='form-group col-md-6'>
                    <label for='inputPassword4'>Apellido</label>
                    <input type='text' class='form-control' id='inputPassword4' name='apellido' placeholder='Ej: Ramirez' value= " . @$apellido . ">
                </div>
        </div>

        <div class='form-row'>
            <div class='form-group col-md-6'>
                <label for='inputtelf'>Telefono</label>
                <input type='text' class='form-control' id='inputPassword4' name='telefono' placeholder='Ej: 6969699' value= " . @$telefono . ">
            </div>
            <div class='form-group col-md-4'>
                <label for='inputspec'>Especialidad</label>
                <select id='inputState' class='form-control' name='especialidad'>
                    <option selected disabled hidden>" . @$especialidad . "</option>
                    <option value='Alergolia'> Alergología (alergias) </option>
                    <option value='Anestesiologia'> Anestesiología (anestesia quirúrgica) </option>
                    <option value='Cardiologia'> Cardiología (corazón) </option>
                    <option value='Gastroenterologia'> Gastroenterología (tracto digestivo) </option>
                    <option value='Endocrinologia'> Endocrinología (sistema endócrino) </option>
                    <option value='Hematologia'> Hematología y hemoterapia (sistema circulatorio) </option>
                    <option value='Hidrologia'> Hidrología médica (hidroterapias) </option>
                    <option value='Infectologia'> Infectología (infecciones) </option>
                    <option value='Psiquiatria'> Psiquiatría (salud mental) </option>
                    <option value='Rehabilitacion'> Rehabilitación (fisiatría) </option>
                    <option value='Reumatologia'> Reumatología (articulaciones, huesos y músculos) </option>
                    <option value='Traumologia'> Traumatología (traumas, lesiones) </option>
                    <option value='Toxicologia'> Toxicología (toxicidad de los compuestos) </option>
                    <option value='Urologia'> Urología (aparato urinario) </option>
                </select>

            </div>

        </div>

        <div class='form-row'>
            <div class='form-group mb-2'>
                <label class='form-control-plaintext' id='staticEmail2'>Codigo a buscar</label>
            </div>
            <div class='form-group mx-sm-3 mb-2'>
                <input type='text' class='form-control' id='inputPassword2' name='codigo' placeholder='EJ: 455DFPSI' value=" . @$codigo . ">
             </div>

             
            <input type=image src=img/search.png   width=40px height=40px name=buscar value=Buscar>

            </div>
            
           
           


            <table class='table table-borderless'>
            <thead>
              <tr>
                <th scope='co'>
                <input type=image src=img/refresh.png    width=40px height=40px name=actualizar value=actualizar>
                </th>
                <th scope='col' >
                <input type=image src=img/delete.png   width=40px height=40px name=eliminar value=eliminar>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope='row'>Actualizar Registro</th>
                <th>Eliminar Registro</th>
              </tr>
            </tbody>
          </table>

            <input type=hidden name=codigoOculto value=" . @$codigoOculto . " >
            </form> ";
            ?>




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