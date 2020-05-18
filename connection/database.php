<?php
$GLOBALS['timeout'] = 600;

function connect(&$connection){
	/*$user = "root";
	$password = "";
	$server = "localhost";
	$database = "nubeliquida";*/

	$user = "nubeliqu_userdb";
	$password = "*N4oo#FPDrHH";
	$server = "localhost";
	$database = "nubeliqu_nubeliquida";

	$connection = mysqli_connect( $server, $user, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	mysqli_set_charset($connection, 'utf8');
	$db = mysqli_select_db( $connection, $database ) or die ( "No se ha podido seleccionar la base de datos" );

	if($db){
		return true;
	}
	else{
		return false;
	}
}

/*function auth($usuario, $password){
	//Se definen las varibles globales
	global $usuario_id;
	global $usuario_login;
	global $usuario_nombrecomp;
	global $usuario_nombreprop;
	global $usuario_status;
	global $usuario_permiso;
	global $usuario_imagen;

	//Valida la conexión con la BD
	if ( connect($conexion) ){

		$query_usuarios = " SELECT * FROM usuarios WHERE login='".$usuario."' AND id_estado = 1 ";
		$resultado_usuarios = mysqli_query( $conexion, $query_usuarios ) or die ( "Algo ha salido mal en la consulta a la base de datos");
		$datos_usuario = mysqli_fetch_Object( $resultado_usuarios );

		//Se asignan los valores obtenidos a las variables globales
		$usuario_status     = $datos_usuario->status;
		$usuario_id         = $datos_usuario->id;
		$usuario_nombrecomp = "$datos_usuario->nombre $datos_usuario->apellido";
		$usuario_nombreprop = "$datos_usuario->nombre";
		$usuario_login      = $datos_usuario->login;
		$usuario_permiso    = $datos_usuario->permiso;
		$usuario_imagen		= $datos_usuario->imagen;

		if (trim($datos_usuario->password) ==  md5($password)){
			$activo = $datos_usuario->id_estado;
			if ($activo == 1){
				return 1;
			}
			else{
				return 0;
			}
		}
		else{
			return 0;
		}
	}
}*/

