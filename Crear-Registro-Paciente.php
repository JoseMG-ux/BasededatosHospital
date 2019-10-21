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
                    $sql =("INSERT INTO paciente ('codigo','nombre','apellido','direccion','poblacion','provincia','codigopostal,'telefono','fechanacimiento') VALUES (default,'$codigo','$nombre','$apellido','$direccion','$poblacion','$provincia','$codigopostal','$telefono','$fechanacimiento')");
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
            <div class="form-row">
            <div class="form-group col-md-6">

            <label for="Codigo">Codigo</label> 
            <input type="text" placeholder="EJ: PSIQ451" class="form-control" id="Codigo" name="codigo"> </div> </div> 
            
              <div class="form-row"><div class="form-group col-md-6"> 
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="Nombre" name="nombre"></div> 

              <div class="form-group col-md-6"> 
              <label for="apellido" >Apellido</label>
             <input type="text" class="form-control"id="Apellido" name="apellido"> </div> </div>

               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="dirección">Dirección</label>
               <input type="text" placeholder="EJ: CALLE TERCERA..." class="form-control" id="Dirección" name="direccion"> </div> </div></div>
               
               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="población">Población</label>
               <input type="text" placeholder=" " class="form-control" id="Población" name="poblacion"> </div> </div></div>

               <div class="form-row"><div class="form-group col-md-6">
               <div> <label for="provincia">Provincia</label>
               <input type="text" placeholder="EJ: LOS SANTOS" class="form-control" id="Provincia" name="provincia"> </div> </div></div>

               <div class="form-row" ><div class="form-group col-md-6"> 
              <label for="codigoPostal">Codigo Postal</label>
              <input type="text" placeholder="EJ: +343" class="form-control" id="CodigoPostal" name="codigopostal"></div></div>
               
               <div class="form-row"><div class="form-group col-md-6">
               <label for="telefono">Telefono</label>
               <input type="text" placeholder="EJ: 5555-5555" class="form-control" id="Telefono" name="telefono"> </div> 
               
               <div> <label for="provincia">Fecha de nacimiento</label>
               <input type="text" placeholder="EJ: 14/02/1999" class="form-control" id="fechanadecimiento"name="fechanacimiento" ></div>  </div> 
   
               

              
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