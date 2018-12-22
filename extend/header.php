<?php
  include '../conexion/conexion.php';
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
 <head>
   <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.css">
 </head>
 <style>
 header, main, footer {
    padding-left: 300px;
  }

  @media only screen and (max-width : 992px) {
    header, main, footer {
      padding-left: 0;
    }
  }
 </style>
   <body>
      <main>
        <?php include 'menu_admin.php' ?>
