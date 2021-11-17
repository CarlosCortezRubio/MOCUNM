<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Extensiones/Cabeza.php"; ?>
    <link rel="stylesheet" href="/MOCUNM/CSS/Examen.css">
    <link rel="stylesheet" href="/MOCUNM/CSS/preguntas.css">
</head>
<body>
    <?php include "Extensiones/menu.php"; ?>
    
    <div class="container col-10 card card-primary card-outline elevation-2">
        <div id='title'>
            <hr  width="100%" size="5" noshade>  
            <h2>Registro de preguntas</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <form>
            <div class='row' id='agregar' >    
                <div class='col-2 ' ></div>                   
                <div class="input-group regiresp col ">
                    <div class="input-group-prepend">
                        <button class="btn btn-success" onclick='AgregarPregunta($("#tipo").val(),"#examen","#inputpregunta");' type="button">+</button>
                    </div>
                    <input type="text" id='inputpregunta' class="form-control" placeholder="Ingrese una Pregunta" aria-label="" aria-describedby="basic-addon1">
                    <select name="tipo" id="tipo">
                        <option value="1">Una sola respuesta</option>
                        <option value="2">Una o mas respuestas</option>
                        <option value="3">Una sola respuesta con audio</option>
                        <option value="4">Texto de respuesta</option>
                        <option value="5">Verdadero y falso</option>
                    </select>
                </div>
                <div class='col-2' ></div>
            </div>
            <div id='examen'>

            </div>
            
            <!------------------------->
            <!--<div class="form-group">
                <div class='pregunta' id='pregunta6'> <h3><label>pregunta 6: Imagenes movibles</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="col-3">
                            <div class='form-check solucion cuadro row'>
                                <img src="/MOCUNM/IMAGEN/platano.jpg" class="img-fluid img1" height="200" width="150" alt="">
                            </div>
                            <div class='form-check solucion cuadro row'>
                                <img src="/MOCUNM/IMAGEN/platanorojo.jpg" class="img-fluid img1" height="200" width="150" alt="">
                            </div>
                            <div class='form-check solucion cuadro row'>
                                <img src="/MOCUNM/IMAGEN/platanoverde.jpg" class="img-fluid img1" height="200" width="150" alt="">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                        <div class="col">
                            <div class='cuadro row' >
                                <div class='form-check respuesta6 solucion pegado col-4' >
                                    <input type="hidden" class="comp6">
                                </div>
                                 <div class='centrar-content col' >
                                    <label class="form-check-label col" for="0201">Pregunta 1</label>
                                </div>
                            </div>
                            <div class='cuadro row' >
                                <div class='form-check solucion respuesta6  pegado col-4' >
                                    <input type="hidden" class="comp6">
                                </div>
                                 <div class='centrar-content col' >
                                    <label class="form-check-label col" for="0201">Pregunta 2</label>
                                </div>
                            </div>
                            <div class='cuadro row' >
                                <div class='form-check solucion respuesta6  pegado col-4' >
                                    <input type="hidden" class="comp6">
                                </div>
                                 <div class='centrar-content col' >
                                    <label class="form-check-label col" for="0201">Pregunta 3</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class='col-1' >
                            <button type="button" id='refresh' class="btn btn-default form-check btn-circle btn-xl"><i class="fa fa-refresh"></i></button>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>-->
            <br>
            <br>
            <br>
            <div class='centrar-content row'>
                <a type="submit" class="btn btn-success col-2" href="https://academica360-beta.unm.edu.pe/admisionweb/Examen">Grabar Respuestas</a>
                <div class='col-1'></div>
                <a type="submit" class="btn btn-danger col-2" href="https://academica360-beta.unm.edu.pe/admisionweb/Examen">Cancelar</a>
            </div>
        </form>
    </div>
    <?php include "Extensiones/Pie.php"; ?>
    <script src="/MOCUNM/JS/Pregunta.js"></script>
</body>
</html>