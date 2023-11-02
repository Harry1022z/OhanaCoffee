<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
//incluimos la conexion a la base de datos 
include("../Conexion/conexion.php");


//Recibimos las variables enviadas
$id_domiciliario = (isset($_POST['id_domiciliario'])) ? $_POST['id_domiciliario'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "";
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "";
$vehiculo = (isset($_POST['vehiculo'])) ? $_POST['vehiculo'] : "";
$placa_vehiculo = (isset($_POST['placa_vehiculo'])) ? $_POST['placa_vehiculo'] : "";
$activo = (isset($_POST['activo'])) ? $_POST['activo'] : "";




$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':


                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */
                $inserciondomiciliarios = $conn->prepare(
                    "INSERT INTO domiciliarios( id_domiciliario, nombre, telefono, 
                direccion, vehiculo, placa_vehiculo, activo) 
                VALUES ('$id_domiciliario','$nombre','$telefono','$direccion', '$vehiculo', '$placa_vehiculo', '$activo')"
                );



                $inserciondomiciliarios->execute();
                $conn->close();
                
                case 'btnModificar':
                $editardomiciliarios = $conn->prepare(" UPDATE domiciliarios SET nombre = '$nombre' , 
                telefono = '$telefono', direccion = '$direccion'
                WHERE id_domiciliario = '$id_domiciliario' ");




    case 'btnEliminar':
        

        $eliminardomiciliario = $conn->prepare(" DELETE FROM domiciliarios
        WHERE id_domiciliario = '$id_domiciliario' ");

        // $consultaFoto->execute();
        $eliminardomiciliario->execute();
        $conn->close();

        header('location: index.php');

        break;

    case 'btnCancelar':
        header('location: index.php');
        break;

    
}



/* Consultamos todos los domiciliarios  */
$consultadomiciliarios = $conn->prepare("SELECT * FROM domiciliarios");
$consultadomiciliarios->execute();
$listadomiciliarios = $consultadomiciliarios->get_result();
$conn->close();
