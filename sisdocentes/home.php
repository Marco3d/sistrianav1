<?php session_start();
 require_once 'class/principal.php';
  if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
$Pagina = "INICIO";
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
                        <h2>Inicio</h2><br>

                        <!-- /widget --> 
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Mensajes del Sistema</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="news-items">
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                  <div class="news-item-detail"><b> Aviso del Sistema No 1</b>
                    <p class="news-item-preview"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque semper faucibus mi sed sodales. Curabitur sit amet tortor a sapien mattis pellentesque. Sed lobortis augue bibendum leo pharetra ultricies. Aenean eget lacus non metus auctor aliquam. Nullam felis orci, tincidunt quis nibh quis, cursus dictum lectus. Morbi tellus urna, lacinia et dolor eget, congue adipiscing mauris. Morbi blandit quam quis diam accumsan ultrices. Nullam ac elit nec nisi scelerisque fermentum. Vivamus venenatis a velit eget laoreet. In bibendum, est vel vestibulum congue, ipsum dui fringilla libero, nec elementum massa massa sit amet nisi. 
                      Phasellus ut neque in massa rhoncus scelerisque id non ligula. Sed sit amet libero vitae dolor fringilla sodales at id justo. </p>
                  </div>
                  
                </li>
               
               
              </ul>
            </div>
                   
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
