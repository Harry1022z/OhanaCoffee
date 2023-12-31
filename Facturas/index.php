<?php include 'codeFacturas.php'; ?>

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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Factura</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Cuerpo del modal -->
                        <div class="modal-body">

                            <div class="form-row">





                                <!-- Selector de EMPLEADOS -->
                                <div class="form-group col-md-12">

                                    <label for="id_empleado">Empleado</label>


                                    <select name="id_empleado" id="id_empleado" class="form-control">

                                        <?php

                                        if ($listaEmpleados->num_rows > 0) {
                                            foreach ($listaEmpleados as $empleado) {
                                                echo " <option value='' hidden > Seleccione el Empleado</option> ";
                                                echo " <option value='{$empleado['id_empleado']}'> {$empleado['id_empleado']} {$empleado['nombre']} {$empleado['apellido']} </option> ";
                                            }
                                        } else {

                                            echo "<h2> No tenemos resultados </h2>";
                                        }
                                        ?>
                                    </select>


                                </div>

                                <!-- FIN SELECTOR EMPLEADO -->



                                <!-- INICIO SELECTOR CLIENTE -->

                                <div class="form-group col-md-12">

                                    <label for="id_cliente ">Cliente</label>


                                    <select name="id_cliente " id="id_cliente " class="form-control">

                                        <?php

                                        if ($listaClientes->num_rows > 0)
                                            foreach ($listaClientes as $cliente) {
                                                echo " <option value='' hidden > Seleccione el Cliente</option> ";
                                                echo " <option value='{$cliente['id_cliente']}'> {$cliente['id_cliente']} {$cliente['nom_cli']} {$cliente['ape_cli']} </option> ";
                                                        } else {"<h2> No tenemos resultados </h2>";
                                        }
                                        ?>
                                    </select>


                                </div>

                                <!-- FIN SELECTOR  -->


                                    <!-- INICIO SELECTOR MENU -->

                                <div class="form-group col-md-12">

                                    <label for="id_mesa">Mesas</label>


                                    <select name="id_mesa" id="id_mesa" class="form-control">

                                        <?php

                                        if ($listamesas->num_rows > 0)
                                            foreach ($listamesas as $mesas) {
                                                echo " <option value='' hidden > Seleccione la mesa</option> ";
                                                echo " <option value='{$mesas['id_mesa']}'> {$mesas['nombre_mesa']} {$mesas['ubicacion_mesa']} {$mesas['capacidad']} </option> ";
                                                        } else {"<h2> No tenemos resultados </h2>";
                                        }
                                        ?>
                                    </select>


                                </div>

                                <div class="form-group col-md-12">

                                    <label for="id_menus">Menus</label>


                                    <select name="id_menus" id="id_menus" class="form-control">

                                        <?php

                                        if ($listamenus->num_rows > 0)
                                            foreach ($listamenus as $menu) {
                                                echo " <option value='' hidden > Seleccione el menu</option> ";
                                                echo " <option value='{$menu['id_menus']}'> {$menu['nom_plato']} {$menu['desc_plato']} </option> ";
                                                        } else {"<h2> No tenemos resultados </h2>";
                                        }
                                        ?>
                                    </select>


                                </div>



                            </div>
                        </div>

                        <!-- Pie/Footer del modal -->
                        <div class="modal-footer btn-group">
                            <div class="btn-group col-md-12">
                                <button value="btnAgregar" class="btn btn-success col-md-6 " type="submit" name="accion">Agregar</button>
                                <button value="btnCancelar" class="btn btn-primary col-md-6 " type="submit" name="accion">Cancelar</button>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!-- Boton del modal -->
            <button type="button" class="btn btn-primary col-md-12" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Factura
            </button>





        </form>
        <!-- Final del Formulario -->


        <div class="row">


            <table class="table table-hover table-bordered">

                <thead class="thead-dark">

                    <tr>

                        <th scope="col">Fecha y hora</th>
                        <th scope="col">Numero de Factura</th>
                        <th scope="col">Empleado</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Detalle</th>
 

                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php
                    /* Prefunto que si la variable listaClientes tiene algun contenido */
                    if ($listapedidos->num_rows > 0) {

                        foreach ($listapedidos as $pedidos) {

                    ?>

                            <tr>



                                <td> <?php echo $pedidos['fech_hor_pedido']  ?> </td>
                                <td> <?php echo $pedidos['id_pedido']       ?> </td>
                                <td> <?php echo $pedidos['id_empleado'] ?> </td>
                                <td> <?php echo $pedidos['id_empleado']  ?> </td>
                                <td> <?php echo $pedidos['id_mesa']     ?> </td>



                                <!-- Este Formulario se utiliza para editar los registros -->
                                <form action="" method="post">

                                    <input type="hidden" name="fech_hor_pedido" value="<?php echo $pedidos['fech_hor_pedido'];  ?>">
                                    <input type="hidden" name="id_pedido" value="<?php echo $pedidos['id_pedido'];  ?>">
                                    <input type="hidden" name="nom_cli" value="<?php echo $pedidos['id_empleado'];  ?>">
                                    <input type="hidden" name="ape_cli" value="<?php echo $pedidos['id_empleado'];  ?>">
                                    <input type="hidden" name="tel_cli" value="<?php echo $pedidos['id_mesa'];  ?>">





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