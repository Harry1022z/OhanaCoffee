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









/* Consultamos todos los empleados  */
$consultaEmpleados = $conn->prepare("SELECT * FROM empleados");
$consultaEmpleados->execute();
$listaEmpleados = $consultaEmpleados->get_result();
$conn->close();
