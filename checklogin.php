<?php
session_start();

include 'conexion.php';

$username = $_POST['nick'];
$password = $_POST['password'];
$tbl_name = "usuarios";

$sql = "SELECT * FROM $tbl_name WHERE nick = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='index.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>