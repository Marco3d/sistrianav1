<?php
	session_start();
	if (isset($_SESSION["id"]) and isset($_SESSION["usuario"])) {
?>
<!DOCTYPE html>
<html lang="es">
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
            <h2>Home</h2>

            

            
		  </div>
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
