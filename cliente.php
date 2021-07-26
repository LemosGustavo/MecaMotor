<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <style>
            body{
                font-family: "Verdana", Times, serif;
            }
            #veryactive{
                color:white;
            }
            #mainbody{
                width:80%;
                margin-left:10%;
            }
        </style>
        <title>Mecanica Barahona</title>
        <link type="image/x-icon" href="imagenes/Car_with_Wrench_red_16.ico" rel="icon" />
    </head>
    <body>
        <section>		
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="veryactive" href="system.php">Inicio</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                        <ul class="nav navbar-nav">

                            <li><a href="cliente.php">Clientes</a></li>
                            <!--  <li><a href="servicios.php">Servicios</a></li>-->
                            <li><a href="vehiculo.php">Vehiculos</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proveedores y mecánicos <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="proveedor.php">Proveedores de Repuestos</a></li>
                                    <li><a href="repuesto.php">Repuestos</a></li>
                                    <li><a href="herramienta.php">Herramientas</a></li>
                                    <li class="divider"></li>
                                    <li><a href="mecanicos.php">Mecánicos</a></li>

                                </ul>
                            </li>

                            <li><a href="Ordenes.php">Solicitudes y Ordenes de reparación</a></li>
                            <li><a href="hacerConsulta.php">Hacer Consulta</a></li>
                            <li><a href="About.php">Integrantes</a></li>
                            <li><a href="index.HTML">Salir</a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>

        <div class="jumbotron">
            <center>
                <div>

                    <a  class="btn btn-primary btn-md" href="system.php" role="button">Volver</a>
                </div>
            </center>
            <div class="container">
                <h1>MecaMotor</h1>
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#miventana" role="button">Agregar Cliente</button>  

                <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Agregar Cliente</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="agreCliente.php">
                                    <div class="form-group">
                                        <label for="cuilC" class="col-lg-2 control-label">cuil_cuitCliente:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="cuilC" placeholder="Ingrese cuil/cuit del Cliente" required autofocus  style="width:300px;"></input> <br>
                                        </div>

                                        <label for="nombreC" class="col-lg-2 control-label">Nombre del Cliente: </id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombreC" placeholder="Ingrese nombre del Cliente" required autofocus  style="width:300px;"></input> <br>
                                        </div>                

                                        <label for="localidadC" class="col-lg-2 control-label">Localidad:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="localidadC" placeholder="Ingrese localidad" required autofocus  style="width:300px;"></input><br>
                                        </div>  

                                        <label for="calleC" class="col-lg-2 control-label">Calle: </id></label> 
                                        <div class="col-lg-10">  
                                            <input type="text" class="form-control" name="calleC" placeholder="Ingrese calle" required autofocus  style="width:300px;"></input> <br>
                                        </div>

                                        <label for="numeroC" class="col-lg-2 control-label">Número: </id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="numeroC" placeholder="Ingrese número" required autofocus  style="width:300px;"></input> <br>
                                        </div>                
                                        <label for="telefono" class="col-lg-2 control-label">Teléfono: </id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="telefono" placeholder="Ingrese número de teléfono" required autofocus  style="width:300px;"></input> <br>
                                        </div>               

                                        <!--  <div class="form-group">
                                           <div class="col-lg-10 col-lg-offset-2">
                                             
                                               <button type="submit" class="btn btn-primary">Agregar</button>
                                             
                                             <button type="reset" class="btn btn-default">Cancelar</button> 
                                           </div>
                                         </div>  -->



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" >Guardar Cambios</button><!-- <a  class="btn btn-primary" href="agreCliente.php" role="button">Guadar Cambios</a> -->
                                    </div>
                                </form>  
                            </div>

                        </div>
                    </div>

                </div>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                                <th>Nombre del Cliente</th>
                                <th>cuil o cuit</th>
                                <th>Localidad</th>
                                <th>calle</th>
                                <th>numero</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody ><?php
                            include "lib/adaptador.php";
                            $link = Conectarse();

                            $tabla = mysql_query("SELECT * FROM cliente");
                            while ($filaTabla = mysql_fetch_array($tabla)) {
                                ?> 

                                <tr>
                                    <td><?php echo $filaTabla['nombreCliente'] ?></td>
                                    <td><?php echo $filaTabla['cuil_cuitCliente'] ?></td>
                                    <td><?php echo $filaTabla['localidad'] ?></td>
                                    <td><?php echo $filaTabla['calle'] ?></td>
                                    <td><?php echo $filaTabla['numero'] ?></td>
                                    <td><?php echo $filaTabla['telefonoCliente'] ?></td>
                                </tr>

                            </tbody>
                        <?php } ?> 
                    </table> 
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery.js"></script>	  
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	
        <script src="js/bootstrap.min.js"></script>    
        
    </body>
</html>