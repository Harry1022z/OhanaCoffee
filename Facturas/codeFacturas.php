<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
//incluimos la conexion a la base de datos 
include("../Conexion/conexion.php");


//Recibimos las variables enviadas
$fech_hor_pedido = (isset($_POST['fech_hor_pedido'])) ? $_POST['fech_hor_pedido'] : "";
$id_pedido = (isset($_POST['id_pedido'])) ? $_POST['id_pedido'] : "";
$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : "";
$id_empleado = (isset($_POST['id_empleado'])) ? $_POST['id_empleado'] : "";
$id_mesa = (isset($_POST['id_mesa'])) ? $_POST['id_mesa'] : "";
$id_menus = (isset($_POST['id_menus'])) ? $_POST['id_menus'] : "";




$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':

                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */

                $insercionpedidos = $conn->prepare(
                "INSERT INTO pedidos ( fech_hor_pedido, id_pedido, id_cliente, id_empleado, id_mesa, id_menus ) 
                VALUES ('$fech_hor_pedido','$id_pedido','$id_cliente','$id_empleado','$id_mesa','$id_menus')"
             );



        $insercionpedidos->execute();
        $conn->close();

        header('location: index.php');



        break;


    case 'btnEliminar':
        

        $eliminarpedidos = $conn->prepare(" DELETE FROM pedidos
        WHERE fech_hor_pedido = '$fech_hor_pedido' ");

        // $consultaFoto->execute();
        $eliminarpedidos->execute();
        $conn->close();

        header('location: index.php');

        break;

    case 'btnCancelar':
        header('location: index.php');
        break;

    
}



/* Consultamos todas las Facturas  */
$consultapedidos = $conn->prepare("SELECT * FROM pedidos");
$consultapedidos->execute();
$listaFacturas = $consultapedidos->get_result();



/* Consultamos todos los Clientes  */
$consultaClientes = $conn->prepare("SELECT * FROM clientes");
$consultaClientes->execute();
$listaClientes = $consultaClientes->get_result();



/* Consultamos todos los Empleados  */
$consultaEmpleados = $conn->prepare("SELECT * FROM empleados");
$consultaEmpleados->execute();
$listaEmpleados = $consultaEmpleados->get_result();

//Al final de todas las consultas se cierra la conexion
$conn->close();

