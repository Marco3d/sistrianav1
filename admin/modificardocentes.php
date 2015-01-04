<?php
  require_once 'class/docentes.php';
  if (isset($_SESSION["id"]) and isset($_SESSION["usuario"])) {
    $docentes = new Docentes();
    $datos=$docentes->getId($_GET["id"]);
    //echo "<pre>";print_r($datos);exit;
    if (isset($_POST["enviado"]) and $_POST["enviado"]=="true") {
      //echo "<pre>";print_r($datoscol);exit;
      $docentes->update($_POST["id"]);

    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'includes/head.php' ?>

  </head>

  <body>

    <div id="wrapper">

      	 <!-- Sidebar -->
      	<?php include 'includes/sidebar.php' ?>
    	 <!--  end Sidebar -->

    	  <!-- Topbar -->
    	<?php include 'includes/topbar.php' ?>  

    	  <!-- endtopbar -->

      

         

      <div id="page-wrapper">

        

         <div class="row">
          <div class="col-lg-12">
           <div id="titulo1"> Modificar docentes</div>

            
       </div><!-- fin row -->          
		  
		  </div><!-- fin row -->

      <div class="row">
          <div class="col-lg-3">

         <form role="form" action="" name="" method="post" id="contact-form" enctype="multipart/form-data">

              <div class="form-group">
                <label>Nombre del Docente</label>
                <input class="form-control" type="text" name="nombre_docentes" title="Ingrese el nombre del docente"  autofocus value="<?php echo $datos[0]['nombre_docentes']; ?>"/>
                
              </div>

               <div class="form-group">
                <label>Usuario</label>
                <input class="form-control" type="text" name="usudocente" title="Ingrese el nombre del usuario"  autofocus value="<?php echo $datos[0]['usudocente']; ?>"/>
                
              </div>

               <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="text" name="passdocente" title="Ingrese el password del docente"  autofocus value="<?php echo $datos[0]['passdocente']; ?>"/>
                
              </div>

              

              <div>
                <input type="hidden" name="id" value="<?php echo $datos[0]['iddocentes']; ?>"> 
                <div class="form-group">
                <label>Foto</label>

                <input type="file"   name="imagen" title="Modificar Imagen" /> <br> <img src="docentes/<?php echo $datos[0]['imagen'];?>"  width="150" height="150" />
              </div>
 
                <div>
                <input type="hidden" name="id" value="<?php echo $datos[0]['iddocentes']; ?>">  
                <input type="hidden" name="enviado" value="true">
                <input type="hidden" name="archivo" value="<?php echo $datos[0]["imagen"];?>">
                <input type="submit" <button class="btn btn-success" type="button" name="actualizar" value="Actualizar" title="Actualizar">
               </div>

             

          
               
           </form>
            
			</div><!-- fin row -->          
      
      </div><!-- fin row -->





                    

      </div><!-- /#page-wrapper -->
            
       
                   


		

		<?php include 'includes/footer.php' ?>	



    </div><!-- /#wrapper -->

   		  <!-- fin contenido dinamico -->

		  <!--  star footer -->

			

		  <!-- end footer -->

   
  </body>
</html>
<?php
	} else {
		header("Location: index.php");
	}
?>
