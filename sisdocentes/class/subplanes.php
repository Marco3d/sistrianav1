<?php 
require_once 'principal.php';
class Subplanes extends Principal {

private $registros;


public function __construct() {
        $this->registros = array();
        $this->registros_docentes = array();
        
    }

//*************traer todos los registros*************************************************************
    public function get() {
        parent::Conectar();
        $consulta = sprintf(
                "select id_archivos_planes, iddocentes, descripcion, anio, jornada, sede, fecha,  archivo FROM archivosplanes order by id_archivos_planes asc;"
        );
        $result = mysql_query($consulta);

        while ($reg = mysql_fetch_assoc($result)) {
            $this->registros[] = $reg;
        }

        return $this->registros;
    }

//*************traer todos los registros subidos relacionadolo con otra tabla*************************************************************
public function get_docentes() {
        parent::Conectar();
        $consulta = sprintf(
                "select      p.id_archivos_planes, p.iddocentes, p.descripcion, p.anio, 
                			 p.jornada, p.sede, p.fecha, p.archivo,  
                             d.iddocentes,d.nombre_docentes
							 FROM
							 archivosplanes as p,
							 docentes as d
							 where
							 p.iddocentes=d.iddocentes
							 order by id_archivos_planes desc;"
        );
        $result = mysql_query($consulta);
        if ($result) {

            while ($reg = mysql_fetch_assoc($result)) {
                $this->registros_docentes[] = $reg;
            }
        }

        return $this->registros_docentes;
    }


//**********************AGREGAR DATOS*******************************************************

			public function add(){
			parent::Conectar();

			
				$max_file_size = 500000; //500 kb
				// $valid_formats = array("xlsx", "xls" ,"doc", "docx");
      
	        	 move_uploaded_file($_FILES['archivo']['tmp_name'],"../planes/misplanes/".$_FILES["archivo"]["name"]);
			     $nom=$_FILES["archivo"]["name"];
	     
	        		

			// //verificar que no este repetido el archivo
			 $consulta = "SELECT archivo FROM archivosplanes WHERE archivo = '$nom'";
			 			
			 				
			 			
			 $result = mysql_query($consulta);
			
			//echo mysql_num_rows($result);exit;
			
			 if (mysql_num_rows($result) == 0) {

			 	if ($_FILES['archivo']['size'] > $max_file_size) {
	        	header("Location: ../planes.php?mensaje=6");

		        	// }elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
		       		// header("Location: planes.php?mensaje=7");
				
	        	 } else{
				//inserta archivo en la base de datos
				$consulta = sprintf(
								"INSERT INTO archivosplanes values(null, %s, %s, %s, %s, %s, now(),'$nom')",
								parent::comillas_inteligentes($_POST["iddocentes"]),
								parent::comillas_inteligentes($_POST["descripcion"]),
								parent::comillas_inteligentes($_POST["anio"]),
								parent::comillas_inteligentes($_POST["jornada"]),
								parent::comillas_inteligentes($_POST["sede"])
								
							);
				$result = mysql_query($consulta);

				//echo mysql_query($consulta);exit;

				header("Location: ../planes.php?mensaje=5");}

			 } else {
			 	header("Location: ../planes.php?mensaje=4");
			 }
			
		}		
 
//*************traer registros por ID*************************************************************

 	public function getId($id){
			parent::Conectar();
			$consulta = sprintf(
							"select id_archivos_planes, iddocentes, descripcion, anio, jornada, sede, fecha,  archivo from archivosplanes where id_archivos_planes=%s;",
							parent::comillas_inteligentes($id)
						);
			$result = mysql_query($consulta);
			
			while ($reg = mysql_fetch_assoc($result)) {
				$this->registros[] = $reg;
			}
			
			return $this->registros;
		}

//*************actualizar registros por ID*************************************************************
public function update($id){
			parent::Conectar();
			
					
				$consulta = sprintf(
								"UPDATE archivosplanes SET iddocentes=%s, descripcion=%s, anio=%s, jornada=%s, sede=%s ,fecha=%s, archivo=%s WHERE id_archivos_planes=%s;",
								parent::comillas_inteligentes($_POST["iddocentes"]),
								parent::comillas_inteligentes($_POST["descripcion"]),
								parent::comillas_inteligentes($_POST["anio"]),
								parent::comillas_inteligentes($_POST["jornada"]),
								parent::comillas_inteligentes($_POST["sede"]),
								parent::comillas_inteligentes($_POST["fecha"]),
								parent::comillas_inteligentes($_POST["archivo"]),
								

								parent::comillas_inteligentes($_POST["id"])
							);
				$result = mysql_query($consulta);
				header("Location: ../planes.php?mensaje=1");

				
			
			
		}

//*************borrar archivo*************************************************************


				public function delete($id){
							parent::Conectar();
							
							
								$consulta = sprintf(
											"delete from archivosplanes where id_archivos_planes = %s",
											parent::comillas_inteligentes($id)
										);
								mysql_query($consulta);
								header("Location: ../planes.php?mensaje=2");
							
						}	
			
			
} //*************FIN DE LA CLASE*************************************************************




 ?>