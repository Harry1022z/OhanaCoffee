<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
//incluimos la conexion a la base de datos 
include("../Conexion/conexion.php");


//Recibimos las variables enviadas
$id_cliente = (isset($_POST['id_cliente'])) ? $_POST ['id_cliente'] : "";
$nom_cli = (isset($_POST['nom_cli'])) ? $_POST['nom_cli'] : "";
$ape_cli = (isset($_POST['ape_cli'])) ? $_POST['ape_cli'] : "";
$tel_cli = (isset($_POST['tel_cli'])) ? $_POST['tel_cli'] : "";
$dir_cli = (isset($_POST['dir_cli'])) ? $_POST['dir_cli'] : "";
$correo_cli = (isset($_POST['correo_cli'])) ? $_POST['correo_cli'] : "";
$fech_naci = (isset($_POST['fech_naci'])) ? $_POST['fech_naci'] : "";




$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':

                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */

                $insercionClientes = $conn->prepare(
                "INSERT INTO clientes (id_cliente, nom_cli, ape_cli, tel_cli, dir_cli, correo_cli, fech_naci ) 
                VALUES ('$id_cliente','$nom_cli','$ape_cli','$tel_cli','$dir_cli','$correo_cli','$fech_naci')"
             );



        $insercionClientes->execute();
        $conn->close();

        header('location: index.php');



        break;

    case 'btnModificar':

        $editarClientes = $conn->prepare(" UPDATE clientes SET nom_cli = '$nom_cli' , 
        ape_cli = '$ape_cli', tel_cli = '$tel_cli', dir_cli = '$dir_cli' , correo_cli = '$correo_cli' , fech_naci = '$fech_naci'
        WHERE id_cliente = '$id_cliente' ");



        $editarClientes->execute();
        
        $conn->close();

        header('location: index.php');

        break;

    case 'btnEliminar':
        

        $eliminarCliente = $conn->prepare(" DELETE FROM clientes
        WHERE id_cliente = '$id_cliente' ");

        // $consultaFoto->execute();
        $eliminarCliente->execute();
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
$consultaClientes = $conn->prepare("SELECT * FROM clientes");
$consultaClientes->execute();
$listaClientes = $consultaClientes->get_result();
$conn->close();
