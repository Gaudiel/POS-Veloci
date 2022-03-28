<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar clientes

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar clientes</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

                    Agregar cliente

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas">

                    <thead>

                    <tr>

                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Fecha de nacimiento</th>
                        <th>Total compras</th>
                        <th>Última compra</th>
                        <th>Ingreso al sistema</th>
                        <th>Acciones</th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>
                        <td style="width:10px">123Tamarindo</td>
                        <td>Rulas</td>
                        <td>LECR940621FY2</td>
                        <td>raulleal4@gmail.com</td>
                        <td>3322784356</td>
                        <td>aqui en la casa</td>
                        <td>21-06-1994</td>
                        <td>4</td>
                        <td>21-05-2021</td>
                        <td>21-05-2021</td>
                        <td>

                            <div class="btn-group">

                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                            </div>

                        </td>

                    </tr>


                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" ">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar cliente</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">

                    <!-- ENTRADA PARA EL NOMBRE -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-user"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre de cliente" required>

                        </div>

                    </div>

                    <!-- ENTRADA PARA EL RFC -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" min="10"  max="13" class="form-control input-lg" name="nuevoDocumento" placeholder="Ingresar RFC" required>

                        </div>

                    </div>

                    <!-- ENTRADA PARA EL EMAIL -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                            <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar correo electrónico" required>

                        </div>

                    </div>

                    <!-- ENTRADA PARA EL TELEFONO -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(99) 9999-9999'" data-mask required>

                        </div>

                    </div>

                    <!-- ENTRADA PARA EL DIRECCION -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección"  required>

                        </div>

                    </div>

                    <!-- ENTRADA PARA EL NACIMIENTO -->

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                            <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento"  required>

                        </div>

                    </div>

                </div>
                <!--=====================================
                PIE DEL MODAL
                ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar cliente</button>

                </div>

                </form>
                <?php
                $crearCliente = new ControladorClientes();
                $crearCliente -> ctrCrearClientes();
                ?>

            </div>

        </div>

    </div>
</div>
