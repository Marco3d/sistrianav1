<?php
  require_once 'class/subplanes.php';

  if (isset($_SESSION["id"]) and isset($_SESSION["usuario"])) {
    $docentes = new Docentes();
    $datos = $docentes->getdocentes();
    if (isset($_POST["enviado"]) and $_POST["enviado"]=="true") {
      $docentes->addsubplanes();
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
           <div id="titulo1"> Agregar docentes</div>

            
       </div><!-- fin row -->          
		  
		  </div><!-- fin row -->

      <div class="row">
          <div class="col-lg-3">

         <form role="form" action="" name="" method="post" id="contact-form" enctype="multipart/form-data">

              <div class="form-group">
                <label>Nombre del  docente</label>
                <input class="form-control" name="nombre_docentes" title="Ingrese el nombre del Docente "  required autofocus />
               <div class="form-group">

               <div class="form-group">
                <label>Usuario</label>
                <input class="form-control" name="usudocente" title="Ingrese el usuario del Docente "  required autofocus />
               <div class="form-group">

                <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="passdocente" title="Ingrese el password del Docente "  required autofocus />
               <div class="form-group">  

                <label>Foto</label>
                <input type="file"  name="imagen" /> 
              </div>

               <div>
                <input type="hidden" name="enviado" value="true">
                <input type="submit" <button class="btn btn-success" type="button" name="grabar" value="Grabar" title="Grabar">
               </div>            
               </form>

             

          
               
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
