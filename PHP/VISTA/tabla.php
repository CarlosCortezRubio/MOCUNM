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
            <h2>Exposición de Tesis</h2>
            <hr  width="100%" size="5" noshade>  
        </div>
            <table class="table tprincipal table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jurado</th>
                        <th scope="col">Nota1</th>
                        <th scope="col">Nota2</th>
                        <th scope="col">Nota3</th>
                        <th scope="col">Nota Final</th>
                        <th scope="col">Link del video</th>
                        <th scope="col">Observación</th>
                        <th scope="col">Modificar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Juan Perez Carlos</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td> <a href="https://www.youtube.com/"><img src='/MOCUNM/IMAGEN/video.jpg' height="50" width="100" ></a></td>
                        <td>-</td>
                        <td><a class='btn btn-primary' href="/MOCUNM/PHP/VISTA/Principal.php">Modificar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Pablo Marmol Diaz</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td> <a href="https://www.youtube.com/"><img src='/MOCUNM/IMAGEN/video.jpg' height="50" width="100" ></a></td>
                        <td>-</td>
                        <td><a class='btn btn-primary' href="/MOCUNM/PHP/VISTA/Principal.php">Modificar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Pedro Picapiedra Rocadura</td>
                        <td>16</td>
                        <td>16</td>
                        <td>15</td>
                        <td>16</td>
                        <td> <a href="https://www.youtube.com/"><img src='/MOCUNM/IMAGEN/video.jpg' height="50" width="100" ></a></td>
                        <td>-</td>
                        <td><a class='btn btn-primary' href="/MOCUNM/PHP/VISTA/Principal.php">Modificar</a></td>
                    </tr>
                    <tr >
                        <td>-</td>
                        <td colspan="4">
                            <select name="" id="">
                                <option value="0">---Seleccione---</option>
                                <option value="Pedro Picapiedra Rocadura">Pedro Picapiedra Rocadura</option>
                                <option value="Pablo Marmol Diaz">Pablo Marmol Diaz</option>
                                <option value="Juan Perez Carlos">Juan Perez Carlos</option>
                            </select>
                        </td>
                        <td style=”text-align:center” colspan="4"><button class='btn btn-success'>Agregar</button></td>
                    </tr>
                </tbody>
            </table>
    </div>

    <?php include "Extensiones/Pie.php"; ?>
    <script>
        $
    </script>
</body>

</html>