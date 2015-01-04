<?php
require_once '../class/subplanes.php';
if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {
    $registros = new Subplanes();
    //$datos = $subplanes->getsubplanes();
   
    $registros_docentes = new SubPlanes();
    $datos2 = $registros_docentes->get_docentes();
    //echo "<pre>";print_r($datos2);exit;
    if (isset($_POST["enviado"]) and $_POST["enviado"] == "true") {
        $registros->add();
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
                                    <h3> Agregar Plan de estudios</h3>

                                    <hr>
                                </div><!-- fin row -->          

                            </div><!-- fin row -->

                            <div class="row">
                                <div class="col-lg-3">

                                    <form role="form" action="" name="" method="post" id="contact-form" enctype="multipart/form-data">

                                       
                                           <div>
                                            <input class="form-control"  type="hidden" name="iddocentes" value="<?php echo $_SESSION["iddocentes"] ?>"  required autofocus />
                                           </div>

                                           <div class="form-group">
                                            
                                              <label>Breve Descripción del archivo</label>

                                              <textarea name="descripcion"  rows="3"></textarea>
                                          </div> 

                                            <div class="form-group">
                                            <label>Año</label>
                                            <select name="anio">
                                              <option value="2015">2015</option>
                                              <option value="2016">2016</option>
                                              <option value="2017">2017</option>
                                              <option value="2015">2018</option>
                                              <option value="2016">2019</option>
                                              <option value="2017">2020</option>
                                              
                                            </select>
                                            
                                          </div> 

                                           <div class="form-group">
                                              <label>Jornada</label>
                                             <select name="jornada">
                                              <option value="Mañana">Mañana</option>
                                              <option value="Tarde">Tarde</option>
                                            </select>  
                                          </div> 

                                          <div class="form-group">
                                            
                                              <label>Sede</label>
                                              <select name="sede">
                                              <option value="Rodrigo De Triana">Rodrigo De Triana</option>
                                              <option value="Palmeras">Palmeras</option>
                                              <option value="Campo Hermoso">Campo Hermoso</option>
                                             </select> 
                                          </div> 
                                          <div class="form-group">
                                            <HR>
                                              <label>Subir archivo</label>
                                              <input type="file"  name="archivo" /> 
                                          </div> 



                                       

                                    
                                   </div> 
                             <div>
                                    <input type="hidden" name="enviado" value="true">
                                    <input type="submit" <button class="btn btn-success" type="button" name="grabar" value="Enviar" title="Enviar">
                                </div>
                                </form>

            
		
		   


                   






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
