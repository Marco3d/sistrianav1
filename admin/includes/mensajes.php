<?php 
if (isset($_GET["mensaje"]) and is_numeric($_GET["mensaje"])) {
                  switch ($_GET["mensaje"]) {
                    case 1:
                    ?><div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Los datos  han sido modificados correctamente.
                     </div><?php
                       break;
                    case 2:
                    ?><div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Los datos  han sido eliminados correctamente.
                     </div><?php
                       break;

                    case 3:
                    ?><div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        No se puede eliminar, ya que existen registros asociados
                      </div><?php
                       break;  
                    case 4:
                    ?><div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Ya existe un registro con el mismo nombre o usuario . 
                      </div><?php
                        break;
                      
                    case 5:
                    ?><div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        El registro ha sido creado.
                     </div><?php
                       break;  

                    }
                }


 ?>