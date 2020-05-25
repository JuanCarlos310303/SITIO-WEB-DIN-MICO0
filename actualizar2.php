<?php 
$host="localhost";
$user="id13080142_productos22";
$pass="fx0cvOahW/A0cxg7";
$db="id13080142_productos2";

$con=mysqli_connect($host,$user,$pass,$db);

$ID= $_POST['ID'];
$Clave= $_POST['Clave'];
$Cantidad= $_POST['Cantidad'];
$actualizar="UPDATE productos3 set Clave= '$Clave',  Cantidad='$Cantidad' WHERE ID='$ID'"; 
$query=mysqli_query($con,$actualizar);

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Mostrar Datos</title>
	<link rel="stylesheet" href="css/estilos5.css">
</head>
<body>
<p>Registros</p>
<a href='Productos_dentales.html'><button type="submit">Regresar</button></a>
<table width="50%" border="2">
	<tr bgcolor="red">
		<th>ID</th>
		<th>Clave</th>
		<th>Cantidad</th>
	</tr>
	<?php
	$sql="SELECT * FROM  productos3";
	$result=mysqli_query($con,$sql);
	while ($mostrar=mysqli_fetch_array($result)) {
	?>
	<tr bgcolor="pink" align="center">
		<td><?php echo $mostrar['ID']?></td>
		<td><?php echo $mostrar['Clave']?></td>
		<td><?php echo $mostrar['Cantidad']?></td>
	</tr> 
	<?php
	}
	?>
</table>
</body>
</html>	