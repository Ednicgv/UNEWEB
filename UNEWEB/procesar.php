<?php
			error_reporting(0);
			if ($_POST ['registrar']) {
				include "conexion.php";
				$sql="Insert into usuarios values  ('$_POST[cedula]','$_POST[nombre]')";
				$consulta=@mysql_query($sql,$conexion);
					if (!mysql_error()){
						echo "Enviado con exito!";
					}
			}
?>	