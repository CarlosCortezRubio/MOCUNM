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
            <h2>Asignación de Notas</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="Nombre del Jurado">JURADO: Carlos Martines Gonzales</label>
                </select>
                </div>

                <div class="form-group">
                    <div class="row ">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <label for="">Nota1</label>
                            <input type="text" class="form-control" placeholder="Ingrese Nota" />
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <label for="">Nota2</label>
                            <input type="text" class="form-control" placeholder="Ingrese Nota" />
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <label for="">Nota3</label>
                            <input type="text" class="form-control" placeholder="Ingrese Nota" />
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <label for="">Nota Final</label>
                            <input type="text" class="form-control" placeholder="" value="15.3" disabled="" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Link del video</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese el link">
                </div>
                </br>
                <a type="submit" class="btn btn-primary" href="/MOCUNM/PHP/VISTA/tabla.php">Enviar</a>
            </form>
        </div> 
</div>
    <?php include "Extensiones/Pie.php"; ?>
</body>
</html>