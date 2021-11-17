$(document).ready(function(){
    $(".img1").draggable();

    $(".solucion").droppable({
        drop: function (event, ui) {
            ui.draggable.addClass("dropped");
            $(this).append(ui.draggable);
            $(".img1").draggable();
        }
    });
    $
    $("#refresh").click(function () {
        $(".img1").removeAttr('style');
        $(".img1").draggable("destroy");
        $(".img1").draggable();
    });

/////////////////////////////
    
    validarPregunta(1,1);
    validarPregunta(2,2);
    validarPregunta(3,3);
    validarPregunta(4,4);
    validarPregunta(5,5);

//////////////////////////  
/*$(".img1").hover(function () {
    var vect6 = new Array();
    var vect6all = new Array();
    //$('.respuesta6').each(function() {
    //    vect5all.push(this.value);
    //});
    $('.respuesta6').each(function() {
        if ($(this).text()) {
            vect6.push($(this).html());
        } 
    });
     $("#pregunta6").text(vect6);
     //   if(vect5.length==vect5all.length/2) {
     //       $("#pregunta5").css('background-color', 'rgb(123, 224, 140)');
     //   }else{
     //       $("#pregunta5").css('background-color', 'rgb(167, 167, 167)');
     //   }
});*/
    var hours = 0;
    var mins = 30;
    var seconds = 0;
    startTimer();
    function startTimer() {
        timex = setTimeout(function () {
            seconds--;
            if (seconds < 0) {
                seconds = 59;
                mins--;
                if (mins < 0) {
                    mins = 59;
                    hours--;
                    if (hours > 10) {
                        $("#hours").text("0" + hours + ":");
                    } else $("#hours").text(hours + ":");
                }
                if (mins < 10) {
                    $("#mins").text("0" + mins + ":");
                } else $("#mins").text(mins + ":");
            }
            if (seconds < 10) {
                $("#seconds").text("0" + seconds);
            } else {
                $("#seconds").text(seconds);
            }
            startTimer();
        }, 1000);
    }
    function validarPregunta(opcion,index) {
        switch (opcion) {
            case 1:
                $(".respuesta"+index).click(function () {
                    $("#pregunta"+index).css('background-color', 'rgb(123, 224, 140)');
                });
            break;
            case 2:
                $(".respuesta"+index).change(function () {
                    var vect1 = new Array();
                    $('input[name="respuesta'+index+'"]:checked').each(function() {
                        vect1.push(this.value);
                    });
                        if(vect1.length>0) {
                            $("#pregunta"+index).css('background-color', 'rgb(123, 224, 140)');
                        }else{
                            $("#pregunta"+index).css('background-color', 'rgb(167, 167, 167)');
                        }
                });
            break;
            case 3:
                $(".respuesta"+index).click(function () {
                    $("#pregunta"+index).css('background-color', 'rgb(123, 224, 140)');
                });
            break;
            case 4:
                $('.respuesta'+index).change(function () {
                    if ($.trim($('.respuesta'+index).val()).length > 0) {
                        $('#pregunta'+index).css('background-color', 'rgb(123, 224, 140)');
                    } else {
                        $('#pregunta'+index).css('background-color', 'rgb(167, 167, 167)');
                    }
                });
            break;
            case 5:
                $(".respuesta"+index).change(function () {
                    var vect5 = new Array();
                    var vect5all = new Array();
                    $('.respuesta'+index).each(function() {
                        vect5all.push(this.value);
                    });
                    $('.respuesta'+index+':checked').each(function() {
                        vect5.push(this.value);
                    });
                        if(vect5.length==vect5all.length/2) {
                            $("#pregunta"+index).css('background-color', 'rgb(123, 224, 140)');
                        }else{
                            $("#pregunta"+index).css('background-color', 'rgb(167, 167, 167)');
                        }
                });
            break;
        }
    }
 });