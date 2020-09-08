

<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['nit']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$nit = $_POST['nit'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select nit_cliente, nombre, apellido, direccion, telefono, correo from almacen.cliente where nit_cliente = '$nit'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El nit ingresado no existe");
	                window.location.href="consultaCliente.php";
	                </script>';
            } else {
            	while($resultSet = mysqli_fetch_array($resultado)){ 
            		?>

            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Muestra de Consulta</title>
            		<link rel="stylesheet" type="text/css" href="styles.css" />
            	</head>
            	<body class="body_style">
            		<center>
            		  <img class= "img_style" src="./Imagenes/clientes3.png">
					  <h1 class="slidein">Resultado_Busqueda</h1>
    					<form action="actualizar.php" method="post">
    					  <table class="table_style" cellspacing="20px" style="margin-top: 20px">
    					  	<input type="hidden" name="nit" id="nit" value="<?php echo $resultSet['nit_cliente'] ?>">
    					  	<tr>
    					  		<td>
    					  			<label class="label_consulta">Nombre</label>
    					  		</td>
    					  		<td>
    					  			<input class="input_style" type="text" name="nombre" id="nombre" size="20" value="<?php echo $resultSet['nombre'] ?>" size="50">
    					  		</td>
    					  	</tr>
    					  	<tr>
    					  		<td>
    					  			<label class="label_consulta">Apellido</label>
    					  		</td>
    					  		<td>
    					  			<input class="input_style" type="text" name="apellido" id="apellido" value="<?php echo $resultSet['apellido'] ?>" size="50">
    					  		</td>
    					  	</tr>
    					  	<tr>
    					  		<td>
    					  			<label class="label_consulta">Direccion</label>
    					  		</td>
    					  		<td>
    					  			<input class="input_style" type="text" name="direccion" id="direccion" value="<?php echo $resultSet['direccion'] ?>" size="50">
    					  		</td>
    					  	</tr>
    					  	<tr>
    					  		<td>
    					  			<label class="label_consulta">Telefono</label>
    					  		</td>
    					  		<td>
    					  			<input class="input_style" type="text" name="telefono" id="telefono" value="<?php echo $resultSet['telefono'] ?>" size="50">
    					  		</td>
    					  	</tr>
    					  	<tr>
    					  		<td>
    					  			<label class="label_consulta">Correo</label>
    					  		</td>
    					  		<td>
    					  			<input class="input_style" type="text" name="correo" id="correo" value="<?php echo $resultSet['correo'] ?>" > 
    					  		</td>
    					  	</tr>
    					  	<tr>
    					  		<td  colspan="2" align="center">
    					  			<input class="boton3" type="submit" name="modificar"  value="Modificar">
    					  		</td>
    					  		
    					  	</tr>

						  </table>	
                        </form>
							<?php
								}
							?>
            		</center>
            	</body>
            	</html>
            	<?php
            }
        }
    }
?>