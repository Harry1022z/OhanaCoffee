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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuestro Menu</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Cuerpo del modal -->
                        <div class="modal-body">

                            <div class="form-row">



                                <div class="form-group col-md-12">
                                    <label for="id_menu">Identificacion del Menu</label>
                                    <input type="text" class="form-control" require name="id_menu" id="id_menu" placeholder="" value="<?php echo $id_menu ?>">
                                    <br>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nom_plato">Nombre del plato</label>
                                    <input type="text" class="form-control" require name="nom_plato" id="nom_plato" placeholder="" value="<?php echo $nom_plato ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="desc_plato">Decripcion del Plato</label>
                                    <input type="text" class="form-control" require name="desc_plato" id="desc_plato" placeholder="" value="<?php echo $desc_plato ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="notas_adicionales">Notas Adicionales </label>
                                    <input type="text" class="form-control" require name="notas_adicionales" id="notas_adicionales" placeholder="" value="<?php echo $notas_adicionales ?>">

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
                Agregar Plato
            </button>





        </form>
        <!-- Final del Formulario -->


        <div class="row">


            <table class="table table-hover table-bordered">

                <thead class="thead-dark">

                    <tr>

                        <th scope="col">Identificacion Plato</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Notas Adicionales Clientes</th>

                        <th scope="col">Seleccionar</th>
                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php
                    /* Prefunto que si la variable listaClientes tiene algun contenido */
                    if ($listamenus->num_rows > 0) {

                        foreach ($listamenus as $menus) {

                    ?>

                            <tr>



                                <td> <?php echo $menus['id_menu']        ?> </td>
                                <td> <?php echo $menus['nom_plato']    ?> </td>
                                <td> <?php echo $menus['desc_plato'] ?> </td>
                                <td> <?php echo $menus['notas_adicionales'] ?> </td>


                                <!-- Este Formulario se utiliza para editar los registros -->
                                <form action="" method="post">

                                    <input type="hidden" name="id_menu" value="<?php echo $menus['id_menu'];  ?>">
                                    <input type="hidden" name="nom_plato" value="<?php echo $menus['nom_plato'];  ?>">
                                    <input type="hidden" name="desc_plato" value="<?php echo $menus['desc_plato'];  ?>">
                                    <input type="hidden" name="notas_adicionales" value="<?php echo $menus['notas_adicionales'];  ?>">


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