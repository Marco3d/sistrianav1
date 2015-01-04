<?php
require_once '../class/subplanes.php';
if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {


    $registros = new Subplanes();
    $datos = $registros->getId($_GET["id"]);
      
    //echo "<pre>";print_r($datos);exit;
    if (isset($_POST["enviado"]) and $_POST["enviado"] == "true") {
        $registros->update($_POST["id"]);
       
    }
 
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
<?php
$Pagina = "INSERTARPLANES";
 include '../includes/head.php' ?>


</head>
<body>
  <?php include '../includes/navbar.php' ?>



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
                                <div class="col-lg-12">
                                    <h3> Modificar Plan de estudios</h3>

                                    <hr>
                                </div><!-- fin row -->          

                            </div><!-- fin row -->

                            <div class="row">
                                <div class="col-lg-3">

                                 <?php if ($datos[0]['iddocentes'] == $_SESSION["iddocentes"]) { ?>
                                

                                    <form role="form" action="" name="" method="post" id="contact-form" enctype="multipart/form-data">

                                        <div class="form-group">
                                            
                                              <label>Breve Descripción del archivo</label>

                                              <textarea class="form-control" rows="3" name ="descripcion"><?php echo $datos[0]['descripcion']; ?></textarea>
                                          </div> 
                                           

                                            <div class="form-group">
                                            <label>Año</label>
                                            <select name="anio">
                                              <option value="2015">2015</option>
                                              <option value="2016">2016</option>
                                              <option value="2017">2017</option>
                                              <option value="2018">2018</option>
                                              <option value="2019">2019</option>
                                              <option value="2020">2020</option>
                                              <option value="<?php echo $datos[0]['anio']; ?>" selected><?php echo $datos[0]['anio']; ?></option>
                                              
                                            </select>
                                            
                                          </div> 

                                           <div class="form-group">
                                              <label>Jornada</label>
                                             <select name="jornada">
                                              <option value="Mañana">Mañana</option>
                                              <option value="Tarde">Tarde</option>
                                              <option value="<?php echo $datos[0]['jornada']; ?>" selected><?php echo $datos[0]['jornada']; ?></option>
                                            </select>  
                                          </div> 

                                          <div class="form-group">
                                            
                                              <label>Sede</label>
                                              <select name="sede">
                                              <option value="Rodrigo De Triana">Rodrigo De Triana</option>
                                              <option value="Palmeras">Palmeras</option>
                                              <option value="Campo Hermoso">Campo Hermoso</option>
                                              <option value="<?php echo $datos[0]['sede']; ?>" selected><?php echo $datos[0]['sede']; ?></option>
                                             </select> 
                                          </div> 
                                          


                                       

                                    
                                   </div> 
                             <div>
                                <input type="hidden" name="id" value="<?php echo $datos[0]['id_archivos_planes']; ?>"> 
                                <input type="hidden" name="iddocentes" value="<?php echo $datos[0]['iddocentes']; ?>">  
                                <input type="hidden" name="archivo" value="<?php echo $datos[0]["archivo"];?>">
                                <input type="hidden" name="fecha" value="<?php echo $datos[0]["fecha"];?>">
                                <input type="hidden" name="enviado" value="true">
                                <input type="submit" <button class="btn btn-success" type="button" name="actualizar" value="Actualizar" title="Actualizar">
                                 <a class="btn btn-default" href="<?php echo Principal::ruta(); ?>/sisdocentes/planes.php" role="button">Cancelar</a>

                              </div>

                                </form>




                                 <?php
                                # code...
                                 } else { ?>

                                  <div class="alert alert-danger alert-dismissable">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   No se puede editar archivos de otro usuario.
                                  </div>

                                  <a class="btn btn-default" href="<?php echo Principal::ruta(); ?>/sisdocentes/planes.php" role="button">Regresar</a>



                                   <?php
                                 }
                                  ?>

                                 


            
		
		   


                   






                     <div> 

          </div>

 <!-- Final del Contenido Dinamico-->     
    
  
  
      </div> <!-- /container -->    
  </div> <!-- /main-inner -->      
</div> <!-- /main -->

<br>
    
    <?php include '../includes/footer.php' ?>
 
  </body>
</html>
<?php
  } else {
    header("Location: index.php");
  }
?>
