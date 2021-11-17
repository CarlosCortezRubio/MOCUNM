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
            <h2>Estudiantes</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
        <div class=''>
            <table class="table tprincipal table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Correo</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Especialidad</th>
                    
                        <th scope="col">Evaluación<br>Oral</th>
                        <th scope="col">Evaluación<br>de Conocimiento</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Juan Perez Carlos</td>
                        <td>juanit_12@gmail.com</td>
                        <td>71563694</td>
                        <td>Guitarra</td>
                        
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/tabla.php">Visualizar</a></td>
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/Examen.php">Visualizar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Pablo Marmol Diaz</td>
                        <td>pablito_34@gmail.com</td>
                        <td>71563694</td>
                        <td>Violin</td>
                        
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/tabla.php">Visualizar</a></td>
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/Examen.php">Visualizar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Pedro Picapiedra Rocadura</td>
                        <td>pedrito@gmail.com</td>
                        <td>71563694</td>
                        <td>Violonchelo</td>
                    
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/tabla.php">Visualizar</a></td>
                        <td><a class='btn btn-success' href="/MOCUNM/PHP/VISTA/Examen.php">Visualizar</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <?php include "Extensiones/Pie.php"; ?>
</body>

</html>