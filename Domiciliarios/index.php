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
                                    <label for="id_domiciliario">Numero Documento</label>
                                    <input type="text" class="form-control" require name="id_domiciliario" id="id_domiciliario" placeholder="" value="<?php echo $id_domiciliario ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nombre">Nombre(s) y Apellido(s)</label>
                                    <input type="text" class="form-control" require name="nombre" id="nombre" placeholder="Nombres y Apellidos" value="<?php echo $nombre ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="telefono">Telefono </label>
                                    <input type="text" class="form-control" require name="telefono" id="telefono" placeholder="Telefono Celular" value="<?php echo $telefono ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="direccion">Direccion </label>
                                    <input type="text" class="form-control" require name="direccion" id="direccion" placeholder="Direccion Hogar" value="<?php echo $direccion ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="vehiculo">Vehiculo </label>
                                    <input type="text" class="form-control" require name="vehiculo" id="vehiculo" placeholder="Tipo de Vehiculo" value="<?php echo $vehiculo ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="placa_vehiculo">Placa Vehiculo </label>
                                    <input type="text" class="form-control" require name="placa_vehiculo" id="placa_vehiculo" placeholder="Placas del Vehiculo" value="<?php echo $placa_vehiculo ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="activo">Activo </label>
                                    <input type="text" class="form-control" require name="activo" id="activo" placeholder="" value="<?php echo $activo ?>">

                                </div>




                                <div class="form-group col-md-12">
                                    <label for="foto">foto</label>
                                    <!-- El atributo accept image .... solo acepta formatos de imagen -->
                                    <input type="file" class="form-control" require accept="image/*" name="foto" id="foto" placeholder="" value="<?php echo $foto ?>">
                                    <br>
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
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Placa Vehiculo</th>
                        <th scope="col">Activo</th>


                        <th scope="col">Seleccionar</th>
                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php
                    /* Prefunto que si la variable listaEmpleados tiene algun contenido */
                    if ($listadomiciliarios->num_rows > 0) {

                        foreach ($listadomiciliarios as $domiciliarios) {

                    ?>

                            <tr>
                                <td>
                                    <img src="../img/empleados.jpg" width="50px"/>

                                </td>

                                <td> <?php echo $domiciliarios['id_domiciilario']        ?> </td>
                                <td> <?php echo $domiciliarios['nombre']    ?> </td>
                                <td> <?php echo $domiciliarios['telefono'] ?> </td>
                                <td> <?php echo $domiciliarios['direccion']    ?> </td>
                                <td> <?php echo $domiciliarios['vehiculo']    ?> </td>
                                <td> <?php echo $domiciliarios['placa_vehiculo']    ?> </td>
                                <td> <?php echo $domiciliarios['activo']    ?> </td>




                                <form action="" method="post">

                                    <input type="hidden" name="id_domiciilario" value="<?php echo $domiciliarios['id_domiciilario'];  ?>">
                                    <input type="hidden" name="nombre" value="<?php echo $domiciliarios['nombre'];  ?>">
                                    <input type="hidden" name="telefono" value="<?php echo $domiciliarios['telefono'];  ?>">
                                    <input type="hidden" name="direccion" value="<?php echo $domiciliarios['direccion'];  ?>">
                                    <input type="hidden" name="placa_vehiculo" value="<?php echo $domiciliarios['placa_vehiculo'];  ?>">
                                    <input type="hidden" name="activo" value="<?php echo $domiciliarios['activo'];  ?>">

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