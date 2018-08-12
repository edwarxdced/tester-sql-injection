<?php
include("conexion.php");

$id= $_REQUEST['id'];

//busco los nombres y sus id
$regintt= mysql_query("SELECT id,nick FROM usuarios WHERE (id=".$id.")");

while ($reginttr = mysql_fetch_array($regintt))
{
echo "Hola ".$reginttr[1]." Id: ".$reginttr[0]."<br>";
};

?>