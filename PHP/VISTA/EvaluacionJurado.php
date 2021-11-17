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
            <h2>Evaluaciones</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        
        <BR></BR>
        <form class="table row ">
            <div class=" col-md col-sm col-xs">
                <label for="">Programa de Estudio</label>
                <select class="browser-default custom-select">
                    <option >Todos</option>
                    <option value="">Guitarra-Escolar(2019)</option>
                    <option value="">Violín-Escolar(2019)</option>
                    <option value="">Violonchelo-Escolar(2019)</option>
                </select>
            </div>
           
          
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
                    <th scope="col">Programa de Estudio</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Tiempo</th>
                    <th scope="col">Modalidad</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody style='font-size:15px'>
                <tr>
                    <th scope="row">1</th>
                    <td>Guitarra-Escolar(2021)</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>
                        <button class='btn btn-primary'data-toggle="modal" data-target="#modalplus"><i class="fa fa-pencil" aria-hidden="true"></i>Evaluar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Violín-Escolar(2021)</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>
                        <button class='btn btn-primary'data-toggle="modal" data-target="#modalplus"><i class="fa fa-pencil" aria-hidden="true"></i>Evaluar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Violonchelo-Escolar(2021)</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>
                        <button class='btn btn-primary'data-toggle="modal" data-target="#modalplus"><i class="fa fa-pencil" aria-hidden="true"></i>Evaluar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Violonchelo-Escolar(2021)</td>
                    <td>2021-02-23 12:30:00 - 13:30:00</td>
                    <td>150 min</td>
                    <td>Presencial</td>
                    <td>AULA 12-A</td>
                    <td>
                        <button class='btn btn-primary'data-toggle="modal" data-target="#modalplus"><i class="fa fa-pencil" aria-hidden="true"></i>Evaluar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="modal fade show" id="modalplus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
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
                                <div class="col centrar-content">
                                    <label>Alumno</label> 
                                </div>
                                <div class="col centrar-content">
                                    <label>Llego a entonar a un DO mayor</label> 
                                </div>
                                <div class="col centrar-content">
                                    <label>Llego a entonar a un DO menor</label> 
                                </div>
                                <div class="col centrar-content">
                                    <label>Llego a entonar a un RE mayor</label> 
                                </div>
                                <div class="col centrar-content">
                                    <label>Llego a entonar a un RE menor</label> 
                                </div>
                            </div>
                        </div>
                        <div class='col-1'></div>
                    </div>
                    <hr  width="100%" size="5" noshade>
                    <div class='row'>
                        <div class='col-1'></div>
                        <div id='categoria' class='col'>
                            <div class="row">
                                <div class="col centrar-content">
                                    <label>Alumno 1</label> 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col centrar-content">
                                    <label>Alumno 2</label> 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col centrar-content">
                                    <label>Alumno 3</label> 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col centrar-content">
                                    <label>Alumno 4</label> 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                                <div class="col centrar-content">
                                    <input class="form-control" type="number" > 
                                </div>
                            </div>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
                <div class="modal-footer centrar-content">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class='row'></div>
    <?php include "Extensiones/Pie.php"; ?>
    <script src="/MOCUNM/JS/Examen.js"></script>
</body>
</html>