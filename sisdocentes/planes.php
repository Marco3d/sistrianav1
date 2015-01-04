<?php session_start();
 require_once 'class/subplanes.php';
  if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {


    $registros = new Subplanes();
    $datos = $registros->get();
    //echo "<pre>";print_r($datos);exit;
    
    $registros_docentes = new Subplanes();
    $datos2 = $registros_docentes->get_docentes();
    
    
    //echo "<pre>";print_r($datos2);exit;

?>


<!DOCTYPE html>
<html lang="es">
<head>
<?php
$Pagina = "PLANES";
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
                       

                        <!-- /widget --> 
         
            <!-- /widget-header -->
            
		
		   <div> <?php include 'includes/mensajes.php' ?></div>

                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3>Plan de Estudios</h3>

                                
                            </div>
                            <br>
                            <?php if (sizeof($datos2) > 0) { ?>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                   <table class="table table-bordered" class="display" id="tablecol" >
                                        <thead class ="mithead">
                                            <tr>
                                                <th>ID</th>
                                                <th>Archivo</th>
                                                <th>Docente</th>
                                                <th>Descripción</th>
                                                <th>Año</th>
                                                <th>Jornada</th>
                                                <th>Sede</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- hacemos un recorrido por todos los datos mediante un ciclo -->
                                            <?php foreach ($datos2 as $key) { ?>
                                                
                                                   
                                               
                                                <tr>
                                                    <td class="center"><?php echo $key["id_archivos_planes"]; ?></td> 
                                                    <td class="center"><a href="<?php echo Principal::ruta(); ?>/sisdocentes/planes/misplanes/<?php echo $key["archivo"]; ?>"><?php echo $key["archivo"]; ?></a></td>
                                                    <td class="center"><?php echo $key["nombre_docentes"]; ?></td> 
                                                    <td class="center"><?php echo $key["descripcion"]; ?></td> 
                                                    <td class="center"><?php echo $key["anio"]; ?></td> 
                                                    <td class="center"><?php echo $key["jornada"]; ?></td> 
                                                    <td class="center"><?php echo $key["sede"]; ?></td> 
                                                    <td class="center"><?php echo $key["fecha"]; ?></td> 
                                                    
                                                    <td class="center">

                                                        <a href="planes/modificar.php?id=<?php echo $key['id_archivos_planes']; ?>" title="Editar">
                                                            <i class="fa fa-pencil-square-o"></i></a> 

                                                            <?php if ($key["nombre_docentes"]== $_SESSION["nombre_docentes"]) {?>
                                                                <a href="javascript:void(0);" onclick="eliminiar('planes/delete.php','<?php echo $key["id_archivos_planes"]; ?>')">
                                                                <i class="fa fa-trash-o"></i></a>
                                                           
                                                           <?php
                                                            } else { ?>
                                                                <a href="nodelete.php" title ="Eliminar">
                                                                <i class="fa fa-trash-o"></i></a>
                                                           
                                                           <?php 
                                                            }
                                                             ?>

                                                        

                                                    </td>
                                                </tr>
                                                <!-- Cerramos el primer registro y regresamos hasta terminarlos todos -->
                                            
                                            <?php } ?>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- /widget-content --> 
                            </div>
                            <!-- Si no encuentra ningún datos entonces... -->
                            <?php
                        } else {
                            ?><div class="alert alert-info"><?php echo "No existen datos para la institución. Por favor,agregarlos."; ?></div><?php
                        }
                        ?>
                        <a href="planes/insertar.php" class="btn btn-default btn-lg active" role="button">Agregar Planes</a> 



                   






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
