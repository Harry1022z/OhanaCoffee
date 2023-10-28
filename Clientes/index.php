<?php include 'codeClientes.php'; ?>

<?php include("../paginas/head.php") ?>

<div class="container">
    <div class="row">




        <form action="" method="post">



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- cabecera del modal -->
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Del Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Cuerpo del modal -->
                        <div class="modal-body">

                            <div class="form-row">



                                <div class="form-group col-md-12">
                                    <label for="id_cliente">Numero Documento</label>
                                    <input type="text" class="form-control" require name="id_cliente" id="id_cliente" placeholder="Documento" value="<?php echo $id_cliente ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nom_cli">Nombre(s)</label>
                                    <input type="text" class="form-control" require name="nom_cli" id="nom_cli" placeholder="" value="<?php echo $nom_cli ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="ape_cli">Apellido(s) </label>
                                    <input type="text" class="form-control" require name="ape_cli" id="ape_cli" placeholder="" value="<?php echo $ape_cli ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="tel_cli">Telefono </label>
                                    <input type="text" class="form-control" require name="tel_cli" id="tel_cli" placeholder="" value="<?php echo $tel_cli ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="dir_cli">Direccion</label>
                                    <input type="text" class="form-control" require name="dir_cli" id="dir_cli" placeholder="" value="<?php echo $dir_cli ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="correo_cli">Correo</label>
                                    <input type="text" class="form-control" require name="correo_cli" id="correo_cli" placeholder="" value="<?php echo $correo_cli ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="fech_naci">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" require name="fech_naci" id="fech_naci" placeholder="" value="<?php echo $fech_naci ?>">
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
                Agregar Cliente
            </button>





        </form>
        <!-- Final del Formulario -->


        <div class="row">


            <table class="table table-hover table-bordered">

                <thead class="thead-dark">

                    <tr>

                        <th scope="col">Identificacion</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha Nacimiento</th>

                        <th scope="col">Seleccionar</th>
                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php
                    /* Prefunto que si la variable listaClientes tiene algun contenido */
                    if ($listaClientes->num_rows > 0) {

                        foreach ($listaClientes as $cliente) {

                    ?>

                            <tr>



                                <td> <?php echo $cliente['id_cliente']        ?> </td>
                                <td> <?php echo $cliente['nom_cli']    ?> </td>
                                <td> <?php echo $cliente['ape_cli'] ?> </td>
                                <td> <?php echo $cliente['tel_cli'] ?> </td>
                                <td> <?php echo $cliente['dir_cli']    ?> </td>
                                <td> <?php echo $cliente['correo_cli']    ?> </td>
                                <td> <?php echo $cliente['fech_naci']    ?> </td>




                                <!-- Este Formulario se utiliza para editar los registros -->
                                <form action="" method="post">

                                    <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente'];  ?>">
                                    <input type="hidden" name="nom_cli" value="<?php echo $cliente['nom_cli'];  ?>">
                                    <input type="hidden" name="ape_cli" value="<?php echo $cliente['ape_cli'];  ?>">
                                    <input type="hidden" name="tel_cli" value="<?php echo $cliente['tel_cli'];  ?>">
                                    <input type="hidden" name="dir_cli" value="<?php echo $cliente['dir_cli'];  ?>">
                                    <input type="hidden" name="correo_cli" value="<?php echo $cliente['correo_cli'];  ?>">
                                    <input type="hidden" name="fech_naci" value="<?php echo $cliente['fech_naci'];  ?>">


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