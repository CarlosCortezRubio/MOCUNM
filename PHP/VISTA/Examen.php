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
            <h2>Nombre del examen aquí</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <form>
            <div class="form-group">
                <div class='pregunta' id='pregunta1'> <h3><label>pregunta 1: solo una respuesta correcta</label></h3></div>
                <div class='container'>
                    <div class='row' >                       
                        <div class='col-1' ></div>
                        <div class="form-check  col">
                            <input type="radio" class="respuesta1 form-check-input" id="0101" name="materialExampleRadios">
                            <label class="respuesta1 form-check-label" for="0101">Respuesta 1</label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" id="0102" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0102">Respuesta 2</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" id="0103" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0103">Respuesta 3</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" id="0104" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0104">Respuesta 4</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" id="0105" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0105">Respuesta 5</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>
            <!----------------->
            <div class="form-group">
                <div class='pregunta' id='pregunta2'> <h3><label>pregunta 2: mas de una respuesta correcta</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" id="0201" value="1" name="respuesta2">
                            <label class="form-check-label" for="0201">Respuesta 1</label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" id="0202" value="2" name="respuesta2" >
                            <label class="form-check-label " for="0202">Respuesta 2</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" id="0203" value="3" name="respuesta2" >
                            <label class="form-check-label" for="0203">Respuesta 3</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" id="0204" value="4" name="respuesta2" >
                            <label class="form-check-label" for="0204">Respuesta 4</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" id="0205" value="5" name="respuesta2" >
                            <label class="form-check-label" for="0205">Respuesta 5</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>
            <!---------------->
            <div class="form-group">
                <div class='pregunta'  id='pregunta3'> <h3><label>pregunta 3: Respuesta con audio</label></h3></div>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <div class='row'>                       
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" id="0401" name="materialExamplecheckboxs">
                                    <label class="respuesta3 form-check-label" for="0401">Respuesta 1</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" id="0402" name="materialExamplecheckboxs" >
                                    <label class="respuesta3 form-check-label" for="0402">Respuesta 2</label>
                                </div> 
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" id="0403" name="materialExamplecheckboxs" >
                                    <label class="respuesta3 form-check-label" for="0403">Respuesta 3</label>
                                </div> 
                            </div>
                        </div>
                        <div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------->
            <div class="form-group">
                <div class='pregunta' id='pregunta4'> <h3><label>pregunta 4: Respuesta en texto</label></h3></div>
                <div class='container'>
                    <div class='centrar-content row'>
                        <div class='col-1'></div>
                        <div class='col-8' >
                            <textarea class="respuesta4 form-control rounded-0" name="" id="" rows="5"></textarea>
                        </div>
                        <div class='col-1'></div>
                    </div>
                </div>
            </div>
            <!----------------->
            <div class="form-group">
                <div class='pregunta' id='pregunta5'> <h3><label>pregunta 5: Verdadero y Falso</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="col">
                            <div class='row'>
                                <label class="titlecenter col" >Preguntas</label>
                                <label class="titlecenter col" >Verdadero</label>
                                <label class="titlecenter col" >Falso</label>
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col">Pregunta 1</label>
                                <input type="radio" class="col respuesta5" name="0501">
                                <input type="radio" class="col respuesta5" name="0501">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col" >Pregunta 2</label>
                                <input type="radio" class="col respuesta5" name="0502">
                                <input type="radio" class="col respuesta5" name="0502">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col" >Pregunta 3</label>
                                <input type="radio" class="col respuesta5" name="0503">
                                <input type="radio" class="col respuesta5" name="0503">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col" >Pregunta 4</label>
                                <input type="radio" class="col respuesta5" name="0504">
                                <input type="radio" class="col respuesta5" name="0504">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col" >Pregunta 5</label>
                                <input type="radio" class="col respuesta5" id="0505" name="0505">
                                <input type="radio" class="col respuesta5" id="0505" name="0505">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <div class=' row'>
                                <label class="form-check-label col" >Pregunta 6</label>
                                <input type="radio" class="col respuesta5" id="0506" name="0506">
                                <input type="radio" class="col respuesta5" id="0506" name="0506">
                            </div>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>
            <!------------------------->
            
            <div class='centrar-content'>
                <a type="submit" class="btn btn-success" href="https://academica360-beta.unm.edu.pe/Admisionin/inscripcion/ficha">Grabar Respuestas</a>
            </div>
        </form>
    </div>
    <?php include "Extensiones/Pie.php"; ?>
    <script src="/MOCUNM/JS/Examen.js"></script>
</body>
</html>