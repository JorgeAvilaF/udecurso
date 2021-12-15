<?php  


 include("../config.php");


 if (isset($_POST['user']) and isset($_POST['pass'])) {
 	$user = $_POST['user'];
 	$pass = $_POST['pass'];
  $q = "SELECT * FROM  control_alumnos WHERE  clave = '" .stripslashes(strip_tags($pass))."' and (correo = '" .stripslashes(strip_tags($user))."' || matricula = '".stripslashes(strip_tags($user))."')";
   $r= $sql->Query($q);
     if($r->num_rows>0) {
         $res = $r->fetch_object();
         $_SESSION['user'] = $res->correo;
         $_SESSION['mat'] = $res->matricula;
         $_SESSION['name'] = $res->nombre;
         ?>
           <div class="alert alert-success lead">Te conozco <i class="fa fa-thumbs-up"></i></div>
      <a href="index.php">continuar</a>
      <script>
         setTimeout(function() { window.location = 'index.php'; },3000);
      </script>
    
       
    
      <?php
         return;
 		}
 		else {
         ?>
      <div class="alert alert-warning">
         No coinciden los datos :(
      </div>
      <?php
         return;
         }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alumnos</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	</head>
	<body>
		  <a href="https://uim.mx" class="btn btn-secondary  arrowText arrowLeft">Regresar a UIM</a>
	<div class="container">
          
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="post" class="row g-3">
                    	<img src="https://uim.mx/assets/img/uim/portada.png">
                        <h4 class="text-center">Indentifícate</h4>
                        <div class="col-12">
                            <label>Correo o matricula</label>
                            <input type="email" name="user" class="form-control" placeholder="Correo">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div><!---
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                    -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark w-100">Login</button>
                        </div>
                    
                    </form>
                    <!--
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p>
                    </div>
                -->


                </div>
            </div>
        </div>
    </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<style type="text/css">
			input[type=email] {
				  border: none;
				  border-bottom: 2px solid #012970;
				}
				input[type=password] {
				  border: none;
				  border-bottom: 2px solid #012970;
				}


                                /* ARROWS */
                 .arrowText {
                 position:relative;
                 margin: 20px;
               
                 
                 float: left;
                 }
                 .arrowText:before, .arrowText:after {
                 content: " ";
                 position: absolute;
                 display: block;
                 width: 0;
                 height: 0;
                 }
             /* LEFT ARROW */
                 .arrowLeft:before, .arrowLeft:after {
                 border-top: 20px solid transparent;
                 border-bottom: 19px solid transparent;
                 
                top:-1px
                 }
                 .arrowLeft:after {
                 border-right: 16px solid #6c757d;
                 left: -15px;
                 z-index: 2;
                 }
                 .arrowLeft:before {
                
                 left: -16px;
                 z-index: 1;
                 }

         body{
            background-color: #e2e8f0;
         }
    
		</style>
	</body>
</html>