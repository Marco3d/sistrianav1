<?php session_start();
 require_once 'class/principal.php';
  if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {


?>


<!DOCTYPE html>
<html lang="es">
<head>
<?php
$Pagina = "DOCPROYECTOS";
 include 'includes/head.php' ?>




</head>
<body>
  <?php include 'includes/navbar.php' ?>



<div class="main">
    <div class="main-inner">
      <div class="container">

<!-- titulo de la página -->
        <!--  <div class="row">
                    <div class="span12">
                        <h2>Inicio</h2>
                     <div> 
          </div>

          <hr> -->

<!-- Comienzo del Contenido Dinamico-->

           <div class="row">
                    <div class="span12">
                    	<h1>Documentos Proyectos</h1>
                       

                        <!-- /widget --> 
         
            <!-- /widget-header -->
            
		
		   




                     <div> 

          </div>

 <!-- Final del Contenido Dinamico-->     
    
  
  
      </div> <!-- /container -->    
  </div> <!-- /main-inner -->      
</div> <!-- /main -->

<br>
    
    <?php include 'includes/footer.php' ?>
 
  </body>
</html>
<?php
  } else {
    header("Location: index.php");
  }
?>


