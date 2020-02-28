<?PHP
	if ($_POST ['eliminar']) {
		include "conexion.php";
		$sql="SELECT * FROM usuarios";
		$consulta=@mysql_query($sql,$conexion);
			if (list($_POST [CedulaOculta])=mysql_fetch_array($consulta)) {
				$asql="DELETE from usuarios where usuarios_nombre='$_POST[nombre]' ";
				$aconsulta=mysql_query ($asql, $conexion);
					if ( !mysql_error() ) {
						echo "Registro eliminado";
							} else{
						echo "Registro no encontrado";
					}
				mysql_close($conexion);
			}
		}
?>