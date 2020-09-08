<?php
    //Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["registro"])){
        //Declaramos las variables para guardar los datos del formulario
        if (strlen($_POST['nit']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1){
            //Asignamos los datos del formulario a variables locales
            $nitCliente = $_POST['nit'];
            $nombreCliente = $_POST['nombre'];
            $apellidoCliente = $_POST['apellido'];
            $direccionCliente = $_POST['direccion'];
            $telefonoCliente = $_POST['telefono'];
            $correoCliente = $_POST['correo'];
            $idEstado = 1;
            //Definimos la consulta sql
            $sql = "insert into almacen.cliente (nit_cliente, nombre, apellido, direccion, telefono, correo, id_estado)
                    values ('$nitCliente', '$nombreCliente', '$apellidoCliente', '$direccionCliente', '$telefonoCliente', '$correoCliente', '$idEstado')";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo'<script type="text/javascript">
                    alert("Cliente registrado correctamente");
                    window.location.href="menuPrincipal.php";
                    </script>';
            } else{
                echo'<script type="text/javascript">
                    alert("Error al registrar el cliente");
                    window.location.href="menuPrincipal.php";
                    </script>';
            }
        } else{
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos");
                    window.location.href="menuPrincipal.php";
                    </script>';
        }
    }
?>
