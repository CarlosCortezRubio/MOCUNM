<!DOCTYPE html>
<html lang="en">
<head>
<?php include "PHP/VISTA/Extensiones/Cabeza.php"; ?>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <?php include "PHP/VISTA/Extensiones/menu.php"; ?>
    <div id='cuerpoprincipal'>
        <div class='container contbutton'>
            <div class='row'>
                <div class='col'></div>
                <div class='col-4 centrar-content' >
                    <!--<div class='row'>
                        <label for="">
                        BIENVENIDOS
                        </label>
                    </div>
                    <div class='row'>
                        <label for="">Sistema de Admisión</label>
                    </div>-->
                    <div class='row'>
                        <button onclick='$("#exampleModal").modal("show");' id='ingreso' >
                            Ingresar
                        </button>
                    </div>
                    
                </div>
                <div class='col' ></div>
            </div>
        </div>
        
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header border-0 mb-2">
                    <img src="/MOCUNM/IMAGEN/logo_blanco.png" alt="">
                </div>
                <div class="modal-body">
                    <h3 class="mb-4 title">Universidad Nacional de Musica</h3>
                    <div class="form-group"> <input type="text" id="email" class="form-control p-0" required style="box-shadow: none;border-radius:0px"> <label class="form-control-placeholder p-0" for="name">DNI</label> </div>
                    <div class="form-group"> <input type="password" id="password" class="form-control p-0" required style="box-shadow: none;border-radius:0px"> <label class="form-control-placeholder p-0" for="password">Contraseña</label> </div>
                </div>
                <div class="modal-footer border-0 mb-4"> <button id='btnmodal' type="button" class="btn signup col-6 col-md-6" data-dismiss="modal">Ingresar</button> </div>
            </div>
        </div>
    </div>
    <?php include "PHP/VISTA/Extensiones/Pie.php"; ?>
    <script>
       // $("#exampleModal").modal("show"); 
        $("#btnmodal").click(function(){
           // location.href = "PHP/VISTA/Extensiones/menu.php";
        });	
    </script>
</body>
</html>