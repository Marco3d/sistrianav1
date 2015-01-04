<?php
    require_once 'principal.php';
    
   

    class Docentes extends Principal{
        private $docentes;
        /*private $tCat;*/
        
        public function __construct(){
            $this->docentes = array();
        }


        //***********************TRAER TODOS LOS DATOS************************************************

       public function getdocentes(){
			parent::Conectar();
			$consulta = sprintf(
							"select iddocentes, nombre_docentes, usudocente, passdocente, imagen from docentes order by iddocentes asc;"
						);
			$result = mysql_query($consulta);
			
			while ($reg = mysql_fetch_assoc($result)) {
				$this->docentes[] = $reg;
			}
			
			return $this->docentes;
		}

       //***************************CONSULTAR DATOS POR REGISTRO**************************************************
		
 		public function getId($id){
			parent::Conectar();
			$consulta = sprintf(
							"select iddocentes, nombre_docentes, usudocente, passdocente, imagen from docentes where iddocentes=%s;",
							parent::comillas_inteligentes($id)
						);
			$result = mysql_query($consulta);
			
			while ($reg = mysql_fetch_assoc($result)) {
				$this->docentes[] = $reg;
			}
			
			return $this->docentes;
		}


        //********************ACTUALIZAR DATOS*********************************************************
		
		public function update($id){

			if(empty($_FILES["imagen"]["name"]))
	        {
	            $nom=$_POST["archivo"];
	        }else

	        
	        	{

	        $nom=$_FILES["imagen"]["name"];	
	        
           
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../docentes/".$_FILES["imagen"]["name"]);
       		 }
	        	

			
			parent::Conectar();	 
			//verificar que no este repetido el nombre, usuario
			$consulta = sprintf(
							"SELECT usuario FROM docentes WHERE nombre_docentes = %s or usudocente=%s;",
							parent::comillas_inteligentes($_POST["nombre_docentes"]),
							parent::comillas_inteligentes($_POST["usudocente"])
						);
			$result = mysql_query($consulta);
			
			//echo mysql_num_rows($result);exit;
			
			if (mysql_num_rows($result) == 0) {      	
										
				$consulta = sprintf(
								"UPDATE  docentes  SET nombre_docentes=%s , usudocente=%s, passdocente=%s, imagen='$nom'  WHERE iddocentes=%s;",
								parent::comillas_inteligentes($_POST["nombre_docentes"]),
								parent::comillas_inteligentes($_POST["usudocente"]),
								parent::comillas_inteligentes($_POST["passdocente"]),
								  // parent::comillas_inteligentes($_POST["logo_col"]),
								parent::comillas_inteligentes($_POST["id"])
							);
				$result = mysql_query($consulta);
				
				header("Location: docentes.php?mensaje=1");
			} else {
				header("Location: docentes.php?mensaje=4");
			}		
			 

		}

     //***********************BORRAR DATOS******************************************************

		public function delete($id){
			parent::Conectar();
			
			//verificamos que no existan cursos  asociados
			$consulta = sprintf(
							"select id from cursos where iddocentes = %s;",
							parent::comillas_inteligentes($id)
						);
			$result = mysql_query($consulta);
			
			if (mysql_num_rows($result) == 0) {
				$consulta = sprintf(
							"delete from docentes where iddocentes = %s",
							parent::comillas_inteligentes($id)
						);
				mysql_query($consulta);
				header("Location: docentes.php?mensaje=2");
			} else {
				header("Location: docentes.php?mensaje=3");
			}
		}	


		//**********************AGREGAR DATOS*******************************************************

			public function add(){
			parent::Conectar();
			move_uploaded_file($_FILES['imagen']['tmp_name'],"../docentes/".$_FILES["imagen"]["name"]);
			$nom=$_FILES["imagen"]["name"];
			
			//verificar que no este repetido el nombre, usuario
			$consulta = sprintf(
							"SELECT usuario FROM docentes WHERE nombre_docentes = %s or usuario=%s;",
							parent::comillas_inteligentes($_POST["nombre_docentes"]),
							parent::comillas_inteligentes($_POST["usudocente"])
						);
			$result = mysql_query($consulta);
			
			//echo mysql_num_rows($result);exit;
			
			if (mysql_num_rows($result) == 0) {
				//inserta la asignatura en la base de datos
				$consulta = sprintf(
								"INSERT INTO docentes values(null,%s, %s, %s,'$nom')",
								parent::comillas_inteligentes($_POST["nombre_docentes"]),
								parent::comillas_inteligentes($_POST["usudocente"]),
								parent::comillas_inteligentes($_POST["passdocente"])
								
							);
				$result = mysql_query($consulta);
				//echo mysql_query($consulta);exit;

				header("Location: docentes.php?mensaje=5");
			} else {
				header("Location: docentes.php?mensaje=4");
			}
			
		}		
			
			
} //*************FIN DE LA CLASE*************************************************************
















