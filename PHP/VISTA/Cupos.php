<!DOCTYPE html>
<html lang="en">
<head>
<?php include "Extensiones/Cabeza.php"; ?>
<link rel="stylesheet" href="/MOCUNM/CSS/Formularios.css">
</head>
<body>
    <?php include "Extensiones/menu.php"; ?>
    <div class="container col-10 card card-primary card-outline elevation-2">
        <div id='title'>
            <hr  width="100%" size="5" noshade>  
            <h2>Configuración de Cupos</h2>
            <hr  width="100%" size="5" noshade>  
        </div>

        <div class='col'>
            <button data-toggle="modal" data-target="#modaladd" class='btn btn-success'><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</button>
        </div>
        <br>
        <form class="row centrar-content">
            <div class="col-md-2 col-sm-2 col-xs-2">
            </div>
            <div class="col-md col-sm col-xs">
                <label for="">Programa de Estudio</label>
                <select class="browser-default custom-select">
                    <option >---- Seleccione -----</option>
                    <option selected value="">Guitarra</option>
                    <option value="">Violín</option>
                    <option value="">Violonchelo</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs">
                <label for="espec" >Periodo</label>
                <select class="form-control" name="espec" id="espec">
                    <option value="">---Seleccione---</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs">
                <label for="">Secciòn</label>
                <select class="browser-default custom-select">
                    <option >---- Seleccione -----</option>
                    <option value="">Superior</option>
                    <option value="">Escolar</option>
                    <option value="">Post. Escolar</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs centrar-content btn-search">
                <button type="submit" class="btn btn-info">Buscar</button>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
            </div>
        </form>
        <br>
            <table class="table tprincipal table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programa de Estudio</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">Cantidad de Cupos</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Guitarra</td>
                        <td>2019</td>
                        <td>Escolar</td>
                        <td>25</td>
                        <td>
                            <button data-toggle="modal" data-target="#modaledit" class='btn btn-primary fa fa-pencil'></button>
                            <button data-toggle="modal" data-target="#modaldelete" class='btn btn-danger fa fa-trash'></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Violin</td>
                        <td>2020</td>
                        <td>Escolar</td>
                        <td>12</td>
                        <td>
                            <button data-toggle="modal" data-target="#modaledit" class='btn btn-primary fa fa-pencil'></button>
                            <button data-toggle="modal" data-target="#modaldelete" class='btn btn-danger fa fa-trash'></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Violonchelo</td>
                        <td>2021</td>
                        <td>Escolar</td>
                        <td>12</td>
                        <td>
                            <button data-toggle="modal" data-target="#modaledit" class='btn btn-primary fa fa-pencil'></button>
                            <button data-toggle="modal" data-target="#modaldelete" class='btn btn-danger fa fa-trash'></button>
                        </td>  
                    </tr>
                </tbody>
            </table>

    </div>
    
    <!-- Modal -->
    <!----------------------------------->
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
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Programa de Estudio</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option value="">Guitarra</option>
                                        <option value="">Violín</option>
                                        <option value="">Violonchelo</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Periodo</label>
                                    <select class="form-control" name="espec" id="espec">
                                        <option >---- Seleccione -----</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Secciòn</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option value="">Superior</option>
                                        <option value="">Escolar</option>
                                        <option value="">Post. Escolar</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Cantidad Cupos</label>
                                    <input type="number" class="form-control" placeholder="Ingrese Cupos" />
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
    <!------------------------------------------>
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
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Programa de Estudio</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option selected value="">Guitarra</option>
                                        <option value="">Violín</option>
                                        <option value="">Violonchelo</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Periodo</label>
                                    <select class="form-control" name="espec" id="espec">
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Secciòn</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option value="">Superior</option>
                                        <option value="">Escolar</option>
                                        <option value="">Post. Escolar</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Cantidad Cupos</label>
                                    <input type="number" class="form-control" placeholder="Ingrese Cupos" />
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
    <!------------------------------------------->
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
                    <p>Desea eliminar la configura de cupos?</p>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------>
    <?php include "Extensiones/Pie.php"; ?>
</body>

</html>