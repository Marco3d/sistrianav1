<?php
//llamado a clases e instancias
  require_once 'class/docentes.php';
  if (isset($_SESSION["id"]) and isset($_SESSION["usuario"])) {
    $docentes = new Docentes();
    $datos = $docentes->getdocentes();
//    echo "<pre>";print_r($datos);exit;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'includes/head.php' ?>
<body>

 <div id="wrapper">

              <?php include 'includes/sidebar.php' ?>       
              <?php include 'includes/topbar.php' ?>  
  

    <div id="page-wrapper">

      <div class="row">
         <div class="col-lg-12">
            <div id="titulo1">Datos docentes</div>
            <div> <?php include 'includes/mensajes.php' ?></div>
         </div> <!-- fin columna -->
      </div> <!-- fin row -->  


      <div class="row">
         <div class="col-lg-12">

         <!-- Comienzo contenido dinámico -->
         <!-- Si no vienen vacios los datos -->
            <?php if(sizeof($datos) > 0){  ?>
            <!-- generamos la tabla -->

            <div class="table-responsive">
              <table class="table table-bordered" class="display" id="tablecol" >
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>Foto</th> 
                    <th>Acciones</th>
                  </tr>
                </thead> 

                <tbody>
                   <!-- hacemos un recorrido por todos los datos mediante un ciclo -->
                 <?php foreach ($datos as $key) { ?>
                  <tr>
                     <td class="center"><?php echo $key["iddocentes"]; ?></td> 
                     <td class="center"><?php echo $key["nombre_docentes"]; ?></td>
                     <td class="center"><?php echo $key["usudocente"]; ?></td>
                     <td class="center"><?php echo $key["passdocente"]; ?></td>
                      <td class="center">
                              <img src="../docentes/<?php echo $key["imagen"]; ?>" width="100" height="100" />
                            </td>                                                  
                      <td class="center">
                                              
                         <a class="btn btn-info" href="modificardocentes.php?id=<?php echo $key['iddocentes']; ?>">
                         <i class="fa fa-pencil-square-o"></i>Editar</a>              

                         <a class="btn btn-danger" href="javascript:void(0);" onclick="eliminiar('deldocentes.php','<?php echo $key["iddocentes"]; ?>')">
                         <i class="fa fa-trash-o"></i> Eliminar</a>
                       </td>
                   </tr>
                   <!-- Cerramos el primer registro y regresamos hasta terminarlos todos -->
                    <?php }?>

                <tbody>  
               </table> 
                   <!-- Si no encuentra ningún datos entonces... -->
                    <?php
                                }else{
                                  ?><div class="alert alert-info"><?php
                                        echo "No existen datos para la institución. Por favor,agregarlos."; ?></div><?php
                                }
                              ?>
                              <a href="insertardocentes.php" class="btn btn-default btn-lg active" role="button">Agregar docentes</a> 

            </div> <!-- fin tabla responsive -->
        <!-- Fin contenido dinámico -->            
         </div> <!-- fin columna -->
      </div> <!-- fin row --> 
      <?php include 'includes/footer.php' ?>   
    </div> <!-- fin page-wrapper -->
 </div><!-- /#wrapper -->
   				     
</body>
</html>
 <!-- En el caso de que no haya login,regresa al formulario -->
<?php
	} else {
		header("Location: index.php");
	}
?>
