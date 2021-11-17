<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Extensiones/Cabeza.php"; ?>
    <link rel="stylesheet" href="/MOCUNM/CSS/Examen.css">
    <style>
    .container{
      margin:0 auto;
      text-align: center
    }
  </style>
</head>
<body>
    <?php include "Extensiones/menu.php"; ?>
    <div class='container'>
        <div class='row'>
            <div class="col card card-primary card-outline elevation-2">
                <div id='title'>
                    <hr  width="100%" size="5" noshade>  
                    <h5>Examen de sabiduría</h5>
                    <hr  width="100%" size="5" noshade>  
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <div class="container">
                                <h5></h5>
                                <input type="text" value="0" class="dial">
                            </div>
                        </div>
                        <div class='col'>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-calendar" aria-hidden="true"> Fecha de resolución:</i>
                                        <p class="card-text">2021/01/16</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-laptop" aria-hidden="true"> Modalidad:</i>
                                        <p class="card-text">Virtual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-clock-o" aria-hidden="true"> Hora de Inicio:</i>
                                        <p class="card-text">12:30</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-clock-o" aria-hidden="true"> Hora de Fin:</i>
                                        <p class="card-text">15:30</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fa fa-circle-o-notch" aria-hidden="true"> Tiempo de resolución:</i>
                                        <p class="card-text">120 min.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class='centrar-content'>
                            <a type="submit" class="btn btn-success" href="/MOCUNM/PHP/VISTA/Alumnos    .php">Ingresar</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class='col-1'></div>
            <div class="col card card-primary card-outline elevation-2">
                <div id='title'>
                    <hr  width="100%" size="5" noshade>  
                    <h5>Exámen demostrativo</h5>
                    <hr  width="100%" size="5" noshade>  
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col'>
                            <div class="container">
                                <h5></h5>
                                <input type="text" value="0" class="dial">
                            </div>
                        </div>
                        <div class='col'>
                        <div class="card-columns">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-calendar" aria-hidden="true"> Fecha de resolución:</i>
                                    <p class="card-text">2021/01/13</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-laptop" aria-hidden="true"> Modalidad:</i>
                                    <p class="card-text">Presencial</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-columns">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-clock-o" aria-hidden="true"> Hora de Inicio:</i>
                                    <p class="card-text">08:30</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-clock-o" aria-hidden="true"> Hora de Fin:</i>
                                    <p class="card-text">11:30</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-circle-o-notch" aria-hidden="true"> Tiempo de resolución:</i>
                                    <p class="card-text">150 min.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div class='centrar-content'>
                        <a type="submit" class="btn btn-success" href="/MOCUNM/PHP/VISTA/Alumnos    .php">Ingresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "Extensiones/Pie.php"; ?>
    <script>
    $(document).ready(function() {
      $('.dial').knob({
        'min':0,
        'max':100,
        'width':"100%",
        'height':"100%",
        'fgColor':"#66CC66",
        'angleOffset':-125,
        'angleArc':250,
        'rotation':'anticlockwise',
        'release':function(v) {$("p").text(v);},
        'readOnly':true
      });
    });
  </script>
    <script src="/MOCUNM/JS/Examen.js"></script>
</body>
</html>