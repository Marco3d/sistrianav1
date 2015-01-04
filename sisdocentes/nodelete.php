<?php session_start();
require_once 'class/principal.php';
  if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
$Pagina = "NODELETE";
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
                        <h2>No permitido</h2><br>
                                  <div class="alert alert-danger alert-dismissable">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   No se puede eliminar archivos de otro usuario.
                                  </div>
                                   <a class="btn btn-default" href="<?php echo Principal::ruta(); ?>/sisdocentes/planes.php" role="button">Regresar</a>

          
                   
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
