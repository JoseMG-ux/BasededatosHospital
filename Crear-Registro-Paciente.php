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
<br>

    

    <section class="py-5">
       
 
            <div class="container">
            <?php
             include 'Menu.php';
             include 'ConexionDB.php';

             @$guardar = $_POST["guardar_x"];
             @$codigo = $_POST["codigo"];   
             @$nombre =  $_POST["nombre"];
             @$apellido =  $_POST["apellido"];
             @$direccion =  $_POST["direccion"];
             @$poblacion =  $_POST["poblacion"];
             @$provincia =  $_POST["provincia"];
             @$codigopostal =  $_POST["codigopostal"];
             @$telefono =  $_POST["telefono"];
             @$fechanacimiento =  $_POST["fechanacimiento"];
             @$imagen = "save.png";
   

             if (@$guardar) {
                $sql = "SELECT * FROM paciente where codigo='$codigo'";
                @$consulta = mysqli_query($conn, $sql) or die(mysql_error());
                @$fila = mysqli_num_rows($consulta);
                if ($fila) {
                    echo "<script>

                  alert ('El codigo " . @$codigo . " ya existe, por favor intenta otro')
                </script>";
                }else {
                    $sql ="INSERT INTO paciente values(default,'$codigo','$nombre','$apellido','$direccion','$poblacion','$provincia','$codigopostal','$telefono','$fechanacimiento')";
                    mysqli_query($conn, $sql);
                    @$imagen = "nice.png";
                    @$codigo = ""; #tomando valor                   
                    @$nombre = "";
                    @$apellido = "";
                    @$direccion = "";
                    @$poblacion =  "";
                    @$provincia =  "";
                    @$codigopostal =  "";
                    @$telefono =  "";
                    @$fechanacimiento =  "";
                    header("refresh: 3;");
                }
            }
            ?>
            <form action="Crear-Registro-Paciente.php" method="post" ENCTYPE="multipart/form-data"> 
              <div class="form-row"><div class="form-group col-md-6"> 
              <label for="dt2">Nombre</label>
              <input type="text" class="form-control" id="dt2" name="nombre"></div> 

              <div class="form-group col-md-6"> 
              <label for="dt3" >Apellido</label>
             <input type="text" class="form-control"id="dt3" name="apellido"> </div> </div>

               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="dt4">Dirección</label>
               <input type="text" placeholder="EJ: CALLE TERCERA..." class="form-control" id="dt4" name="direccion"> </div> </div></div>
               
               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="dt5">Población</label>
               <input type="text" placeholder=" " class="form-control" id="dt5" name="poblacion"> </div> </div></div>

               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="dt6">Provincia</label>
               <input type="text" placeholder="EJ: LOS SANTOS" class="form-control" id="dt6" name="provincia"> </div> </div></div>

               <div class="form-row" ><div class="form-group col-md-6"> 
              <label for="dt7">Codigo Postal</label>
              <input type="text" placeholder="EJ: +343" class="form-control" id="dt7" name="codigopostal"></div></div>
               
               <div class="form-row"><div class="form-group col-md-6">
               <label for="dt8">Telefono</label>
               <input type="text" placeholder="EJ: 5555-5555" class="form-control" id="dt8" name="telefono"> </div> 
               
               <div> <label for="dt9">Fecha de nacimiento</label>
               <input type="text" placeholder="EJ: 14/02/1999" class="form-control" id="dt9"name="fechanacimiento" ></div>  </div> 
   
               

              
               <div class="form-row">
                    <div class="form-group mb-2">
                        <label for="dt10">Codigo</label>
                        <input type="text" class="form-control" id="dt10" placeholder="EJ: PSIQ451" name="codigo">



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