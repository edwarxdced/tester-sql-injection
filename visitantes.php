<?php 



include 'conexion.php';
include 'guardar-visitantes.php';


$tbl_name = "visitantes";

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "SELECT * FROM $tbl_name WHERE id = '$id'";
} else {
	$sql = "SELECT * FROM $tbl_name order by id DESC LIMIT 30";
}


$result = $conexion->query($sql);

while($row = $result->fetch_array()) {
	echo "<pre>";
 	var_dump($row);
 	echo "</pre>";
}
?>