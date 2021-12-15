<?php 
 include("../config.php");
 setlocale(LC_ALL,'es_US.UTF-8');
  session_start();
 if(isset($_GET['logout'])) {
      session_destroy();
      header("Location: alumnos/");
      exit();
   }

    function __() { @$arg=func_get_arg(0); return addslashes(strip_tags($arg)); }
   if (isset($_SESSION['mat'])) {
     $mat = $_SESSION['mat'];
     $q = "SELECT * FROM control_alumnos WHERE matricula = '".__($mat)."'";
     $alumn = $sql->Query($q);
    
     if($alumn->num_rows > 0){
        $alumno = $alumn->fetch_object();
     }

     
   }


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido - <?php echo $alumno->nombre ?> </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <?php 
        if (!isset($_SESSION['user'])) {
              include_once("login.php");
               die();
        }
     ?>
       
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="container">

            <a class="navbar-brand" href="https://uim.mx">Universidad Internacional Mexicana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Perfil</a>
                </li>
               
              </ul>
              <span class="navbar-text">
                <a href="?logout=1">Cerrar sesión</a>
              </span>
            </div>
          </div>
        </nav>
        <br>
     <div class="container">
         <div class="card">
                  <div class="card-header">
                   <h4>  <?php echo "Bienvenido ".$alumno->nombre. " ". $alumno->apellidos  ?></h4>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
     </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <style type="text/css">
         body{
            background-color: #e2e8f0;
         }
     </style>
</body>
</html>