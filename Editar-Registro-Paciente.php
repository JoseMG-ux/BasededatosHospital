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
             @$direccion =  $_POST["direccion"];
             @$poblacion =  $_POST["poblacion"];
             @$provincia =  $_POST["provincia"];
             @$codigopostal =  $_POST["codigopostal"];
             @$telefono =  $_POST["telefono"];
             @$fechanacimiento =  $_POST["fechanacimiento"];
            
            

            #BOTON BUSCAR
            if (@$buscar) {
                $sql = "SELECT * FROM paciente WHERE codigo = '$codigoOculto'";

                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);

                if (@$fila) {
                    while ($registro = mysqli_fetch_assoc($consulta)) {
                        @$nombre =  $registro["nombre"];
                        @$apellido =  $registro["apellido"];
                        @$direccion =  $registro["direccion"];
                        @$poblacion =  $registro["poblacion"];
                        @$provincia =  $registro["provincia"];
                        @$codigopostal =  $registro["codigopostal"];
                        @$telefono =  $registro["telefono"];
                        @$fechanacimiento =  $registro["fechanacimiento"];
                       
                    }
                } else {
                    echo "<script>
                    alert ('El codigo " . @$codigoOculto . " No existe, redireccionando a la pagina de creacion de formulario');
                    window.location.pathname = 'Saint-Peter-Hospital-Registro-medico/Crear-Registro-Paciente.php'
                  </script>";
                }
            }
            #FIN BOTON BUSCAR

            #BOTON GUARDAR
            if (@$actualizar) {
                $sql = "SELECT * FROM paciente where codigo='$codigo'";
                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);
                if ($fila) {
                    $sql = "UPDATE paciente set  nombre='$nombre', apellido= '$apellido', direccion='$direccion', poblacion='$poblacion', provincia='$provincia', codigopostal='$codigopostal', telefono='$telefono', fechanacimiento='$fechanacimiento'  where codigo ='$codigo'";
                   
                } else {
                    echo "<script>
                    alert ('El codigo " . @$codigoOculto . " No existe, redireccionando a la pagina de creacion de formulario');
                    window.location.pathname = 'Saint-Peter-Hospital-Registro-medico/Crear-Registro-Paciente.php'
                  </script>";
                }
                mysqli_query($conn, $sql);
            }
            #FIN BOTON GUARDAR

            #BOTON ELIMINAR
            if (@$eliminar) {
                $sql = "DELETE FROM paciente where codigo ='$codigoOculto' ";
                mysqli_query($conn, $sql);
                @$nombre = "";
                @$apellido = "";
                @$direccion = "";
                @$poblacion =  "";
                @$provincia =  "";
                @$codigopostal =  "";
                @$telefono =  "";
                @$fechanacimiento =  "";
                }
            #FIN BOTON ELIMINAR





            echo "<form action=Editar-Registro-Paciente.php method=post ENCTYPE=multipart/form-data>

            <div class='form-row'>
            <div class='form-group col-md-6'> 
            <label for='dt2'>Nombre</label>
            <input type='text' class='form-control' id='dt2' name='nombre' placeholder='Ej: Juan' value=" . @$nombre . " ></div> 

            <div class='form-group col-md-6'> 
            <label for='dt3' >Apellido</label>
           <input type='text' class='form-control'id='dt3' name='apellido' placeholder='Ej: Ramirez' value=" . @$apellido . "  > </div> </div>

             <div class='form-row'><div class='form-group col-md-6'>
             <div> <label for='dt4'>Dirección</label>
             <input type='text' placeholder='EJ: CALLE TERCERA...' class='form-control' id='dt4' name='direccion'  value= " . @$direccion . "  > </div> </div></div>
             
             <div class='form-row'><div class='form-group col-md-6'>
             <div> <label for='dt5'>Población</label>
             <input type='text' placeholder=' ' class='form-control' id='dt5' name='poblacion'  value= " . @$poblacion . " > </div> </div></div>

             <div class='form-row'><div class='form-group col-md-6'>
             <div> <label for='dt6'>Provincia</label>
             <input type='text' placeholder='EJ: LOS SANTOS' class='form-control' id='dt6' name='provincia'  value= " . @$provincia . " > </div> </div></div>

             <div class='form-row' ><div class='form-group col-md-6'> 
            <label for='dt7'>Codigo Postal</label>
            <input type='text' placeholder='EJ: +343' class='form-control' id='dt7' name='codigopostal'  value= " . @$codigopostal . " ></div></div>
             
             <div class='form-row'><div class='form-group col-md-6'>
             <label for='dt8'>Telefono</label>
             <input type='text' placeholder='EJ: 5555-5555' class='form-control' id='dt8' name='telefono'  value= " . @$telefono . " > </div> 
             
             <div> <label for='dt9'>Fecha de nacimiento</label>
             <input type='text' placeholder='EJ: 14/02/1999' class='form-control' id='dt9'name='fechanacimiento'  value= " . @$fechanacimiento . " ></div>  </div> 

        <div class='form-row'>
            <div class='form-group mb-2'>
                <label class='form-control-plaintext' id='dt10'>Codigo a buscar</label>
            </div>
            
            <div class='form-group mx-sm-3 mb-2'>
                <input type='text' class='form-control' id='dt11' name='codigo' placeholder='EJ: 455DFPSI' required value=" . @$codigo . " >
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