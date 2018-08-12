<?php

include 'conexion.php';

$tbl_name = "usuarios";
 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nick = '$_POST[nick]' ";

 $result = $conexion->query($buscarUsuario);
 $count = mysqli_num_rows($result);

 if ($count == 1) {
 	echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
 	echo "<a href='index.php'>Por favor escoga otro Nombre</a>";
 } else {

	$form_pass = $_POST['password'];
	$hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $query = "INSERT INTO usuarios (nick, password)
           VALUES ('$_POST[nick]', '$hash')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['nick'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.php'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>