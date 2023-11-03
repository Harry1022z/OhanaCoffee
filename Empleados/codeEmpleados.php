<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
//incluimos la conexion a la base de datos 
include("../Conexion/conexion.php");


//Recibimos las variables enviadas
$id_empleado = (isset($_POST['id_empleado'])) ? $_POST['id_empleado'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "";
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "";
$correo_electro = (isset($_POST['correo_electro'])) ? $_POST['correo_electro'] : "";
$fech_naci = (isset($_POST['fech_naci'])) ? $_POST['fech_naci'] : "";
$Puesto = (isset($_POST['Puesto'])) ? $_POST['Puesto'] : "";


$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':

                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */

                $insercionempleados = $conn->prepare(
                "INSERT INTO empleados (id_empleado, nombre, apellido, direccion, telefono, correo_electro, fech_naci, Puesto) 
                VALUES ('$id_empleado','$nombre','$apellido','$direccion', '$telefono','$correo_electro','$fech_naci','$Puesto')"
             );



        $insercionempleados->execute();
        $conn->close();

        header('location: index.php');



        break;

    case 'btnModificar':

        $editarempleados = $conn->prepare(" UPDATE empleados SET nombre = '$nombre' , 
        apellido = '$apellido', direccion,  = '$direccion, '
        WHERE id_empleado = '$id_empleado' ");



        $editarempleados->execute();
        
        $conn->close();

        header('location: index.php');

        break;

    case 'btnEliminar':
        

        $eliminarempleados = $conn->prepare(" DELETE FROM empleados
        WHERE id_empleado = '$id_empleado' ");

        // $consultaFoto->execute();
        $eliminarempleados->execute();
        $conn->close();

        header('location: index.php');

        break;

    case 'btnCancelar':
        header('location: index.php');
        break;

    default:
        # code...
        break;
}



/* Consultamos todos los Clientes  */
$consultaempleados = $conn->prepare("SELECT * FROM empleados");
$consultaempleados->execute();
$listaempleados = $consultaempleados->get_result();
$conn->close();

