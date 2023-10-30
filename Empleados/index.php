<?php include 'codeEmpleados.php'; ?>

<?php include("../paginas/head.php") ?>

<div class="container">
    <div class="row">



        <!-- enctype="multipart/form-data" se utiliza para tratar la fotografia -->
        <form action="" method="post" enctype="multipart/form-data">



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- cabecera del modal -->
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Del Empleado</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Cuerpo del modal -->
                        <div class="modal-body">

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="id_empleado">Numero Documento</label>
                                    <input type="text" class="form-control" require name="id_empleado" id="id_empleado" placeholder="" value="<?php echo $id_empleado ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nombre">Nombre(s)</label>
                                    <input type="text" class="form-control" require name="nombre" id="nombre" placeholder="Primer y Segundo Nombre" value="<?php echo $nombre ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="apellido">Apellido(s) </label>
                                    <input type="text" class="form-control" require name="apellido" id="apellido" placeholder="Apellidos" value="<?php echo $apellido ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="direccion">Direccion </label>
                                    <input type="text" class="form-control" require name="direccion" id="direccion" placeholder="Direccion Hogar" value="<?php echo $direccion ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="telefono">Telefono </label>
                                    <input type="text" class="form-control" require name="telefono" id="telefono" placeholder="Telefono Celular" value="<?php echo $telefono ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="correo_electro">Correo Electronico </label>
                                    <input type="email" class="form-control" require name="correo_electro" id="correo_electro" placeholder="Correo Electronico" value="<?php echo $correo_electro ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="fech_naci">Fecha Nacimiento </label>
                                    <input type="date" class="form-control" require name="fech_naci" id="fech_naci" placeholder="" value="<?php echo $fech_naci ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="Puesto">Puesto o Cargo </label>
                                    <input type="text" class="form-control" require name="Puesto" id="Puesto" placeholder="" value="<?php echo $Puesto ?>">

                                </div>


                            </div>
                        </div>

                        <!-- Pie/Footer del modal -->
                        <div class="modal-footer">

                            <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Agregar</button>
                            <button value="btnModificar" class="btn btn-warning" type="submit" name="accion">Modificar</button>
                            <button value="btnEliminar" class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                            <button value="btnCancelar" class="btn btn-primary" type="submit" name="accion">Cancelar</button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Empleado
            </button>





        </form>
        <!-- Final del Formulario -->


        <div class="row">


            <table class="table table-hover table-bordered">

                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Cargo</th>

                        <th scope="col">Seleccionar</th>
                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php
                    /* Prefunto que si la variable listaEmpleados tiene algun contenido */
                    if ($listaEmpleados->num_rows > 0) {

                        foreach ($listaEmpleados as $empleado) {

                    ?>

                            <tr>
                                <td>
                                    <img src="../img/empleados.jpg" width="50px"/>

                                </td>

                                <td> <?php echo $empleado['id_empleado']        ?> </td>
                                <td> <?php echo $empleado['nombre']    ?> </td>
                                <td> <?php echo $empleado['apellido'] ?> </td>
                                <td> <?php echo $empleado['direccion']    ?> </td>
                                <td> <?php echo $empleado['telefono']    ?> </td>
                                <td> <?php echo $empleado['correo_electro']    ?> </td>
                                <td> <?php echo $empleado['fech_naci']    ?> </td>
                                <td> <?php echo $empleado['Puesto']    ?> </td>



                                <form action="" method="post">

                                    <input type="hidden" name="id_empleado" value="<?php echo $empleado['id_empleado'];  ?>">
                                    <input type="hidden" name="nombre" value="<?php echo $empleado['nombre'];  ?>">
                                    <input type="hidden" name="apellido" value="<?php echo $empleado['apellido'];  ?>">
                                    <input type="hidden" name="direccion" value="<?php echo $empleado['direccion'];  ?>">
                                    <input type="hidden" name="telefono" value="<?php echo $empleado['telefono'];  ?>">
                                    <input type="hidden" name="correo_electro" value="<?php echo $empleado['correo_electro'];  ?>">
                                    <input type="hidden" name="fech_naci" value="<?php echo $empleado['fech_naci'];  ?>">
                                    <input type="hidden" name="Puesto" value="<?php echo $empleado['Puesto'];  ?>">


                                    <td><input type="submit" class="btn btn-info" value="Seleccionar"></td>
                                    <td><button value="btnEliminar" class="btn btn-danger" type="submit" name="accion">Eliminar</button></td>

                                </form>


                            </tr>


                    <?php

                        }
                    } else {

                        echo "<h2> No tenemos resultados </h2>";
                    }

                    ?>


                </tbody>
            </table>

        </div>


    </div>
</div>

<?php include("../paginas/footer.php") ?>