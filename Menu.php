 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" href="Index.php">Clinica San Pedro</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <div class="dropdown">
             <div class="dropdown show">
               <a href="#" data-toggle="dropdown" class="nav-link">Registro Paciente <b class="caret"></b></a>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                 <a class="dropdown-item" href="Crear-Registro-Paciente.php">Crear Registro</a>
                 <a class="dropdown-item" href="#">Editar Registros</a>
                 <a class="dropdown-item" href="#">Consultar Registro</a>
             </div>

         </li>
         <li class="nav-item active">
           <div class="dropdown">
             <div class="dropdown show">
               <a href="#" data-toggle="dropdown" class="nav-link">Registro Medico <b class="caret"></b></a>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                 <a class="dropdown-item" href="Crear-Registro-Medico.php">Crear Registro</a>
                 <a class="dropdown-item" href="Editar-Registro-Medico.php">Editar Registros</a>
                 <a class="dropdown-item" href="#">Consultar Registro</a>
             </div>
         </li>
         <li class="nav-item active">
         <div class="dropdown">
             <div class="dropdown show">
               <a href="#" data-toggle="dropdown" class="nav-link">Iniciar Sesion <b class="caret"></b></a>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                 <a class="dropdown-item" href="#">Cerrar Sesion</a>

             </div>
         </li>

       </ul>
     </div>
   </div>
 </nav>

 <style>
   .bs-example {
     margin: 20px;
   }

   @media screen and (min-width: 768px) {

     .dropdown:hover .dropdown-menu,
     .btn-group:hover .dropdown-menu {
       display: block;
     }

     .dropdown-menu {
       margin-top: 0;
     }

     .nav-link {
       margin-bottom: 2px;
     }

     .navbar .nav-link,
     .nav-tabs .nav-link {
       margin-bottom: 0;
     }
   }
 </style>