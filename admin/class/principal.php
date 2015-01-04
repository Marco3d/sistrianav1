<?php

	session_start();

	class Principal{

		public function Conectar(){

			$servidor="localhost";

			$user = "root";

			$password = "";

			

			$link = mysql_connect($servidor,$user,$password);

			

			if(!$link)

				die("Tenemos problemas, regrese en unos minutos: ".mysql_error());

			

			mysql_query("SET NAMES 'utf8'");

			

			$bd = "virtualplan";

			

			if(!mysql_select_db($bd))

				die("Tenemos problemas, regrese en unos minutos: ".mysql_error());

			

			return $link;

		}

		//*****************************************************************************

		public function comillas_inteligentes($valor)

		{

			// Retirar las barras

			if (get_magic_quotes_gpc()) {

				$valor = stripslashes($valor);

			}

		

			// Colocar comillas si no es entero

			if (!is_numeric($valor)) {

				$valor = "'" . mysql_real_escape_string($valor) . "'";

			}

			return $valor;

		}

        //*****************************************************************************

        public static function ruta(){

            return "http://localhost/sistrianav1";

        }

	  	//***********************************************************************************************************************************************

	  	public static function validarEmail($email){

			$mail_correcto = filter_var($email, FILTER_VALIDATE_EMAIL);

			if ($mail_correcto)

				return TRUE;

			else

				return FALSE;

		}

	}

?>
