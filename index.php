<?php 

include 'guardar-visitantes.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
</head>

<body>

<h1>Login de Usuarios</h1>
<hr />

<?php 
 echo "<a href='registro.php'>Registro</a>"; 
 ?>
<form action="checklogin.php" method="post" >

<label>Nombre Usuario:</label><br>
<input name="nick" type="text" id="username" required>
<br><br>

<label>Password:</label><br>
<input name="password" type="password" id="password" required>
<br><br>

<input type="submit" name="Submit" value="LOGIN">

</form>
<hr />

<footer>

</footer>

 </body>
</html>