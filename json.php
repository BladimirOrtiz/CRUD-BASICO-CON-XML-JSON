<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bjorshoop";
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM producto";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$productos = array(); //creamos un array
while($row = mysqli_fetch_array($result)) 
{ 	
	$id=$row['id'];
	$nombrep=$row['nombre_producto'];
	$descripcionp= $row['descripcion'] ;
	$precio=$row['precio'];
	$stock=$row['stock'];
	$productos[] = array('id'=> $id, 'nombre_producto'=> $nombrep, 'descripcion'=> $descripcionp,
						'precio'=> $precio,
						'stock'=> $stock);

}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($productos);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'usuarios.json';
file_put_contents($file, $json_string);
*/
	

?>