<?php require_once 'class/principal.php';

  if (!isset($_SESSION["iddocentes"]) and !isset($_SESSION["usudocente"])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
	
	
	<?php include 'includes/head.php' ?>
		 <style type="text/css">
      body {
      	
        padding-top: 100px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 400px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #b5b5b5;
        -webkit-border-radius: 15px;
           -moz-border-radius: 15px;
                border-radius: 15px;
        -webkit-box-shadow: 0 6px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 6px 2px rgba(0,0,0,.05);
                box-shadow: 0 6px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        
        margin-bottom: 10px;
        color: #ac371a
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

		
</head>

<body>
		<div class="container">

      <form class="form-signin" action="login.php" method="post" name="login">
        <h2 class="form-signin-heading"><div id="titulo">SISTRIANA-DOCENTES</div></h2>
      
        <input type="text" class="input-block-level"  name="usudocente" id="usudocente" placeholder="Digita tu usuario"  autofocus>
        <input type="password" class="input-block-level" name="passdocente"  id="passdocente" placeholder="Digita tu contraseña">
        <label>
          <div> <?php
                if (isset($_GET["m"])) {
                  switch ($_GET["m"]) {
                    case 1:
                      ?>
                          <div class="alert alert-danger"> <strong>Usuario o contraseña incorrectos!</strong></div>
							  
							
							
                            <?php
                      break;
                  }
                }else{
                   ?>
                   <!-- <div class="alert alert-info">
                            
                            <strong>Ingresa tus datos</strong>
                            </div> -->
                  <?php
                }
              ?>
            </div>
        </label>

         <label>

        <button class="btn btn-large btn-primary" type="submit">Ingresar</button>
        <!--  <a href="<?php echo Principal::ruta(); ?>" class="btn btn-large btn-primary">Menú</a> -->
         
          <hr>
        <div class="alert alert-info">
             &copy; SisTriana v1.0. Desarrollado por <strong>@ulaRED</strong>
          </div>
         </label>
      </form>

    </div> <!-- /container -->
 	
		
</body>
</html>
<?php
  } else {
    header("Location: home.php");
  }
?>

