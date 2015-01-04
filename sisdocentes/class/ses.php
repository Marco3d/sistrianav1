<?php
	require_once 'principal.php';
	class Ses extends Principal{
		private $login;
		
		public function __construct(){
			$this->login = array();
		}
		
		public function logueo(){
			$pass = $_POST["passdocente"];
			parent::Conectar();
			$consulta = sprintf(
							"select
							iddocentes, nombre_docentes, usudocente, passdocente,imagen
							from
							docentes
							where
							usudocente = %s
							and
							passdocente = %s",
							parent::comillas_inteligentes($_POST["usudocente"]),
							parent::comillas_inteligentes($pass)
						);
			$result = mysql_query($consulta);
			
			while ($reg = mysql_fetch_assoc($result)) {
				$this->login[] = $reg;
			}
			
			if (sizeof($this->login)>0) {
				foreach ($this->login as $key) {
					$_SESSION["iddocentes"] = $key["iddocentes"];
					$_SESSION["usudocente"] = $key["usudocente"];
					$_SESSION["nombre_docentes"] = $key["nombre_docentes"];
				    $_SESSION["imagen"] = $key["imagen"];
					header("Location: home.php");
				}
			} else {
				header("Location: index.php?m=1");
			}
			
		}
	}
?>