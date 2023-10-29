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
$fecha_creacion = (isset($_POST['fecha_creacion'])) ? $_POST['fecha_creacion'] : "";
$fecha_actualizacion = (isset($_POST['fecha_actualizacion'])) ? $_POST['fecha_actualizacion'] : "";

$foto = (isset($_FILES['foto']["name"])) ? $_FILES['foto']["name"] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case 'btnAgregar':



        $fecha = new DateTime();
        //Se crea el nombre de la imagen.... si no tenemos fotos por defecto toma imagen.jpg
        $nombreFoto = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.jpg";

        $nombreFoto = $foto;

        //nombre que devuelve PHP de la imagen
        $tmpFoto = $_FILES["foto"]["tmp_name"];

        if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            // Continuar con el proceso de carga y almacenamiento de la imagen.


            if ($tmpFoto != "") {
                /* Movemos el archivo a la carpeta imagenes  */
                move_uploaded_file($tmpFoto, "src=../img/domiciliarios.jpg" . $nombreFoto);


                /* la variable sentencia recolecta la informacion del formulario y 
                la envia a la base de datos.
                La variable conn nos brinda la conexion a la base de datos.
                ->prepare nos prepara la sentencia SQL para que inyecte los valores a la BD.
                */
                $inserciondomiciliarios = $conn->prepare(
                    "INSERT INTO domiciliarios( id_domiciliario, nombre, telefono, 
                direccion, foto) 
                VALUES ('$id_domiciliario','$nombre','$telefono','$direccion', '$vehiculo', '$placa_vehiculo', '$activo', '$fecha_creacion', '$fecha_actualizacion', '$foto')"
                );



                $inserciondomiciliarios->execute();
                $conn->close();
               
               echo" <script>
                    swal('Mensaje Principal!', 'Mensaje segundario!', 'success');
                    </script>";
                

                header('location: index.php');
            } else {
                echo "Problemas";
            }
        } else {
            // Manejar el error de carga de la imagen.
            echo "Error al cargar la imagen: " . $_FILES['foto']['error'];
        }




        break;

    case 'btnModificar':

        $editardomiciliarios = $conn->prepare(" UPDATE domiciliarios SET nombre = '$nombre' , 
        telefono = '$telefono', direccion = '$direccion'
        WHERE id_domiciliario = '$id_domiciliario' ");

        /* Aca solo esta actualizando la fotografia */
        $editarEmpleadosFoto = $conn->prepare(" UPDATE domiciliarios SET  foto = '$foto'
        WHERE id_domiciliario = '$id_domiciliario' ");


        $fecha = new DateTime();
        //Se crea el nombre de la imagen.... si no tenemos fotos por defecto toma imagen.jpg
        $nombreFoto = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.jpg";

        $nombreFoto = $foto;

        //nombre que devuelve PHP de la imagen
        $tmpFoto = $_FILES["foto"]["tmp_name"];



        if ($tmpFoto != "") {
            /* Movemos el archivo a la carpeta imagenes  */
            move_uploaded_file($tmpFoto, "../Imagenes/Empleados/" . $nombreFoto);

            header('location: index.php');
        } else {
            echo "Problemas con la Foto";
        }

        $editardomiciliarios->execute();
        $editardomiciliariosFoto->execute();
        $conn->close();

        header('location: index.php');

        break;

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
$consultaEmpleados = $conn->prepare("SELECT * FROM domiciliarios");
$consultaEmpleados->execute();
$listaEmpleados = $consultaEmpleados->get_result();
$conn->close();
