<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Extensiones/Cabeza.php"; ?>
    <link rel="stylesheet" href="/MOCUNM/CSS/Examen.css">
</head>
<body>
    <?php include "Extensiones/menu.php"; ?>
    <div class="container col-10 card card-primary card-outline elevation-2">
        <div id='title'>
            <hr  width="100%" size="5" noshade>  
            <h2>Examenes de Admisión</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <div class='col'>
            <button data-toggle="modal" data-target="#modaladd" class='btn btn-success'><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</button>
        </div>
        <br>
        <form class="row centrar-content">
            <div class="col-md col-sm-2 col-xs-2">
            </div>
            <div class="col-md col-sm-3 col-xs-3">
                <label for="">Descripcion</label>
                <input type="text" class="form-control" name="" id="">
            </div>
            <div class="col-md col-sm-3 col-xs-3">
                <label for="espec" >Periodo</label>
                <select class="form-control" name="espec" id="espec">
                    <option value="">---Seleccione---</option>
                    <option value="2020">2020(Escolar)</option>
                    <option value="2021">2021(Escolar)</option>
                    <option value="2022">2022(Escolar)</option>
                </select>
            </div>
            <div class="col-md col-sm-2 col-xs-2 centrar-content btn-search">
                <button type="submit" class="btn btn-info">Buscar</button>
            </div>
            <div class="col-md col-sm-2 col-xs-2">
            </div>
        </form>
        <br>
        <table class="table tprincipal table-striped">
            <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Nº Preguntas</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Examen de Admisión</td>
                    <td>2020(Escolar)</td>
                    <td>120</td>
                    <td>Si</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' data-toggle="modal" data-target="#modaledit"></button>
                        <button class='btn btn-success fa fa-plus-circle' data-toggle="modal" data-target="#modalplus"></button>
                        <button class='btn btn-danger fa fa-trash' data-toggle="modal" data-target="#modaldelete"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Examen de Admisión</td>
                    <td>2020(Escolar)</td>
                    <td>120</td>
                    <td>Si</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' data-toggle="modal" data-target="#modaledit"></button>
                        <button class='btn btn-success fa fa-plus-circle' data-toggle="modal" data-target="#modalplus"></button>
                        <button class='btn btn-danger fa fa-trash' data-toggle="modal" data-target="#modaldelete"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Examen de Admisión</td>
                    <td>2020(Escolar)</td>
                    <td>120</td>
                    <td>Si</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' data-toggle="modal" data-target="#modaledit"></button>
                        <button class='btn btn-success fa fa-plus-circle' data-toggle="modal" data-target="#modalplus"></button>
                        <button class='btn btn-danger fa fa-trash' data-toggle="modal" data-target="#modaldelete"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Examen de Admisión</td>
                    <td>2020(Escolar)</td>
                    <td>120</td>
                    <td>Si</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' data-toggle="modal" data-target="#modaledit"></button>
                        <button class='btn btn-success fa fa-plus-circle' data-toggle="modal" data-target="#modalplus"></button>
                        <button class='btn btn-danger fa fa-trash' data-toggle="modal" data-target="#modaldelete"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!----Modal---->
    <!---------------------------------->
    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Editar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="" class='formulario'>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Descripción</label>
                                    <input type="text" value='Examen de Admisión' class="form-control" placeholder="Ingrese Nota" />
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Periodo</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option value="">2021(Escolar)</option>
                                        <option value="">2020(Escolar)</option>
                                        <option value="">2019(Escolar)</option>
                                    </select>
                                </div>               
                            </div>
                            <br>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>Estado</p>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Editar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Registrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="" class='formulario'>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Descripción</label>
                                    <input type="text" value='Examen de Admisión' class="form-control" placeholder="Ingrese Nota" />
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Periodo</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option value="">2021(Escolar)</option>
                                        <option value="">2020(Escolar)</option>
                                        <option value="">2019(Escolar)</option>
                                    </select>
                                </div>               
                            </div>
                            <br>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>Estado</p>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------->
    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">Eliminar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p>Desea eliminar el examen?</p>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------>
    <div class="modal fade show" id="modalplus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title">Parametros de Evaluación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class='col-1'></div>
                        <div class='col'>
                            <div class="row">
                                <div id="eva1" class="col para-eva">
                                    <div onclick="MostrarDescripcion('#eva1');" class="row desactivado centrar-content para-eva-content">
                                        <div class="col">
                                            <input type="text" required class="form-control">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" required class="form-control">
                                        </div>
                                        <div class="col-1 centrar-content">
                                            <a href="#" onclick="GuardarEva('#eva1')" class='save'><i class="fa fa-check"></i></a>
                                            <a href="#" onclick="eliminar('#eva1')" class='delete' alt='asd'><i class="fa fa-undo"></i></a>
                                        </div>
                                    </div>
                                    <div style='display:none'>
                                        <table class="subtabla table table-striped">
                                            <thead class="thead">
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Porcentaje</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  
    <!-------------------------------------->
    <?php include "Extensiones/Pie.php"; ?>
    <script src="/MOCUNM/JS/Examen.js"></script>
</body>
</html>