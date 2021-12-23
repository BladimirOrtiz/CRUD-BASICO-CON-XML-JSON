<?php
require ("db.php");
		$query = "SELECT * FROM producto";
		$result = filterRecord($query);
	
	function filterRecord($query)
	{
        require ("db.php");
		$filter_result = mysqli_query($conexion, $query);
		return $filter_result;
	}

	$cadena= mysql_XML($result);
	

function mysql_XML($resultado)
{
	$contenido = '&lt; informacion &gt;';
	
	while ($row = mysqli_fetch_array($resultado)) {
		$contenido.="&lt;id&gt;".$row['id']."&lt;/idproducto&gt;";
		$contenido.="&lt;nombre_producto&gt;".$row['nombre_producto']."&lt;/nombre_producto&gt;";
		$contenido.="&lt;descripcion&gt;".$row['descripcion']."&lt;/descripcion&gt;";
		$contenido.="&lt;precio&gt;".$row['precio']."&lt;/precio&gt;";
		$contenido.="&lt;stock&gt;".$row['stock']."&lt;/stock&gt;";
	
	}

	$contenido.='&lt; /informacion &gt;';
	//var_dump($contenido);
	echo $contenido;	
	return $contenido;
}

?>