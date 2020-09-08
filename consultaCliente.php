<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consultas de Clientes</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body class="body_style">
	<center>
		<img class= "img_style" src="./Imagenes/clientes1.png">
		<h1 class="slidein">Consulta</h1>
		<form action="consultarCliente.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px" border="1">
	            <tr>
	            	<td>
	            		<label class="label_style">NIT</label>
	                </td>
	                <td>
	                    <input type="text" name="nit" width="30">
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                	<input class="boton3" type="submit" name="consultar" value="Consultar">
	                </td>
	            </tr>
        	</table>
		</form>
	</center>
</body>
</html>