<?php 
    include 'conexion.php';

	$useragent = $_SERVER["HTTP_USER_AGENT"];
	$ip        = $_SERVER["REMOTE_ADDR"];
	$uri       = $_SERVER["REQUEST_URI"];
	$method    = $_SERVER["REQUEST_METHOD"];
	$query     = $_SERVER["QUERY_STRING"];

    $sql = "INSERT INTO `visitantes` (`ip`, `user_agent`, `metodo`, `uri`,`query_string`, `fecha`) 
    VALUES ('".$ip."', '".$useragent."', '".$method."', '".$uri."' ,'".$query."', CURRENT_TIMESTAMP);";

    $resul = $conexion->query($sql);
?>