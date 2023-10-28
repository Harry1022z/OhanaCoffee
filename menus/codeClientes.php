<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
//incluimos la conexion a la base de datos 
include("../Conexion/conexion.php");


//Recibimos las variables enviadas
$id_menu = (isset($_POST['id_menu'])) ? $_POST ['id_menu'] : "";
$nom_plato = (isset($_POST['nom_plato'])) ? $_POST['nom_plato'] : "";
$desc_plato = (isset($_POST['desc_plato'])) ? $_POST['desc_plato'] : "";
$notas_adicionales = (isset($_POST['notas_adicionales'])) ? $_POST['notas_adicionales'] : "";




$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':

                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */

                $insercionmenus = $conn->prepare(
                "INSERT INTO menus (id_menu, nom_plato, desc_plato, notas_adicionales) 
                VALUES ('$id_menu','$nom_plato','$desc_plato','$notas_adicionales')"
             );



        $insercionmenus->execute();
        $conn->close();

        header('location: index.php');



        break;

    case 'btnModificar':

        $editarmenus = $conn->prepare(" UPDATE menus SET nom_plato = '$nom_plato' , 
        desc_plato = '$desc_plato', notas_adicionales = '$notas_adicionales'
        WHERE id_menu = '$id_menu' ");



        $editarmenus->execute();
        
        $conn->close();

        header('location: index.php');

        break;

    case 'btnEliminar':
        

        $eliminarmenus = $conn->prepare(" DELETE FROM menus
        WHERE id_menu = '$id_menu' ");

        // $consultaFoto->execute();
        $eliminarmenus->execute();
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
$consultamenus = $conn->prepare("SELECT * FROM menus");
$consultamenus->execute();
$listamenus = $consultamenus->get_result();
$conn->close();
