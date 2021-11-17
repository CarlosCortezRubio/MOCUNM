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
            <h2>Programación de Examenes de Admisión</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <div class='col'>
            <button data-toggle="modal" data-target="#modaladd" class='btn btn-success'><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</button>
        </div>
        <BR></BR>
        <form class="table row centrar-content">
            <div class="col-md col-sm col-xs">
                <label for="">Programa de Estudio</label>
                <select class="browser-default custom-select">
                    <option >Todos</option>
                    <option value="">Guitarra-Escolar(2019)</option>
                    <option value="">Violín-Escolar(2019)</option>
                    <option value="">Violonchelo-Escolar(2019)</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs">
                <label for="">Descripción</label>
                <input type="text" class='form-control' name="" id="">
            </div>
            <!--<div class="col-md col-sm col-xs">
                <label for="espec" >Periodo</label>
                <select class="form-control" name="espec" id="espec">
                    <option value="">Todos</option>
                    <option value="2020">2020(Escolar)</option>
                    <option value="2021">2021(Escolar)</option>
                    <option value="2022">2022(Escolar)</option>
                </select>
            </div>-->
            <div class="col-md col-sm col-xs">
                <label for="espec" >Modalidad</label>
                <select class="form-control" name="espec" id="espec">
                    <option value="">Todos</option>
                    <option value="2020">Virtual</option>
                    <option value="2021">Presencial</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs">
                <label for="espec" >Aula</label>
                <select class="form-control" name="espec" id="espec">
                    <option value="">Todos</option>
                    <option value="2020">AULA 12-A</option>
                    <option value="2021">AULA 12-B</option>
                    <option value="2021">AULA 13-A</option>
                    <option value="2021">AULA 13-B</option>
                    <option value="2021">AULA 14-A</option>
                    <option value="2021">AULA 14-B</option>
                    <option value="2021">AULA 15-A</option>
                </select>
            </div>
            <div class="col-md col-sm col-xs centrar-content btn-search">
                <button type="submit" class="btn btn-info">Buscar</button>
            </div>
        </form>
        <br>
        <table class="table tprincipal table-striped">
            <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Programa de Estudio</th>
                    <th scope="col">Examen</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Tiempo</th>
                    <th scope="col">Modalidad</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody style='font-size:15px'>
                <tr>
                    <th scope="row">1</th>
                    <td>Examen de Conocimiento</td>
                    <td>Guitarra-Escolar(2021)</td>
                    <td>Examen A</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <!--<td>2021-02-24 12:30:00</td>-->
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>Activo</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' aria-hidden="true"></button>
                        <button class='btn btn-danger fa fa-trash' aria-hidden="true"></button>
                        <button class='btn btn-success fa fa-plus-circle' aria-hidden="true"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Examen de Conocimiento</td>
                    <td>Violín-Escolar(2021)</td>
                    <td>Examen A</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <!--<td>2021-02-24 12:30:00</td>-->
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>Activo</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' aria-hidden="true"></button>
                        <button class='btn btn-danger fa fa-trash' aria-hidden="true"></button>
                        <button class='btn btn-success fa fa-plus-circle' aria-hidden="true"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Examen de Conocimiento</td>
                    <td>Violonchelo-Escolar(2021)</td>
                    <td>Examen B</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <!--<td>2021-02-24 12:30:00</td>-->
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>Activo</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' aria-hidden="true"></button>
                        <button class='btn btn-danger fa fa-trash' aria-hidden="true"></button>
                        <button class='btn btn-success fa fa-plus-circle' aria-hidden="true"></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Examen de Conocimiento</td>
                    <td>Violonchelo-Escolar(2021)</td>
                    <td>Examen C</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <!--<td>2021-02-24 12:30:00</td>-->
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>Activo</td>
                    <td>
                        <button class='btn btn-primary fa fa-pencil' aria-hidden="true"></button>
                        <button class='btn btn-danger fa fa-trash' aria-hidden="true"></button>
                        <button class='btn btn-success fa fa-plus-circle' aria-hidden="true"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header border-0 mb-2">
                    <h2>Modificar Examen</h2>
                </div>
                <div class="modal-body">
                    <form action="" class='formulario'>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Especialidad</label>
                                    <select class="browser-default custom-select">
                                        <option >---- Seleccione -----</option>
                                        <option selected value="">Guitarra</option>
                                        <option value="">Violín</option>
                                        <option value="">Violonchelo</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Descripción</label>
                                    <input type="text" value='Examen de Admision' class="form-control" placeholder="Ingrese Nota" />
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Inicio</label>
                                    <input type="text" value='2021-02-23 12:30:00' class="form-control datetime" placeholder="Ingrese Fecha" />
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Fin</label>
                                    <input type="text" value='2021-02-23 12:30:00' class="form-control datetime" placeholder="Ingrese Fecha"  />
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col'></div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Tiempo</label>
                                    <input type="time" value='2021-02-23 12:30:00' class="form-control" placeholder="Ingrese tiempo de respuesta" />
                                </div>
                                <div class='col'></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class='row'>
                <div class="modal-footer border-0 col"> <button id='btnmodal' type="button" class="btn signup col-12 btn-success" data-dismiss="modal">Modificar</button> </div>
                <!--<div class="modal-footer border-0 col"> <button id='btnmodal' type="button" class="btn signup col-12 btn-primary" data-dismiss="modal">Preguntas</button> </div>-->
                <div class="modal-footer border-0 col"> <button id='btnmodal' type="button" class="btn signup col-12 btn-danger" data-dismiss="modal">Cancelar</button> </div>
                </div>
            </div>
        </div>
    </div>
    <div class='row'></div>
    <?php include "Extensiones/Pie.php"; ?>
    <script src="/MOCUNM/JS/Examen.js"></script>
</body>
</html>