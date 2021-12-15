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
    <title>¡Bienvenido!  <?php if(isset($alumno->nombre)) echo "- ".$alumno->nombre; ?> </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <?php 
        if (!isset($_SESSION['user'])) {
              include_once("login.php");
               die();
        }
     ?>
       
     <?php  include("nav.php");  ?>  
        <br>
     <div class="container">
      
                 <div class="card">
                  <div class="card-header">
                           <h4 class="text-center">  <?php echo "Bienvenido ".$alumno->nombre. " ". $alumno->apellidos  ?></h4>
                    </div>
                
                          
                  <div class="card-body">
                    <div class="row">
                    <div class="col-6">  <!-- PARTE DE PAGOO -->
                            <br/>
                                <div class="card-success">
                                    <h5>Pagar en OXXO / 7 Eleven / Telecom / Tarjetas de Crédito y Débito</h5>
                     
                
                                 </div>
                         
                  <form >          
                      <div class="mb-3">
                          <label class="form-label" >Escribe el monto a depositar:</label>   
                         <input type="number" class="form-control" name="monto2" value="" step="any" placeholder=" " />
                       </div>  
                         <input type="submit" name="doit" class="btn btn-primary form-control" value="PAGAR EN MERCADO PAGO" />

                 </form>        
                  </div>


                  <div class="col-6"><!-- PARTE DE LISTADO DE PAGO -->
             
         
                              <table class="table table-striped">
                                        <thead>
                                          <tr>
                                             <th>Folio</th>
                                             <th> Fecha</th>
                                             <th> Monto</th>
                                          </tr>
                                        </thead>
                                          <tbody>
                                            <?php 
                                            $pag = "SELECT * FROM control_pagado where pagadorid = '".__($alumno->id)."'";
                                            echo $pag

                                             ?>
                                                 <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                 </tr>
                                          </tbody>

                                   </table>

              </div>
              
           </div>
            

        </div>

        </div>
          
        </div> <!--container -->
    

    <div class="row">
        <div class="col-6">
                      smadhjkasdas
                    </div>
         <div class="col-6">
                asjhjkdhjkkasbd
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