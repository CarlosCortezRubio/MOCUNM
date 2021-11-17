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
            <h2>EXAMEN DE ADMISIÓN UNM 2022</h2> 
            <h2>PRUEBA TIPO DE CULTURA GENERAL</h2>
            <hr  width="100%" size="5" noshade>  
        </div>

        <h3>Lee atentamente las preguntas y marca la alternativa que corresponde.</h3>

        <form>
            <div class="form-group">
                <div class='pregunta' id='pregunta1'> <h3><label>1.	¿El primer ser humano en el espacio fue?</label></h3></div>
                <div class='container'>
                    <div class='row' >                       
                        <div class='col-1' ></div>
                        <div class="form-check  col">
                            <input type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="materialExampleRadios">
                            <label class="respuesta1 form-check-label" for="0101">Yuri Gagarin</label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0102">Neil Armstrong</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0103">Alan Shepard</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label" for="0104">Valentina Tereshkova</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                   
                </div>
            </div>
            <!----------------->
            <div class="form-group">
                <div class='pregunta' id='pregunta2'> <h3><label>2.	¿Ricardo Palma es famoso por cuál género literario?</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" value="A" id="0201" value="1" name="respuesta2">
                            <label class="form-check-label" for="0201">Rimas</label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" value="B" id="0202" value="2" name="respuesta2" >
                            <label class="form-check-label " for="0202">Tradiciones</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" value="C" id="0203" value="3" name="respuesta2" >
                            <label class="form-check-label" for="0203">Cuentos</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" value="D" id="0204" value="4" name="respuesta2" >
                            <label class="form-check-label" for="0204">Ensayos</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>
            <!---------------->
            <div class="form-group">
                <div class='pregunta'  id='pregunta3'> <h3><label>3. ¿Cuando hablamos del Día D nos referimos a?</label></h3></div>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <div class='row'>                       
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="materialExamplecheckboxs">
                                    <label class="respuesta3 form-check-label" for="0301">El ataque a Pearl Harbor</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="materialExamplecheckboxs" >
                                    <label class="respuesta3 form-check-label" for="0302">El desembarco en Normandía</label>
                                </div> 
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="materialExamplecheckboxs" >
                                    <label class="respuesta3 form-check-label" for="0303">El lanzamiento de la primera bomba atómica</label>
                                </div> 
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="materialExamplecheckboxs" >
                                    <label class="respuesta3 form-check-label" for="0304">La muerte de Hitler</label>
                                </div> 
                            </div>

                        </div>
                        <!--<div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/audio_prueba.mp3" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class='pregunta' id='pregunta4'> <h3><label>4. ¿Qué pintor pasó por los periodos azul y rosa?</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta4 form-check-input" value="A" id="0401" value="1" name="respuesta4">
                            <label class="form-check-label" for="0401">Gustav Klimt</label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta4 form-check-input" value="B" id="0402" value="2" name="respuesta4" >
                            <label class="form-check-label " for="0402">Claude Monet</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="C" id="0403" value="3" name="respuesta4" >
                            <label class="form-check-label" for="0403">Pablo Picasso</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="D" id="0404" value="4" name="respuesta4" >
                            <label class="form-check-label" for="0404">Pierre-Auguste Renoir</label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>

            <!------------------->
            <!--<div class="form-group">
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
            </div>-->
            <!----------------->
            <!--<div class="form-group">
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
            </div>-->
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