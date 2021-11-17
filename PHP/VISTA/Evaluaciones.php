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
            <h2>Categorías de Admisión</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <form class="row centrar-content">
                <div class="col-1">
                    <label for="espec" >Periodo</label>
                </div>
                <div class="col-2">
                    <select class="form-control" name="espec" id="espec">
                        <option value="2020">2020(Escolar)</option>
                        <option value="2021">2021(Escolar)</option>
                        <option value="2022">2022(Escolar)</option>
                    </select>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                </div>
            </form>
            <table class="table tprincipal table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Descripción Nota 1</th>
                        <th scope="col">Descripción Nota 2</th>
                        <th scope="col">Descripción Nota 3</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Guitarra</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><button data-toggle="modal" data-target="#modaledit" class='btn btn-success'>Editar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Violín</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><button data-toggle="modal" data-target="#modaledit" class='btn btn-success'>Editar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Violonchelo</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><button data-toggle="modal" data-target="#modaledit" class='btn btn-success'>Editar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><button data-toggle="modal" data-target="#modaladd" class='btn btn-success'>Nuevo</button></th>
                    </tr>
                </tbody>
            </table>

    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Categorías</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                <form action="" class='formulario'>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Especialidad</label>
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
                                    <label for="">Nota 1</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripción" />
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Nota 2</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripción" />
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Nota 3</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripción" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Categorías</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                <form action="" class='formulario'>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Especialidad</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option selected value="">Guitarra</option>
                                        <option value="">Violin</option>
                                        <option value="">Violonchelo</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Nota 1</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripcion" />
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Nota 2</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripcion" />
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Nota 3</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Descripcion" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "Extensiones/Pie.php"; ?>
</body>

</html>