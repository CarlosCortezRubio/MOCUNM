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
            <h2>Universidad Nacional de Música</h2> 
            <h4>Sección de Estudios Superiores </h4>
            <h5>Admisión 2022 Prueba de </h5>
            <h5>Audioperceptiva - A  </h5>
            <hr  width="100%" size="5" noshade>  
        </div>

        <h5>1. Dictado a dos voces. </h5>
        <h5>Tonalidad: La mayor  </h5>

        <div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/Audio 1.mpeg" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/Audio 1.mpeg" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/Audio 1.mpeg" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>
                        <br>
        <form>
            <div class="form-group">
                <div class='pregunta' id='pregunta1'> <h3><label>Marque la opción que considere corresponde al fragmento escuchado</label></h3></div>
                <div class='container'>
                    <div class='row' >                       
                        <div class='col-1' ></div>
                        <div class="form-check  col">
                            <input type="radio" class="respuesta1 form-check-input" value="A" id="0101" name="materialExampleRadios">
                            <label class="respuesta1 form-check-label justify-content-center" for="0101"> <img src="/MOCUNM/preguntas/1-1.jpg" alt="" style="height:100%; width:100%;"></label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="B" id="0102" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0102"> <img src="/MOCUNM/preguntas/1-2.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="C" id="0103" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0103"> <img src="/MOCUNM/preguntas/1-3.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="radio" class="respuesta1 form-check-input" value="D" id="0104" name="materialExampleRadios" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0104"> <img src="/MOCUNM/preguntas/1-4.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                   
                </div>
            </div>
            <!----------------->


            <h5>2. Reconocimiento de progresión armónica</h5>
            <h5>Tonalidad: Do menor</h5>

            <div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/Audio 2.mpeg" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/Audio 2.mpeg" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/Audio 2.mpeg" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>
                        <br>

            <div class="form-group">
                <div class='pregunta' id='pregunta2'> <h3><label>Marque la opción que considere corresponde a la progresión armónica escuchada. </label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" value="A" id="0201" value="1" name="respuesta2">
                            <label class="respuesta1 form-check-label justify-content-center" for="0201"> <img src="/MOCUNM/preguntas/2-1.png" alt="" style="height:100%; width:100%;"></label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta2 form-check-input" value="B" id="0202" value="2" name="respuesta2" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0202"> <img src="/MOCUNM/preguntas/2-2.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" value="C" id="0203" value="3" name="respuesta2" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0203"> <img src="/MOCUNM/preguntas/2-3.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" value="D" id="0204" value="4" name="respuesta2" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0204"> <img src="/MOCUNM/preguntas/2-4.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta2" value="E" id="0205" value="4" name="respuesta2" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0205"> <img src="/MOCUNM/preguntas/2-5.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                </div>
            </div>
            <!---------------->

            <h5>3. Dictado a dos voces</h5>
            <h5>Tonalidad: Fa mayor </h5>

            <div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/Audio 3.mpeg" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/Audio 3.mpeg" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/Audio 3.mpeg" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>
                        <br>

            <div class="form-group">
                <div class='pregunta'  id='pregunta3'> <h3><label>3. Marque la opción que considere corresponde al fragmento escuchado </label></h3></div>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <div class='row'>                       
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="A" id="0301" name="materialExamplecheckboxs">
                                    <label class="respuesta1 form-check-label justify-content-center" for="0301"> <img src="/MOCUNM/preguntas/3-1.png" alt="" style="height:100%; width:100%;"></label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="B" id="0302" name="materialExamplecheckboxs" >
                                    <label class="respuesta1 form-check-label justify-content-center" for="0302"> <img src="/MOCUNM/preguntas/3-2.png" alt="" style="height:100%; width:100%;"></label>
                                </div> 
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="C" id="0303" name="materialExamplecheckboxs" >
                                    <label class="respuesta1 form-check-label justify-content-center" for="0303"> <img src="/MOCUNM/preguntas/3-3.png" alt="" style="height:100%; width:100%;"></label>
                                </div> 
                            </div>
                            <div class='row'>
                                <div class='col-1' ></div>
                                <div class="form-check col">
                                    <input type="radio" class="respuesta3 form-check-input" value="D" id="0304" name="materialExamplecheckboxs" >
                                    <label class="respuesta1 form-check-label justify-content-center" for="0304"> <img src="/MOCUNM/preguntas/3-4.png" alt="" style="height:100%; width:100%;"></label>
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

            <h5>4.	Reconocimiento de progresión armónica. </h5>
            <h5>Tonalidad: Do mayor  </h5>

            <div class='centrar-content col'>
                            <audio controls>
                                <source src="/MOCUNM/AUDIO/Audio 4.mpeg" type="audio/ogg">
                                <source src="/MOCUNM/AUDIO/Audio 4.mpeg" type="audio/mpeg">
                                <source src="/MOCUNM/AUDIO/Audio 4.mpeg" type="audio/wav">
                                
                                    <object type="application/x-shockwave-flash" data="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <param name="movie" value="player.swf?miArchivo=mi-archivo-de-audio.mp3">
                                        <a href="mi-archivo-de-audio.mp3">Descárgate aquí mi archivo de audio</a>
                                </object>
                            </audio>
                        </div>
                        <br>
            <div class="form-group">
                <div class='pregunta' id='pregunta4'> <h3><label>Marque la opción que considere corresponde a la progresión armónica escuchada.</label></h3></div>
                <div class='container'>
                    <div class='row'>                       
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta4 form-check-input" value="A" id="0401" value="1" name="respuesta4">
                            <label class="respuesta1 form-check-label justify-content-center" for="0401"> <img src="/MOCUNM/preguntas/4-1.png" alt="" style="height:100%; width:100%;"></label>
                        </div>
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="respuesta4 form-check-input" value="B" id="0402" value="2" name="respuesta4" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0402"> <img src="/MOCUNM/preguntas/4-2.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="C" id="0403" value="3" name="respuesta4" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0403"> <img src="/MOCUNM/preguntas/4-3.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="D" id="0404" value="4" name="respuesta4" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0404"> <img src="/MOCUNM/preguntas/4-4.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="E" id="0405" value="4" name="respuesta4" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0405"> <img src="/MOCUNM/preguntas/4-5.png" alt="" style="height:100%; width:100%;"></label>
                        </div> 
                        <div class='col-1' ></div>
                    </div>
                    <div class='row'>
                        <div class='col-1' ></div>
                        <div class="form-check col">
                            <input type="checkbox" class="form-check-input respuesta4" value="F" id="0406" value="4" name="respuesta4" >
                            <label class="respuesta1 form-check-label justify-content-center" for="0406"> <img src="/MOCUNM/preguntas/4-6.png" alt="" style="height:100%; width:100%;"></label>
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